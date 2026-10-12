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

  /* ------------------------------------------------------------------
   * Day / night theme
   * The initial theme is applied by an inline <head> script (no flash).
   * Here we only wire up the toggle, keep aria/title/theme-color in sync
   * and follow the OS preference until the user chooses explicitly.
   * ------------------------------------------------------------------ */
  const THEME_KEY = "thalasso-theme";
  const root = document.documentElement;
  const themeButton = document.getElementById("theme-toggle");
  const themeColorMeta = document.querySelector('meta[name="theme-color"]');
  const darkMedia = window.matchMedia
    ? window.matchMedia("(prefers-color-scheme: dark)")
    : null;

  function readStoredTheme() {
    try {
      const value = localStorage.getItem(THEME_KEY);
      return value === "light" || value === "dark" ? value : null;
    } catch (e) {
      return null; // localStorage blocked (private mode etc.)
    }
  }

  function storeTheme(theme) {
    try {
      localStorage.setItem(THEME_KEY, theme);
    } catch (e) {
      /* ignore — the page still works without persistence */
    }
  }

  function currentTheme() {
    return root.getAttribute("data-theme") === "dark" ? "dark" : "light";
  }

  function updateThemeColor(theme) {
    if (!themeColorMeta) {
      return;
    }
    const cssValue = getComputedStyle(root)
      .getPropertyValue("--theme-color")
      .trim();
    themeColorMeta.setAttribute(
      "content",
      cssValue || (theme === "dark" ? "#0d1b24" : "#ffffff")
    );
  }

  function updateThemeButton(theme) {
    if (!themeButton) {
      return;
    }
    const isDark = theme === "dark";
    const label = isDark
      ? themeButton.dataset.labelToLight
      : themeButton.dataset.labelToDark;

    themeButton.setAttribute("aria-label", label);
    themeButton.setAttribute("title", label);
    themeButton.setAttribute("aria-pressed", String(isDark));
  }

  function applyTheme(theme, persist) {
    root.setAttribute("data-theme", theme);
    if (persist) {
      storeTheme(theme);
    }
    updateThemeButton(theme);
    updateThemeColor(theme);
  }

  // Sync the UI with the theme already set by the <head> script.
  applyTheme(currentTheme(), false);

  if (themeButton) {
    themeButton.addEventListener("click", () => {
      applyTheme(currentTheme() === "dark" ? "light" : "dark", true);
    });
  }

  // Follow the OS theme in real time until the user picks one manually.
  if (darkMedia && typeof darkMedia.addEventListener === "function") {
    darkMedia.addEventListener("change", (event) => {
      if (!readStoredTheme()) {
        applyTheme(event.matches ? "dark" : "light", false);
      }
    });
  }

  // Enable colour transitions only after the first paint (no animation on load).
  requestAnimationFrame(() => {
    requestAnimationFrame(() => root.classList.add("theme-ready"));
  });
})();
