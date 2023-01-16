let pano_moins = document.getElementById("pano_moins");
let pano_plus = document.getElementById("pano_plus");

let d1 = document.getElementById("content-index");
let d2 = document.getElementById("content-pano");
let nav = document.getElementById("nav");

let localisation = document.getElementById("localisation");


pano_plus.addEventListener("click", () => {
  if(d1.style.opacity != 0 && nav.style.opacity != 0 && getComputedStyle(pano_moins).display != "block"){
    localisation.style.display = "block";
    d1.style.opacity = 0;
    nav.style.opacity = 0;
    d2.style.display = "block";
    pano_moins.style.display = "block";
    pano_plus.style.display = "none";
  } else {
    localisation.style.display = "none";
    d1.style.opacity = 1;
    nav.style.opacity = 1;
    d2.style.display = "none";
    pano_moins.style.display = "none";
    pano_plus.style.display = "block";
  }
});

pano_moins.addEventListener("click", () => {
    if(d1.style.opacity != 1 && nav.style.opacity != 1 && getComputedStyle(pano_moins).display != "none"){
      d1.style.opacity = 1;
      nav.style.opacity = 1;
      d2.style.display = "none";
      pano_moins.style.display = "none";
      pano_plus.style.display = "block";
    } else {
      d1.style.opacity = 0;
      nav.style.opacity = 0;
      d2.style.display = "block";
      pano_moins.style.display = "block";
      pano_plus.style.display = "none";
    }
  });


var hoverElement = document.getElementById("roche_nue");
var hiddenImage = document.getElementById("afficher");



hoverElement.onmouseover = function() {
  if(hiddenImage.style.display != "block"){
  hiddenImage.style.display = "block";
  }else{
  hiddenImage.style.display = "none";
  }
}
