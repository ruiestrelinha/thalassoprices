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

  const languageSelector = document.getElementById("language-selector");
  const currentLanguage = languageSelector.querySelector(".language-selector__current");
  const languageOptions = document.querySelectorAll("[data-language]");

  languageOptions.forEach((option) => {
    option.addEventListener("click", () => {
      const language = option.dataset.language;

      currentLanguage.textContent = language.toUpperCase();
      document.documentElement.lang = language;
      languageOptions.forEach((item) => {
        const isSelected = item === option;
        item.classList.toggle("active", isSelected);
        item.toggleAttribute("aria-current", isSelected);
      });
    });
  });
})();
