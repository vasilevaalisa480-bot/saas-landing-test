// FAQ accordion
const faqItems = document.querySelectorAll(".faq__item");

faqItems.forEach((item) => {
  const questionBtn = item.querySelector(".faq__question");
  const answer = item.querySelector(".faq__answer");

  questionBtn.addEventListener("click", () => {
    const isOpen = item.classList.contains("is-open");

    if (isOpen) {
      item.classList.remove("is-open");
      questionBtn.setAttribute("aria-expanded", "false");
      answer.style.maxHeight = null;
    } else {
      item.classList.add("is-open");
      questionBtn.setAttribute("aria-expanded", "true");
      answer.style.maxHeight = answer.scrollHeight + "px";
    }
  });
});

// Form handling
const form = document.getElementById("questionForm");
const successMessage = document.getElementById("formSuccess");

form.addEventListener("submit", (event) => {
  event.preventDefault();

  const formData = new FormData(form);
  const payload = {
    name: formData.get("name")?.toString().trim(),
    email: formData.get("email")?.toString().trim(),
    question: formData.get("question")?.toString().trim(),
  };

  console.log("FAQ question submitted:", payload);

  successMessage.classList.add("is-visible");
  form.reset();

  setTimeout(() => {
    successMessage.classList.remove("is-visible");
  }, 5000);
});

// Keep opened answers correct on window resize
window.addEventListener("resize", () => {
  document.querySelectorAll(".faq__item.is-open").forEach((item) => {
    const answer = item.querySelector(".faq__answer");
    answer.style.maxHeight = answer.scrollHeight + "px";
  });
});
