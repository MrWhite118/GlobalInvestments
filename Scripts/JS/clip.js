var b = document.getElementById("one");
var currentPos = 0;
var interval;
var nhshd = $("div");


// Some jQuery Effects

// $("div").hide(4000);
// $("div").show(4000);
// $("div").fadeIn(4000);
// $("div").fadeOut(4000);
// $("div").slideUp(5000);
// $("div").slideDown(4000);

// Events




console.log(nhshd);

function move() {
      b.style.position = "absolute";
      b.style.left = "0px";
      b.style.top = "100px";  
   
      interval = setInterval(animate,50);
}

function animate() {
    currentPos+=5;
    b.style.left = currentPos + "px";

    if (currentPos > 900) {
        clearInterval(interval);
      b.style.position = "";
      b.style.left = "";
      b.style.top = "";
    }
}

window.onload = function () {
   setTimeout(move,5000);
};