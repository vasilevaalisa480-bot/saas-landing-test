/**
 * Личный кабинет: вкладки + модальное окно заявки.
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
    return d.getFullYear() + "-" + (m.length < 2 ? "0" + m : m) + "-" + (day.length < 2 ? "0" + day : day);
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
})();
