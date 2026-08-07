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
})();
