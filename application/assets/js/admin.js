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
function readURL(input) {
        if (input.files && input.files[0]) {
              var reader = new FileReader();

              reader.onload = function (e) {
                   $('#blah')
                       .attr('src', e.target.result);
               };

               reader.readAsDataURL(input.files[0]);
      }
}
function invokesnack() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
function changeprofile(){
   document.getElementById("nametag").readOnly=false;
   document.getElementById("phnumber").readOnly=false;
   document.getElementById("secphnumber").readOnly=false;
   document.getElementById("addr").readOnly=false;
   document.getElementById("profilesubmit").style.display="block";
}
function profilesubmit(){
  document.getElementById("nametag").readOnly=true;
  document.getElementById("phnumber").readOnly=true;
  document.getElementById("secphnumber").readOnly=true;
  document.getElementById("addr").readOnly=true;
  document.getElementById("profilesubmit").style.display="none";
}
