// var loader = document.getElementsById("preloader");

// window.addEventListener("load", function() {
//     loader.style.display = "none" ;
// } ) 





var preloader = document.getElementById("preloader");

function loader() {
    setTimeout(timeout, 100);
}
function timeout(){
    preloader.style.display = "none";
}