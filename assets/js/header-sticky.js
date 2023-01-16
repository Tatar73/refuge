const header = document.querySelector("header");
let lastScrollY = 0;

window.addEventListener("scroll", () => {
  const currentScrollY = window.scrollY;
  if (currentScrollY < lastScrollY) {
    header.style.display = "block";
  } else {
    header.style.display = "none";
  }
  lastScrollY = currentScrollY;
});