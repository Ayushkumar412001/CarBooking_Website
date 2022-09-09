var videoplayer = document.getElementById("video");
var video = document.getElementById("myVideo");


function playvideo() {
    videoplayer.style.height = "100vh";
    if (video.pause) {
        video.play();
    }
}

function closewindo() {
    videoplayer.style.height = "0";
    if (video.play) {
        video.pause();
    }
}