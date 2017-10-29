
var myIndex = 0;
$(document).ready(carousel);

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
            $(".navbar").css("background" , "linear-gradient(to right,#159957 ,#155799)");
            $(".navbar").css("font-size" , "13px");
            $(".navbar").css("color", "white");
            $(".navbar").css("box-shadow" , " 0 8px 16px 0 rgba(0,0,0,0.2)");
            $(".navbar").css("padding-top", "0.5%");
            $(".navbar").css("padding-bottom", "0.5%");
        }

        else{
             $(".navbar").css("background" , "rgba(0,0,0,0)");
             $(".navbar").css("font-size" , "13px");
             $(".navbar").css("padding-top", "1%");
             $(".navbar").css("padding-bottom", "1%");
             $(".navbar").css("color" , "white");
             $(".navbar").css("box-shadow" , " 0 0 0px 0 rgba(0,0,0,0.0)");
        }
    })
});
var modal = document.getElementById('id01');


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function openresponce(){
    document.getElementById("id01").style.display="none";
    document.getElementById("id02").style.display="block";
}
function validateForm() {
    var x = document.getElementById("input1").value;
    var y = document.getElementById("input2").value;
    if (x == "admin" && y== "admin") {
        window.open("admin.html")

    }
    else{
      alert("Wrong Username or Password");
      document.getElementById(id01).style.display="block";


    }
}
function register(){
  window.location.hash = register;
}
function validateresponce() {
  var x = document.getElementById("input11").value;
  var y = document.getElementById("input12").value;
  if (x==y && x!="" && y!="") {
      window.open("admin.html")

  }
  else{
    alert("Passwords don't match");
    document.getElementById(id02).style.display="block";

  }
}