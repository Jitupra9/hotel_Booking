<?php include '../../../config/config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Hotel Management</title>
    <link rel="stylesheet" href="logins.css?v=<?= $version ?>">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="loginpage">
        <div class="innerlogin">
            <h1 class="font-bold text-2xl my-3">Login</h1>
            <p class="mb-7 text-gray-600 font-semibold ">Lorem ipsum dolor consectetur adipisicing.</p>
            <form action="../../../backend/login_backend.php" method="post">
                <h3 class="font-bold my-2 mt-10">Email</h3>
                <input type="email" name="email" id="email" placeholder="Enter your email"
                    class=" email px-3 py-2 text-gray-500 my-2" required>
                <div class="using_password ">
                    <h3 class="font-bold my-2">Password</h3>
                    <input type="password" name="password" id="password" placeholder="Enter your password"
                        class="password px-3 py-2 text-gray-500">
                </div>
                <p class="text-blue-500 text-right forgot_password">Forgot password?</p>
                <input type="submit"
                    class="bg-blue-500 cursor-pointer text-white border px-5 rounded-full py-3 font-bold w-full"
                    anme="submit" VALUES="Login">
            </form>
            <p class="text-blue-500 my-2 text-center">
                Don't have an account?
                <a href="../signup/signup.php">Signup</a>
            </p>
        </div>
    </div>
    <script>

        $(document).ready(function () {
            $(".password").on("click", () => {
                let emailData = $(".email").val(); 

                if (emailData != "") {
                    $(".email").css({
                        "border": "1px solid green",
                        "color": "green",
                        "box-shadow": "0 0 5px green",
                "background-color": " #d4edda"
                    });
                }
            });
        });

    </script>
</body>

</html>