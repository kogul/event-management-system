function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("main").style.marginLeft = "200px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
function profile() {
  document.getElementById("mainheader").innerHTML="PROFILE";
  document.getElementById("user_profile").style.display="block";
  document.getElementById("events").style.display="none";
  document.getElementById("create_event").style.display="none";
  closeNav();
}
function home() {
  document.getElementById("mainheader").innerHTML="DASHBOARD";
  document.getElementById("events").style.display="block";
  document.getElementById("user_profile").style.display="none";
  document.getElementById("create_event").style.display="none";
  closeNav();
}
function create_event(){
  document.getElementById("mainheader").innerHTML="ORGANIZE";
  document.getElementById("events").style.display="none";
  document.getElementById("user_profile").style.display="none";
  document.getElementById("create_event").style.display="block";
  document.getElementById("private").style.display="none";
  document.getElementById("public").style.display="none";
  closeNav();
}
$(document).ready(function(){
    $(".dropdown-toggle").dropdown();
});

function public(){
  document.getElementById("private").style.display="none";
  document.getElementById("public").style.display="block";
}

function private(){
  document.getElementById("public").style.display="none";
  document.getElementById("private").style.display="block";
}
