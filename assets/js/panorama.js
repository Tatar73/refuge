let pano_moins = document.getElementById("pano_moins");
let pano_plus = document.getElementById("pano_plus");

let index = document.getElementById("content-index");
let pano = document.getElementById("content-pano");
let nav = document.getElementById("nav");

var marker = document.getElementById("marker");



pano_plus.addEventListener("click", () => {
  if(index.style.opacity != 0 &&  pano_moins.style.display != "block"){
    index.style.opacity = 0;
    marker.style.display = "block";
    pano.style.display = "block";
    pano_moins.style.display = "block";
    pano_plus.style.display = "none";
  } else {
    marker.style.display = "none";
    index.style.opacity = 1;
    pano.style.display = "none";
    pano_moins.style.display = "none";
    pano_plus.style.display = "block";
  }
});

pano_moins.addEventListener("click", () => {
    if(index.style.opacity != 1 && pano_moins.display != "none"){
      marker.style.display = "none";
      index.style.opacity = 1;
      pano.style.display = "none";
      pano_moins.style.display = "none";
      pano_plus.style.display = "block";
    } else {
      marker.style.display = "block";
      index.style.opacity = 0;
      pano.style.display = "block";
      pano_moins.style.display = "block";
      pano_plus.style.display = "none";
    }
  });
