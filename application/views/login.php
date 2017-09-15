<div id="id01" class="modal">

    <form class="modal-content animate" method="post" action="/user/login" >
        <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="<?php  echo base_url().'application/assets/images/img_avatar.png';?>" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <div class="col-xs-6">
            <label class="u1"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" class="input1" required>
            </div>
            <div class="col-xs-6">
            <label class="u2"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" class="input2" required>
            </div>

            <input type="checkbox" checked="checked" class="rmb"> Remember me
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <input type="submit" class="loginbtn" value="Login">
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</div>