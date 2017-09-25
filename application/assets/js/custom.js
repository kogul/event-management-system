
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
            $(".navbar").css("background" , "rgba(0,0,0,0.7)");
        }

        else{
            $(".navbar").css("background" , "rgba(0,0,0,0)");
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
