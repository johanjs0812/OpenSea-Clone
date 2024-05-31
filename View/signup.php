
<?php
    include "../View/CSS/signup/signup.php";
?>

<div class="body--signup">
    <div class="wrapper">
        <h2>Registration</h2>
        <form id="Registration123" action="" method="POST">
            <div class="input-box">
                <input type="text" placeholder="Enter your name" name="Username123" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Enter your email" name="Email123" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Create password" name="Password123" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Confirm password" name="CFPassword123" required>
            </div>
            <div class="policy policyx123">
                <input type="checkbox">
                <h3>I accept all terms & condition</h3>
            </div>
            <div class="input-box button">
                <input class="CFRegistration" type="Submit" name="CFRegistration" value="Register Now"> 
            </div>
            <div class="text">
                <h3>Already have an account? <a href="index.php?act=login">Login now</a></h3>
            </div>
        </form>
    </div>

</div>

<script src="/View/JS/signup/"></script>