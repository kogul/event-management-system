<div class="loginform" style="background:white;">
    <div class="imgcontainer">
        <img src="<?php echo base_url().'application/assets/images/t2.png';?>" alt="Avatar" class="avatar">
    </div>
    <div class="container">
        <form method="post" action="/user/resetPass">
        <input type="email" placeholder="Enter email for password reset" id="input1" name="umail" required>
        <input type="submit" class="submit-btn">
        </form>
    </div>
</div>
</body>
</html>
