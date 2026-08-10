(function () {
  const btnBemEstar = document.getElementById("btn-bem-estar");
  const btnCura = document.getElementById("btn-cura");
  const painelBemEstar = document.getElementById("painel-bem-estar");
  const painelCura = document.getElementById("painel-cura");

  function show(target) {
    const isBemEstar = target === "bem-estar";

    btnBemEstar.classList.toggle("active", isBemEstar);
    btnCura.classList.toggle("active", !isBemEstar);

    btnBemEstar.setAttribute("aria-selected", String(isBemEstar));
    btnCura.setAttribute("aria-selected", String(!isBemEstar));

    painelBemEstar.hidden = !isBemEstar;
    painelCura.hidden = isBemEstar;
  }

  btnBemEstar.addEventListener("click", () => show("bem-estar"));
  btnCura.addEventListener("click", () => show("cura"));

  // Language switching is handled server-side (see index.php).
  // The Bootstrap dropdown below only needs the data-bs-toggle attribute.

  const backToTopButton = document.querySelector(".back-to-top");

  function toggleBackToTopButton() {
    const scrollPosition = Math.max(
      window.scrollY || 0,
      document.documentElement.scrollTop || 0,
      document.body.scrollTop || 0
    );

    backToTopButton.classList.toggle("is-visible", scrollPosition > 100);
  }

  backToTopButton.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  window.addEventListener("scroll", toggleBackToTopButton, { passive: true });
  document.addEventListener("scroll", toggleBackToTopButton, { passive: true });
  window.addEventListener("resize", toggleBackToTopButton);
  toggleBackToTopButton();
})();
