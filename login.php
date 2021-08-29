<?php include 'header.php' ?>
<section class="login sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <h2>Login</h2>
            <h3>Login</h3>
        </div>
        <div class="namaste">
            <img src="./images/login-namaste.png" alt="">
        </div>
        <div class="login-with">
            <div class="lw-title">
                <h6>login With</h6>
            </div>

            <div class="lw-icons">
                <a href="#">
                    <img src="./images/facebook.png" alt="">
                </a>
                <a href="#">
                    <img src="./images/gmail.png" alt="">
                </a>
            </div>
            <div class="lw-title">
                <h6>OR</h6>
            </div>
        </div>
        <div class="l-form">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter your name">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Enter your password">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check fp">
                        <a href="#">Forgot your password ?</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-check">
                        <label>
                            <input type="checkbox" name="remember"><span>Remember me</span>
                        </label>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="learn-more">
                        <a href="#">login</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="account-existed">
            <span>
                Do you want to create an account? <a href="register.php">Click here to Register</a>
            </span>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>