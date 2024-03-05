
window.onscroll = function() {myFunction()};

var nav = document.getElementById("mynavbar");
var menu = document.getElementById("mymenu");
var sticky = menu.offsetTop;


function myFunction() {
  if (window.pageYOffset >= sticky) {
    menu.classList.add("sticky");
  } else {
    menu.classList.remove("sticky");
  }
}


function showMenu(){

    var x = document.getElementById('mobmenu');

    if (x.style.display === "none") {
    x.style.display = "block";
    } else {
    x.style.display = "none";
    } 
    }


/*var menu = document.getElementById("mymenu");

menu.style.backgroundColor="yellow";*/