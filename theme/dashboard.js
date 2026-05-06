/**
 * Личный кабинет: вкладки + модальное окно заявки + фильтры и активность.
 * Подключайте после разметки страницы (defer или перед </body>).
 */
(function () {
  "use strict";

  /* ----- Вкладки сайдбара ----- */
  var tabButtons = document.querySelectorAll(".sidebar-item[data-tab-target]");
  var tabPanels = document.querySelectorAll(".tab-content");

  function activateTab(targetId) {
    tabButtons.forEach(function (btn) {
      var isActive = btn.getAttribute("data-tab-target") === targetId;
      btn.classList.toggle("sidebar-item--active", isActive);
      btn.setAttribute("aria-selected", isActive ? "true" : "false");
    });
    tabPanels.forEach(function (panel) {
      var isActive = panel.id === targetId;
      panel.classList.toggle("tab-content--active", isActive);
      panel.toggleAttribute("hidden", !isActive);
    });
  }

  tabButtons.forEach(function (btn) {
    btn.addEventListener("click", function () {
      var id = btn.getAttribute("data-tab-target");
      if (id) activateTab(id);
    });
  });

  /* ----- Модальное окно заявки ----- */
  var modal = document.getElementById("request-modal");
  var form = document.getElementById("request-form");

  // Если модалки нет, выходим, но вкладки уже инициализированы
  if (!modal || !form) return;

  var openBtn = document.getElementById("open-request-modal");
  var saveBtn = document.getElementById("request-modal-save");
  var closeTriggers = modal.querySelectorAll("[data-request-modal-close]");
  var numberDisplay = document.getElementById("request-modal-number-display");

  var el = {
    requestId: document.getElementById("request-id"),
    fullName: document.getElementById("request-fullname"),
    requestDate: document.getElementById("request-date"),
    service: document.getElementById("request-service"),
    description: document.getElementById("request-description"),
    status: document.getElementById("request-status"),
    specialist: document.getElementById("request-specialist"),
    comment: document.getElementById("request-comment"),
    manager: document.getElementById("request-manager"),
  };

  function todayISO() {
    var d = new Date();
    var m = String(d.getMonth() + 1);
    var day = String(d.getDate());
    return (
      d.getFullYear() +
      "-" +
      (m.length < 2 ? "0" + m : m) +
      "-" +
      (day.length < 2 ? "0" + day : day)
    );
  }

  function setSelectValue(select, value) {
    if (!select) return;
    select.value = value || "";
    if (select.value !== (value || "") && value) {
      select.selectedIndex = 0;
    }
  }

  /** Пустая форма для кнопки «Новая заявка» */
  function resetFormForNew() {
    if (el.requestId) el.requestId.value = "";
    if (el.fullName) el.fullName.value = "";
    if (el.requestDate) el.requestDate.value = todayISO();
    setSelectValue(el.service, "consultation");
    if (el.description) el.description.value = "";
    setSelectValue(el.status, "new");
    setSelectValue(el.specialist, "ivanov");
    if (el.comment) el.comment.value = "";
    setSelectValue(el.manager, "");
    if (numberDisplay) numberDisplay.textContent = "Новая заявка";
  }

  /** Заполнение из data-* на кнопке «Изменить» */
  function fillFormFromEditButton(button) {
    var d = button.dataset;
    if (el.requestId) el.requestId.value = d.requestId || "";
    if (el.fullName) el.fullName.value = d.fullName || "";
    if (el.requestDate) el.requestDate.value = d.requestDate || "";
    setSelectValue(el.service, d.service);
    if (el.description) el.description.value = d.description || "";
    setSelectValue(el.status, d.status);
    setSelectValue(el.specialist, d.specialist);
    if (el.comment) el.comment.value = d.comment || "";
    setSelectValue(el.manager, d.manager);
    if (numberDisplay) {
      numberDisplay.textContent =
        d.requestId && String(d.requestId).length
          ? "Заявка №" + d.requestId
          : "Заявка";
    }
  }

  function openModal() {
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.classList.add("request-modal--locked");
    var firstFocus =
      form.querySelector("#request-fullname") ||
      form.querySelector("input:not([readonly]):not([disabled]), select, textarea");
    if (firstFocus) firstFocus.focus();
  }

  function closeModal() {
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.classList.remove("request-modal--locked");
  }

  function collectFormData() {
    var data = {};
    var fd = new FormData(form);
    fd.forEach(function (value, key) {
      data[key] = value;
    });
    return data;
  }

  if (openBtn) {
    openBtn.addEventListener("click", function () {
      resetFormForNew();
      openModal();
    });
  }

  document.addEventListener("click", function (e) {
    var editBtn = e.target.closest(".js-edit-request");
    if (!editBtn) return;
    e.preventDefault();
    fillFormFromEditButton(editBtn);
    openModal();
  });

  closeTriggers.forEach(function (closeEl) {
    closeEl.addEventListener("click", function () {
      closeModal();
    });
  });

  if (saveBtn) {
    saveBtn.addEventListener("click", function (e) {
      e.preventDefault();
      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }
      console.log("[request-modal] сохранение заявки:", collectFormData());
      closeModal();
    });
  }

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && modal.classList.contains("is-open")) {
      closeModal();
    }
  });

  /* ----- Фильтры таблицы заявок (максимальный тариф) ----- */

  var requestsTable = document.getElementById("requests-table");
  if (requestsTable) {
    var rows = Array.prototype.slice.call(
      requestsTable.querySelectorAll("tbody tr")
    );

    var filterStatus = document.getElementById("filter-status");
    var filterDoctor = document.getElementById("filter-doctor");
    var filterPeriod = document.getElementById("filter-period");
    var searchInput = document.getElementById("search-requests");

    function matchesStatus(row, statusValue) {
      if (!statusValue || statusValue === "all") return true;
      var rowStatus = row.getAttribute("data-status") || "";
      return rowStatus === statusValue;
    }

    function matchesDoctor(row, doctorValue) {
      if (!doctorValue || doctorValue === "all") return true;
      var rowDoctor = row.getAttribute("data-doctor") || "";
      return rowDoctor === doctorValue;
    }

    function matchesPeriod(row, periodValue) {
      if (!periodValue || periodValue === "all") return true;
      var createdAt = row.getAttribute("data-created-at");
      if (!createdAt) return true;

      var createdDate = new Date(createdAt);
      if (isNaN(createdDate.getTime())) return true;

      var now = new Date();
      var diffMs = now - createdDate;
      var diffDays = diffMs / (1000 * 60 * 60 * 24);

      if (periodValue === "7d") {
        return diffDays <= 7;
      }
      if (periodValue === "30d") {
        return diffDays <= 30;
      }
      return true;
    }

    function matchesSearch(row, query) {
      if (!query) return true;
      var q = query.toLowerCase().trim();
      if (!q) return true;

      var cells = row.querySelectorAll("td");
      var haystack = "";
      if (cells[0]) haystack += " " + cells[0].textContent; // ID
      if (cells[1]) haystack += " " + cells[1].textContent; // Name
      if (cells[2]) haystack += " " + cells[2].textContent; // Service / doctor

      haystack = haystack.toLowerCase();
      return haystack.indexOf(q) !== -1;
    }

    function applyFilters() {
      var statusVal = filterStatus ? filterStatus.value : "all";
      var doctorVal = filterDoctor ? filterDoctor.value : "all";
      var periodVal = filterPeriod ? filterPeriod.value : "all";
      var searchVal = searchInput ? searchInput.value : "";

      rows.forEach(function (row) {
        var visible =
          matchesStatus(row, statusVal) &&
          matchesDoctor(row, doctorVal) &&
          matchesPeriod(row, periodVal) &&
          matchesSearch(row, searchVal);

        row.style.display = visible ? "" : "none";
      });
    }

    if (filterStatus) {
      filterStatus.addEventListener("change", applyFilters);
    }
    if (filterDoctor) {
      filterDoctor.addEventListener("change", applyFilters);
    }
    if (filterPeriod) {
      filterPeriod.addEventListener("change", applyFilters);
    }
    if (searchInput) {
      searchInput.addEventListener("input", applyFilters);
    }

    // первоначальное применение фильтров (на случай предустановленных значений)
    applyFilters();
  }

  /* ----- Activity feed refresh (максимальный тариф) ----- */

  var activityRefreshBtn = document.getElementById("activity-refresh-btn");
  if (activityRefreshBtn) {
    activityRefreshBtn.addEventListener("click", function () {
      console.log("[dashboard] Activity feed refresh clicked");
      // Здесь в будущем можно будет подтягивать реальные данные с сервера
    });
  }
})();