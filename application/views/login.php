<div id="id01" class="modal">

    <form class="modal-content animate" method="post" action="/user/login" >
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="<?php echo base_url().'application/assets/images/img_avatar.png'; ?>" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label class="u1"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="uname" id="input1" required>

            <label class="u2"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pass" id="input2" required>
            <p id="input3" style="display:none">Wrong Username or Password</p>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button  class="loginbtn">Sign In</button>
            <span><div  class="signupbtn" style="background-color:#e53935" onclick="openresponce()">Sign up</div></span>

            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>
<div id="id02" class="modal id02">

    <form class="modal-content animate" action="/user/register" method="post">
        <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="<?php echo base_url().'application/assets/images/img_avatar.png'; ?>" alt="Avatar" class="avatar">
        </div>

        <div class="container">

            <input type="text" placeholder=" Name" name="uname" id="input3" required>
            <br>
            <input type="text" placeholder="Phone Number" name="ph_num" id="input4" required>
            <br>
            <input type="email" placeholder="Email Address" name="u_mail" id="input5" required>
            <br>
            <input type="text" placeholder="City" name="u_city" id="input6" required>
            <br>
            <input type="text" placeholder="State" name="u_state" id="input6" required>
            <br>
            <input type="text" placeholder="Zipcode" name="u_zip" id="input6" required>
            <br>
            <input type="password" placeholder="Password" name="psw" id="input7" required>
            <br>
            <input type="password" placeholder="Confirm Password" name="cpsw" id="input8" required><span ><i class="display:none" id="wrongpass" class="fa fa-exclamation-triangle" aria-hidden="true"></i></span>


        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button  class="signupbtn" style="background-color:#e53935;float:left;width:80%;margin-left:8%;">CREATE ACCOUNT</button>

        </div>
    </form>
</div>