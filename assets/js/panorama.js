(function () {

  let pano_moins = document.getElementById("pano_moins");
  let pano_plus = document.getElementById("pano_plus");

  let index = document.getElementById("content-index");
  let pano = document.getElementById("content-pano");
  let header = document.querySelector("header");

  var markers = document.querySelectorAll(".marker");



  pano_plus.addEventListener("click", () => {
    console.log("test");
    if(!index.classList.contains("hidden") &&  pano_moins.style.display != "block"){
      console.log("if");
      markers.forEach(marker => {
        marker.classList.add("hidden");
      });
      header.classList.add("hidden");
      index.classList.add("hidden");
      pano.style.display = "block";
      pano_moins.style.display = "block";
      pano_plus.style.display = "none";
    } else {
      console.log("else");
      header.classList.remove("hidden");
      markers.forEach(marker => {
        marker.classList.remove("hidden");
      });
      index.classList.remove("hidden");
      pano.style.display = "none";
      pano_moins.style.display = "none";
      pano_plus.style.display = "block";
    }
  });

  pano_moins.addEventListener("click", () => {
      if(index.classList.contains("hidden")  && pano_moins.display != "none"){
        header.classList.remove("hidden");
        markers.forEach(marker => {
          marker.classList.remove("hidden");
        });
        index.classList.remove("hidden");
        pano.style.display = "none";
        pano_moins.style.display = "none";
        pano_plus.style.display = "block";
      } else {
        header.classList.add("hidden");
        markers.forEach(marker => {
          marker.classList.add("hidden");
        });
        index.classList.add("hidden");
        pano.style.display = "block";
        pano_moins.style.display = "block";
        pano_plus.style.display = "none";
      }
    });

})()