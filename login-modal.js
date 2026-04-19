(function () {
  "use strict";

  var modal = document.getElementById("login-modal");
  if (!modal) return;

  var openButtons = document.querySelectorAll(".js-open-login");
  var closeButtons = modal.querySelectorAll("[data-login-modal-close]");
  var form = document.getElementById("login-form");
  var firstInput = document.getElementById("login-email");

  function openModal() {
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.classList.add("login-modal--locked");
    if (firstInput) firstInput.focus();
  }

  function closeModal() {
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.classList.remove("login-modal--locked");
  }

  openButtons.forEach(function (btn) {
    btn.addEventListener("click", function (e) {
      e.preventDefault();
      openModal();
    });
  });

  closeButtons.forEach(function (btn) {
    btn.addEventListener("click", function () {
      closeModal();
    });
  });

  modal.addEventListener("click", function (e) {
    if (e.target.classList.contains("login-modal__backdrop")) {
      closeModal();
    }
  });

  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && modal.classList.contains("is-open")) {
      closeModal();
    }
  });

  if (form) {
    form.addEventListener("submit", function (e) {
      e.preventDefault();
      // Здесь потом добавишь реальный логин.
      closeModal();
    });
  }
})();