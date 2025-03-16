<!DOCTYPE html>
<?php include_once '../../config/config.php' ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css?v=<?= $version ?>">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Responsive Login Form Sign In Sign Up</title>
</head>

<body>
    <div class="login">
        <div class="login__content">
            <div class="responce">
                <p class="responce_P"></p>
            </div>
            <div class="login__img ">
                <img src="assets/img/img-login.jpg" alt="">
            </div>
            <div class="login__forms">
                <form action="" class="login__registre" id="login-in">
                    <h1 class="login__title">Sign In</h1>

                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Username" class="login__input login__input_email"
                            name="useremail">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Password" class="login__input login__input_pass"
                            name="userpassword">
                    </div>

                    <a href="#" class="login__forgot">Forgot password?</a>

                    <div class="parent_submmit">
                        <button class="login__button " id="Login">Login</button>
                    </div>
                    <div>
                        <span class="login__account">Don't have an Account ?</span>
                        <span class="login__signin" id="sign-up">Sign Up</span>
                    </div>
                </form>

                <form action="" class="login__create none" id="login-up">
                    <h1 class="login__title">Create Account</h1>

                    <div class="login__box">
                        <i class='bx bx-at login__icon'></i>
                        <input type="text" placeholder="Email" class="login__input signup_email" name="email">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Password" class="login__input signup_pass" name="password">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock-alt login__icon'></i>
                        <input type="password" placeholder="Confirm Password" class="login__input signup_cnfpass"
                            name="cnfpassword">
                    </div>

                    <div class="parent_submmit">
                        <button class="register">Sign UP</button>
                    </div>

                    <div>
                        <span class="login__account">Already have an Account ?</span>
                        <span class="login__signup" id="sign-in">Sign In</span>
                    </div>

                    <div class="login__social">
                        <a href="#" class="login__social-icon"><i class='bx bxl-facebook'></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-twitter'></i></a>
                        <a href="#" class="login__social-icon"><i class='bx bxl-google'></i></a>
                    </div>
                </form>
            </div>
        </div>
        <P style="text-align: center; font-weight:650;">If you want to return to home page . click this ? <a
                href="../../index.php">HOME</a> </P>
    </div>
    <script src="assets/js/main.js?v=<?= $version ?>"></script>

    <script>
        $(document).ready(function (param) {
            $('#Login').click(function (e) {
                e.preventDefault();
                const email = $('.login__input_email').val().trim();
                const password = $('.login__input_pass').val().trim();
                if (!email || !password) {
                    $(".responce").show();
                    $(".responce_P").html("Please fill in both fields.");
                    return;
                }
                $.ajax({
                    url: "../../backend/auth/login.php",
                    type: 'POST',
                    data: {
                        useremail: email,
                        userpassword: password
                    },
                    success: function (response) {
                        const res = JSON.parse(response);
                        if (res.success) {
                            window.location.href = res.redirect;
                            $(".responce").hide();
                        } else if (res.error) {
                            $(".responce").show().fadeIn().delay(3000).fadeOut();
                            $(".responce_P").html(res.error);
                        }
                    },
                    error: function (err) {
                        console.error("Error occurred:", err);
                    }
                });
            });
            $('#sign-up').click(function () {
                $(".responce").hide();
            })
            $('.register').click(function (e) {
                e.preventDefault();
                const useremail = $('.signup_email').val().trim();
                const userpassword = $('.signup_pass').val().trim();
                const usercnfpass = $('.signup_cnfpass').val().trim();
                if (!useremail || !userpassword || !usercnfpass) {
                    $(".responce").show().fadeIn().delay(3000).fadeOut();
                    $(".responce_P").html("Please fill in all fields.");
                    return;
                }
                e.preventDefault();
                $.ajax({
                    url: "../../backend/auth/signup.php",
                    type: 'POST',
                    data: {
                        email: useremail,
                        password: userpassword,
                        cnfpassword: usercnfpass
                    },
                    success: function (responce) {
                        let res = JSON.parse(responce);
                        if (res.success) {
                            $(".responce").show().fadeIn().delay(3000).fadeOut();
                            $(".responce").css({
                                "background": "#d4edda",
                                "color": "#155724",
                                "padding": "10px",
                                "border-radius": "5px"
                            });
                            $(".responce_P").html(res.success);
                            $('.signup_email').val('');
                            $('.signup_pass').val('');
                            $('.signup_cnfpass').val('');

                        } else if (res.error) {
                            $(".responce").show().fadeIn().delay(3000).fadeOut();
                            $(".responce_P").html(res.error);
                        }
                    },
                });
            });
        });
    </script>
</body>

</html>