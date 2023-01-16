let pano_moins = document.getElementById("pano_moins");
let pano_plus = document.getElementById("pano_plus");

let index = document.getElementById("content-index");
let pano = document.getElementById("content-pano");
let nav = document.getElementById("nav");



pano_plus.addEventListener("click", () => {
  console.log('pano plus')
  if(index.style.opacity != 0 &&  pano_moins.style.display != "block"){
    index.style.opacity = 0;
    pano.style.display = "block";
    pano_moins.style.display = "block";
    pano_plus.style.display = "none";
  } else {
    index.style.opacity = 1;
    pano.style.display = "none";
    pano_moins.style.display = "none";
    pano_plus.style.display = "block";
  }
});

pano_moins.addEventListener("click", () => {
    if(index.style.opacity != 1 && pano_moins.display != "none"){
      index.style.opacity = 1;
      pano.style.display = "none";
      pano_moins.style.display = "none";
      pano_plus.style.display = "block";
    } else {
      index.style.opacity = 0;
      pano.style.display = "block";
      pano_moins.style.display = "block";
      pano_plus.style.display = "none";
    }
  });


var hoverElement = document.getElementById("localisation");
var hiddenImage = document.getElementById("afficher");



hoverElement.onmouseover = function() {
  if(hiddenImage.style.opacity != 1){
  hiddenImage.style.opacity = 1;
  }else{
  hiddenImage.style.opacity = 0;
  }
}

hoverElement.onmouseoverout = function() {
  if(hiddenImage.style.opacity != 0){
  hiddenImage.style.opacity = 0;
  }else{
  hiddenImage.style.opacity = 1;
  }
}
