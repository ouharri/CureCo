<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>CureCo - Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8"/>
    <meta name="keywords"
          content="CureCo - Login"/>
    <!-- //Meta tag Keywords -->

    <?php include_once VIEWS . 'component' . DS . 'asset' . DS . 'header.php'; ?>

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="<?= url('css/connection.css?v=') . time() ?>" type="text/css" media="all"/>
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

</head>

<body>
<!-- form section start -->
<section class="w3l-mockup-form">

    <div class="container">
        <!-- /form -->
        <div class="workinghny-form-grid">

            <div class="main-mockup">
                <div class="alert-close">
                    <span class="fa fa-close"></span>
                </div>
                <div class="w3l_form align-self">
                    <div class="left_grid_info">
                        <img src="<?= url('images/connection/image2.svg')?>" alt="">
                    </div>
                </div>
                <div class="content-wthree">
                    <h2>Register Now</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <?= $msg ?? ''; ?>
                    <form action="<?= url('register') ?>" method="post" class="form" id="form">

                        <div class="form-group">
                            <label>
                                <!--                                FirstName :-->
                                <input type="text" class="name" name="firstName" id="firstName"
                                       placeholder="Enter Your Name"
                                       value="<?= isset($_POST['submit']) ? $firstName ?? '' : '' ?>">
                            </label>
                            <i class="ion-ios-checkmark"></i>
                            <i class="ion-android-alert"></i>
                            <span></span>
                        </div>

                        <div class="form-group">
                            <label>
                                <!--                                LastName :-->
                                <input type="text" class="name" name="lastName" id="lastName"
                                       placeholder="Enter Your Last Name"
                                       value="<?= isset($_POST['submit']) ? $lastName ?? '' : ''; ?>">
                            </label>
                            <i class="ion-ios-checkmark"></i>
                            <i class="ion-android-alert"></i>
                            <span></span>
                        </div>

                        <div class="form-group">
                            <label>
                                <!--                                Email :-->
                                <input type="email" class="email" name="email" id="email" placeholder="Enter Your Email"
                                       value="<?= isset($_POST['submit']) ? $email ?? '' : ''; ?>">
                            </label>
                            <i class="ion-ios-checkmark"></i>
                            <i class="ion-android-alert"></i>
                            <span></span>
                        </div>

                        <div class="form-group">
                            <label>
                                <!--                                Password :-->
                                <input type="password" class="password" name="password" id="password"
                                       placeholder="Enter Your Password"
                                >
                            </label>
                            <i class="ion-ios-checkmark"></i>
                            <i class="ion-android-alert"></i>
                            <span></span>
                        </div>

                        <div class="form-group">
                            <label>
                                <!--                                Confirm Password :-->
                                <input type="password" class="confirm-password" name="confirmPassword"
                                       id="confirmPassword"
                                       placeholder="Enter Your Confirm Password">
                            </label>
                            <i class="ion-ios-checkmark"></i>
                            <i class="ion-android-alert"></i>
                            <span></span>
                        </div>

                        <button class="btn" type="submit">Register</button>

                    </form>
                    <div class="social-icons">
                        <p>Have an account! <a href="<?= url('login') ?>">Login</a>.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- //form -->
    </div>
</section>
<!-- //form section start -->

<?php include_once VIEWS . 'component' . DS . 'asset' . DS . 'footer.php'; ?>

<script src="<?= url('js/connection/register.js') . '?v=' . time() ?>"></script>


</body>

</html>