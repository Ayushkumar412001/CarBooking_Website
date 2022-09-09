// drop down menu script
var menu = document.getElementById("menu");
menu.style.maxHeight = "0px";
function togglemenu() {
    if (menu.style.maxHeight == "0px") {
        menu.style.maxHeight = "590px";
    }
    else {
        menu.style.maxHeight = "0px";
    }
}

// When the user scrolls down 100px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};
      
var nevbar =  document.getElementById("nevbar");
var logo = document.getElementById("logo");

var home = document.getElementById("home");
var about = document.getElementById("about");
var service = document.getElementById("service");
var pricing= document.getElementById("pricing");
var cars = document.getElementById("cars");
var contact = document.getElementById("contact");

var menuicon = document.getElementById("menuicon");
var menu = document.getElementById("menu");

var user = document.getElementById("user");


function scrollFunction() {

    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        
        nevbar.style.backgroundColor = "white";
        logo.style.color = "black";

        home.style.color = "black";
        about.style.color = "black";
        service.style.color = "black";
        pricing.style.color = "black";
        cars.style.color = "black";
        contact.style.color = "black";
        user.style.color = "black";

        menuicon.style.color = "rgba(0, 0, 0, 0.6)";

    } else {

        nevbar.style.backgroundColor = "black";
        logo.style.color = "white";

        home.style.color = "white";
        about.style.color = "white";
        service.style.color = "white";
        pricing.style.color = "white";
        cars.style.color = "white";
        contact.style.color = "white";
        user.style.color = "white";

        menuicon.style.color = "rgba(255, 255, 255, 0.5)";

    }

    if (nevbar.style.backgroundColor == "white") {
        
        menu.style.backgroundColor = "white";

    } else {

        menu.style.backgroundColor = "black";

    }

}