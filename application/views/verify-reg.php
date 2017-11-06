<div class="loginform" style="background:white;">
    <div class="imgcontainer">
        <img src="<?php echo base_url().'application/assets/images/t2.png';?>" alt="Avatar" class="avatar">
    </div>
    <div class="container">
        <form method="post" action="/user/verifyId">
            <input type="text" placeholder="Enter ID to verify" id="input1" name="reg_id" required>
            <input type="submit" class="submit-btn">
        </form>
    </div>
</div>
</body>
</html>
