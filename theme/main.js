(function () {
  "use strict";

  var modal = document.getElementById("login-modal");
  if (!modal) return;

  var closeButtons = modal.querySelectorAll("[data-login-modal-close]");
  var form = document.getElementById("login-form");
  var firstInput = document.getElementById("login-email");

  function openModal() {
    modal.classList.add("is-open");
    modal.setAttribute("aria-hidden", "false");
    document.body.classList.add("login-modal--locked");
    if (firstInput) {
      firstInput.focus();
    }
  }

  function closeModal() {
    modal.classList.remove("is-open");
    modal.setAttribute("aria-hidden", "true");
    document.body.classList.remove("login-modal--locked");
  }

  document.addEventListener("click", function (event) {
    var trigger = event.target.closest(".js-open-login");
    if (trigger) {
      event.preventDefault();
      openModal();
    }
  });

  closeButtons.forEach(function (button) {
    button.addEventListener("click", closeModal);
  });

  modal.addEventListener("click", function (event) {
    if (event.target.classList.contains("login-modal__backdrop")) {
      closeModal();
    }
  });

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && modal.classList.contains("is-open")) {
      closeModal();
    }
  });

  if (form) {
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      closeModal();
    });
  }
})();
