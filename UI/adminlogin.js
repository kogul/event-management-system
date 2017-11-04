function validateForm() {
   var x = document.getElementById("input1").value;
   var y = document.getElementById("input2").value;
   if (x == "admin" && y== "admin") {
       window.open("adminpanel.html");

   }
   else{
     alert("Wrong Username or Password");
  }
}
