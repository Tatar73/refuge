let logo = document.getElementById("logo_refuge");
let header = document.querySelector("header");

var url = window.location.href;

if (window.location.href != url ){
    logo.style.opacity = 1;
    header.style.position = "relative";
}else{
    logo.style.opacity = 0;
};