(function () {
  let header = document.querySelector("header");


  window.addEventListener("scroll", () => {
    header.classList.toggle("top", window.scrollY === 0)
  });
})()