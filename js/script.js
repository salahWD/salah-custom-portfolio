const header = document.getElementById("header");
const menu = document.getElementById("navToggler");
const mode = document.getElementById("mode-toggle");
const pages = document.querySelectorAll(".page");
const links = document.querySelectorAll(".links a");

function setMenu(open) {
  header.classList.toggle("active", open);
  menu.setAttribute("aria-expanded", String(open));
}

menu.addEventListener("click", () => setMenu(!header.classList.contains("active")));
document.addEventListener("click", (event) => {
  if (!header.contains(event.target)) setMenu(false);
});
document.addEventListener("keydown", (event) => {
  if (event.key === "Escape" && header.classList.contains("active")) {
    setMenu(false);
    menu.focus();
  }
});

function setMode(light, theme) {
  document.body.classList.toggle("dark", !light);
  document.body.classList.toggle("light", light);
  document.documentElement.classList.remove("theme-1", "theme-2", "theme-3", "theme-4", "theme-5");
  document.documentElement.classList.add(theme || (light ? "theme-4" : "theme-1"));
  mode.firstElementChild.className = light ? "fas fa-moon" : "fas fa-sun";
  mode.setAttribute("aria-pressed", String(light));
}

const savedMode = localStorage.getItem("mood");
setMode(
  savedMode === null ? matchMedia("(prefers-color-scheme: light)").matches : savedMode === "1",
  localStorage.getItem("theme")
);

mode.addEventListener("click", () => {
  const light = document.body.classList.contains("dark");
  setMode(light);
  localStorage.setItem("mood", light ? "1" : "2");
  localStorage.setItem("theme", light ? "theme-4" : "theme-1");
});

const initialPage = document.querySelector(".page.active")?.id;
function activateHashPage() {
  const hash = location.hash.slice(1);
  const pageId = [...links].some((link) => link.dataset.page === hash) ? hash : initialPage;
  pages.forEach((page) => page.classList.toggle("active", page.id === pageId));
  links.forEach((link) => {
    const current = link.dataset.page === pageId;
    link.classList.toggle("active", current);
    if (current) link.setAttribute("aria-current", "page");
    else link.removeAttribute("aria-current");
  });
}
if (location.hash) activateHashPage();
window.addEventListener("hashchange", activateHashPage);


const portfolio = document.getElementById("portfolio");
portfolio.addEventListener("click", (event) => {
  const card = event.target.closest(".project-card");
  if (card) {
    const dialog = document.getElementById(card.getAttribute("aria-controls"));
    dialog.showModal();
    dialog.scrollTop = 0;
  }
});
