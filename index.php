<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <style>
        /* Pop-up styling */
        .popup-box {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            padding: 20px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }

        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9998;
        }

        .close-btn {
            background-color: #f00;
            color: white;
            padding: 5px;
            border: none;
            cursor: pointer;
            float: right;
        }
    </style>
</head>

<body class="">

    <?php
    session_start(); 
    if (!isset($_COOKIE['popUpShown'])) {
        setcookie('popUpShown', 'true', time() + (7 * 24 * 60 * 60)); 
        $showPopup = true;
    } else {
        $showPopup = false;
    }
    ?>

    <!-- Pop-up Box -->
    <div class="popup-overlay"></div>
    <div class="popup-box">
        <button class="close-btn">X</button>
        <h2>Project in Progress</h2>
        <p>Stay tuned for updates on our ongoing project!</p>
    </div>

    <div class="homepage">
        <?php include_once './home/landing page/home.php'; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            <?php if ($showPopup): ?>
                $(".popup-overlay, .popup-box").fadeIn();
            <?php endif; ?>
            $(".close-btn").click(function () {
                $(".popup-overlay, .popup-box").fadeOut();
            });
        });
    </script>

</body>

</html>
