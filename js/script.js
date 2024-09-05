if (
  window.matchMedia &&
  window.matchMedia("(prefers-color-scheme: light)").matches
) {
  if (document.body.classList.contains("dark")) {
    toggleMood("mood-toggler");
  }
} else {
  if (document.body.classList.contains("light")) {
    toggleMood("mood-toggler");
  }
}

function setThemeColor(id) {
  let root = document.querySelector(`html`);
  root.classList.remove("theme-1", "theme-2", "theme-3", "theme-4", "theme-5");
  root.classList.add(`theme-${id}`);
  localStorage.setItem("theme", `theme-${id}`);
}

function toggleActive(id) {
  document.getElementById(id).classList.toggle("active");
}

function toggleMood(id) {
  const icon = document.getElementById(id);
  if (document.body.classList.contains("dark")) {
    document.body.className = "light";
    icon.className = "fa fa-moon";
    localStorage.setItem("mood", 1);
    setThemeColor(4);
  } else {
    document.body.className = "dark";
    icon.className = "fa fa-sun";
    localStorage.setItem("mood", 2);
    setThemeColor(1);
  }
}

window.onload = function () {
  const pages = document.querySelectorAll(".page");
  const header = document.getElementById("header");
  const headerBtn = document.getElementById("navToggler");
  const pagesCont = document.getElementById("pagesContainer");

  document.addEventListener("click", function (e) {
    if (
      e.target != headerBtn &&
      !Array.of(...headerBtn.children).includes(e.target)
    ) {
      header.classList.remove("active");
      pagesCont.classList.add("wide");
    }
  });

  headerBtn.addEventListener("click", function () {
    header.classList.toggle("active");
    pagesCont.classList.toggle("wide");
  });

  pages.forEach((page) => {
    page.addEventListener("scroll", () => {
      const colorSwitcher = document.getElementById("color-switch");
      if (colorSwitcher.classList.contains("active")) {
        colorSwitcher.classList.remove("active");
      }

      if (
        header.classList.contains("active") ||
        pagesCont.classList.contains("active")
      ) {
        header.classList.remove("active");
        pagesCont.classList.add("wide");
      }
    });
  });

  if (localStorage.getItem("theme") != null) {
    let root = document.querySelector(`html`);
    root.classList.remove("theme-1", "theme-4");
    root.classList.add(localStorage.getItem("theme"));
  }

  if (localStorage.getItem("mood") != null) {
    if (localStorage.getItem("mood") == 1) {
      document.body.className = "light"; // dark
      document.getElementById("mood-toggler").className = "fa fa-moon"; // fa fa-moon
    }
  }

  const menuLinks = document.querySelectorAll(".header .links a");

  menuLinks.forEach((e) => {
    e.addEventListener("click", function () {
      setActiveMenu(this.dataset.page);
    });
  });

  const anchers = document.querySelectorAll(".targeted-link");
  anchers.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      setActiveMenu(this.dataset.page);
    });
  });

  const url = new URL(window.location.href);
  const hash = url.hash.substring(1) ?? "";

  function setActiveMenu(activePage) {
    menuLinks.forEach((e) => e.classList.remove("active"));
    document.querySelector(`.${activePage}-link`).classList.add("active");
    pages.forEach((page) => page.classList.remove("active"));
    document.getElementById(activePage).classList.add("active");
  }

  if (hash) {
    menuLinks.forEach((link) => {
      if (hash == link.dataset.page) {
        setActiveMenu(link.dataset.page);
      }
    });
  }
};
