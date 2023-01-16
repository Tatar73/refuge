const header = document.querySelector("header");
let lastScrollY = 0;

window.addEventListener("scroll", () => {
  const currentScrollY = window.scrollY;
  if (currentScrollY < lastScrollY) {
    header.style.opacity = 1;
  } else {
    header.style.opacity = 0;
  }
  lastScrollY = currentScrollY;

  header.classList.toggle("top", currentScrollY === 0)
  
});