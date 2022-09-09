// Drop Down Cars (for laptops)

var morecars = document.getElementById("morecars");
// var firstline = document.getElementById("firstline");
var dropdowniconlaptop = document.getElementById("dropdownlaptop");

morecars.style.display = "none";

function dropdownlaptop() {
    if ( morecars.style.display == "grid" ) {

        morecars.style.display = "none";
        dropdowniconlaptop.innerHTML = '<i class="fas fa-chevron-down"></i> MORE CARS <i class="fas fa-chevron-down"></i>';

    } else {

        morecars.style.display = "grid";
        dropdowniconlaptop.innerHTML = '<i class="fas fa-chevron-up"></i> LESS CARS <i class="fas fa-chevron-up"></i>';

    }

}


// Drop Down Cars (for mobile)

var morecars = document.getElementById("morecars");
// var firstline = document.getElementById("firstline");
var dropdowniconmobile = document.getElementById("dropdownmobile");

morecars.style.display = "none";

function dropdownmobile() {
    
    if ( morecars.style.display == "block" ) {

        morecars.style.display = "none";
        dropdowniconmobile.innerHTML = '<i class="fas fa-chevron-down"></i> MORE CARS <i class="fas fa-chevron-down"></i>';

    } else {

        morecars.style.display = "block";
        dropdowniconmobile.innerHTML = '<i class="fas fa-chevron-up"></i> LESS CARS <i class="fas fa-chevron-up"></i>';

    }

}