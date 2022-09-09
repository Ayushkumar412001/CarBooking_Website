var btn = document.getElementsByClassName("btn");
var slide = document.getElementById("slide");

btn[0].onclick = function() {
    slide.style.transform = " translateX(0px)";
    for ( i= 0 ; i<5 ; i++ ) {
        btn[i].classList.remove("active");
        btn[i].classList.remove("fas");
    }
    this.classList.add("active");
    this.classList.add("fas");
}

btn[1].onclick = function() {
    slide.style.transform = " translateX(-360px)";

    for ( i= 0 ; i<5 ; i++ ) {
        btn[i].classList.remove("active");
        btn[i].classList.remove("fas");
    }
    this.classList.add("active");
    this.classList.add("fas");
}

btn[2].onclick = function() {
    slide.style.transform = " translateX(-720px)";

    for ( i= 0 ; i<5 ; i++ ) {
        btn[i].classList.remove("active");
        btn[i].classList.remove("fas");
    }
    this.classList.add("active");
    this.classList.add("fas");
}

btn[3].onclick = function() {
    slide.style.transform = " translateX(-1080px)";

    for ( i= 0 ; i<5 ; i++ ) {
        btn[i].classList.remove("active");
        btn[i].classList.remove("fas");
    }
    this.classList.add("active");
    this.classList.add("fas");
}

btn[4].onclick = function() {
    slide.style.transform = " translateX(-1440px)";

    for ( i= 0 ; i<5 ; i++ ) {
        btn[i].classList.remove("active");
        btn[i].classList.remove("fas");
    }
    this.classList.add("active");
    this.classList.add("fas");
}