<?php require('head.php'); ?>
<!-- Breadcrumbs -->
<div class="breadcrumbs overlay">
    <div class="container">
        <div class="bread-inner">
            <div class="row">
                <div class="col-12">
                    <h2>Login</h2>
                    <ul class="bread-list">
                        <li><a href="index.php">Home</a></li>
                        <li><i class="icofont-simple-right"></i></li>
                        <li class="active">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Shop Login -->
<section class="login section">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login-left"></div>
                </div>
                <div class="col-lg-6">
                    <div class="login-form">
                        <h2>Login Here</h2>
                        <p>
                            Didn't you account yet ?
                            <a href="register.php">Register Here</a>
                        </p>
                        <!-- Form -->
                        <form class="form" method="post" action="./admin/loginProcess.php">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="email" name="email" placeholder="Your Email" required />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" id="password" name="password" placeholder="Password"
                                            minlength="6" required />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" name="submit" type="submit">Login</button>
                                    </div>
                                    <a href="#" class="lost-pass">Lost your password?</a>
                                </div>
                            </div>
                        </form>
                        <?php if (isset($_GET['error'])): ?>
                        <div class="error-message">
                            <?php 
                                if ($_GET['error'] == 'emptyfields') {
                                    echo 'Please fill in all fields!';
                                } elseif ($_GET['error'] == 'nouser') {
                                    echo 'No user found with that email.';
                                } elseif ($_GET['error'] == 'incorrectpassword') {
                                    echo 'Incorrect password.';
                                } elseif ($_GET['error'] == 'sqlerror') {
                                    echo 'There was an error with the database.';
                                }
                                ?>
                                </div>
                                <?php endif; ?>


                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Login -->
<?php require('footer.php'); ?>