(function () {
  "use strict";

  // На дашборде не трогаем шапку/футер
  if (document.body.classList.contains("page-dashboard")) return;

  function injectPartial(containerId, partialPath) {
    var container = document.getElementById(containerId);
    if (!container) return;

    fetch(partialPath)
      .then(function (res) {
        if (!res.ok) throw new Error("Failed to load " + partialPath);
        return res.text();
      })
      .then(function (html) {
        container.innerHTML = html;
      })
      .catch(function (err) {
        console.error("[layout] include error:", err);
      });
  }

  injectPartial("site-header", "partials/header.html");
  injectPartial("site-footer", "partials/footer.html");
})();