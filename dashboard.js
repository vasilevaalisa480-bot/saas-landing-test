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

  if (modal && form) {
  var openBtn = document.getElementById("open-request-modal");
  var saveBtn = document.getElementById("request-modal-save");
  var closeTriggers = modal.querySelectorAll("[data-request-modal-close]");

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
      openModal();
    });
  }

  closeTriggers.forEach(function (el) {
    el.addEventListener("click", function () {
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
  }
})();
