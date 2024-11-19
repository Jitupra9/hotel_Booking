<?php include_once 'config/config.php' ?>
<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="home/landing page/home.css?v=<?= $version ?>">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/12543e6ff4.js" crossorigin="anonymous"></script>
    <style>
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body class="py-5">

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="home/javascript/scripts.js?v=<?= $version ?>"></script>
    <div class="py-7 book_containe">
        <div class="header top-0 fixed bg-white  pt-2 w-full z-50  ">
            <?php include_once 'foooter-header/header.php' ?>
            <div class=" hidden  w-full sm:flex justify-center ">
                <?php include_once 'splicode/desktop.php'; ?>
            </div>
            <div class="catogories_filter flex w-full justify-center items-center border border-gray-200">
                <div
                    class="catogorys py-2 text-gray-500 flex text-sm items-center space-x-6 sm:space-x-5 lg:space-x-10 overflow-hidden overflow-x-scroll scrollbar-hide sm:mr-5">
                    <div class=" cursor-pointer new flex flex-col space-y-4 text-red-500 text-center ">
                        <i class="fa-regular fa-snowflake text-lg"></i>
                        <p>New</p>
                    </div>
                    <div class=" cursor-pointer pools_icon flex  flex-col space-y-4 text-center">
                        <i class="fa-solid fa-person-swimming text-lg"></i>
                        <p>Pools</p>
                    </div>
                    <script>
                        $(document).ready(function () {
                            function filterRooms(type) {
                                $(".room").hide();
                                $("." + type).show();
                            }
                            $(".new, .pools_icon, .beach_icon, .lake_icon, .trend_icon, .mountain_city_icon, .tree_house_icon, .caves_icon, .luxory_icon, .domes_icon, .iceland_icon, .camping_icon, .room_icon, .desert_icon").click(function () {
                                $(".new, .pools_icon, .beach_icon, .lake_icon, .trend_icon, .mountain_city_icon, .tree_house_icon, .caves_icon, .luxory_icon, .domes_icon, .iceland_icon, .camping_icon, .room_icon, .desert_icon").removeClass("text-red-500");
                                $(this).addClass("text-red-500");
                            });

                            $(".new").click(function () { filterRooms('room'); });
                            $(".pools_icon").click(function () { filterRooms('Pools'); });
                            $(".beach_icon").click(function () { filterRooms('Beach'); });
                            $(".lake_icon").click(function () { filterRooms('Lake'); });
                            $(".trend_icon").click(function () { filterRooms('Trending'); });
                            $(".mountain_city_icon").click(function () { filterRooms('Hill'); });
                            $(".tree_house_icon").click(function () { filterRooms('Tree'); });
                            $(".caves_icon").click(function () { filterRooms('Caves'); });
                            $(".luxury_icon").click(function () { filterRooms('Luxury'); });
                            $(".domes_icon").click(function () { filterRooms('Domes'); });
                            $(".iceland_icon").click(function () { filterRooms('Iceland'); });
                            $(".camping_icon").click(function () { filterRooms('Camping'); });
                            $(".room_icon").click(function () { filterRooms('Room'); });
                            $(".desert_icon").click(function () { filterRooms('Desert'); });
                        });
                    </script>
                    <div class=" cursor-pointer beach_icon  flex flex-col space-y-4 text-center">
                        <i class="fa-solid fa-umbrella-beach text-lg"></i>
                        <p>Beach</p>
                    </div>
                    <div class=" cursor-pointer lake_icon  flex flex-col space-y-4 text-center">
                        <i class="fa-solid fa-water text-lg"></i>
                        <p>lake</p>
                    </div>
                    <div class=" cursor-pointer trend_icon  flex flex-col space-y-4 text-center">
                        <i class="fa-solid fa-fire text-2xl"></i>
                        <p>trending</p>
                    </div>
                    <div class=" cursor-pointer mountain_city_icon  flex flex-col space-y-4 text-center">
                        <i class="fa-solid fa-mountain-city text-lg"></i>
                        <p>Hill</p>
                    </div>
                    <div class=" cursor-pointer tree_house_icon  flex flex-col space-y-4 text-center">
                        <i class="fa-solid fa-tree-city text-lg"></i>
                        <p>Tree</p>
                    </div>
                    <div class=" cursor-pointer caves_icon  flex flex-col space-y-4 text-center">
                        <i class="fa-solid fa-igloo text-lg"></i>
                        <p>caves</p>
                    </div>
                    <div class=" cursor-pointer luxory_icon  flex flex-col space-y-4 text-center">
                        <i class="fa-solid fa-wand-magic-sparkles text-lg"></i>
                        <p>luxary</p>
                    </div>
                    <div class=" cursor-pointer domes_icon  flex flex-col space-y-4 text-center">
                        <i class="fa-solid fa-landmark-dome text-lg"></i>
                        <p>Domes</p>
                    </div>
                    <div class=" cursor-pointer iceland_icon  flex flex-col space-y-4 text-center">
                        <i class="fa-solid fa-person-skating text-lg"></i>
                        <p>Iceland</p>
                    </div>
                    <div class=" cursor-pointer camping_icon  flex flex-col space-y-4 text-center">
                        <i class="fa-solid fa-tent text-lg"></i>
                        <p>Camping</p>
                    </div>
                    <div class=" cursor-pointer room_icon  flex flex-col space-y-4 text-center">
                        <i class="fa-solid fa-house-user text-lg"></i>
                        <p>Room</p>
                    </div>
                    <div class=" cursor-pointer desert_icon  flex flex-col space-y-4 text-center">
                        <i class="fa-brands fa-pagelines text-lg"></i>
                        <p>desert</p>
                    </div>
                </div>
                <div class=" hidden cursor-pointer sm:flex ">
                    <div
                        class=" filterOpen rounded-xl overflow-hidden w-24 py-5 bg-green-600 border border-gray-300 flex gap-3 items-center justify-center ">
                        <i class="fa-regular fa-pen-to-square  text-white "></i>
                        <i class='fa-solid fa-check hidden  text-white '></i>
                        <p class="font-semibold text-sm text-white">Filters</p>
                        <sup>
                            <div class="dot absolute right-0 -top-3  inline-block">
                                <?php
                                if (isset($_POST['submitFilter'])) {
                                    echo "<script> $('.fa-pen-to-square').hide();
                                $('.fa-check').show();
                                $('.filterOpen').css({   
                                'background-color': 'rgba(13, 141, 215, 0.138)',
                               'color':'rgba(13, 141, 215)'                  
                                });
                                $('.fa-check').css({
                                'color':'rgba(13, 141, 215)'
                            });
                                </script>";
                                } else {
                                    echo "<script> $('.fa-check').hide();</script>";
                                }
                                ?>
                            </div>
                        </sup>
                    </div>
                </div>
            </div>
        </div>

        <div class="all_rooms  md:px-20">
            <section class=" rooms_main_parant text-gray-600 body-font pt-32 sm:pt-72 md:pt-60 lg:pt-64">
                <div class="inner_parant_room px-5 mx-auto">
                    <div class="flex flex-wrap -m-4 ">
                        <?php
                        include_once 'config/coon.php';
                        $sql = "SELECT 
                        p.location, 
                        p.Property_type, 
                        p.price, 
                        p.title,
                        p.property_id, 
                        p.place_type, 
                        p.property_name,
                        SUBSTRING_INDEX(p.property_images, ',', 1) AS first_image 
                    FROM 
                        property p 
                    JOIN 
                        property_specification s ON p.property_id = s.property_id
                        WHERE 
                             p.availability = 1";
                        $noguest = 0;

                        if (isset($_POST['searchroom'])) {
                            $placename = !empty($_POST['placeName']) ? $_POST['placeName'] : null;
                            $stdate = !empty($_POST['stadate']) ? $_POST['stdate'] : null;
                            $enddate = !empty($_POST['enddate']) ? $_POST['enddate'] : null;
                            $noadults = !empty($_POST['noadult']) ? $_POST['noadult'] : 1;
                            $nochild = !empty($_POST['nochildren']) ? $_POST['nochildren'] : null;
                            $noinfant = !empty($_POST['infantsCount']) ? $_POST['infantsCount'] : null;
                            $nopet = !empty($_POST['nopets']) ? $_POST['nopets'] : null;
                            $noguest = $noadults + $nochild + $noinfant;
                            $sql .= " AND p.MaxGuests = $noguest";
                            setcookie('placeName', $placename, time() + (86400 * 30), "/");
                            setcookie('stdate', $stdate, time() + (86400 * 30), "/");
                            setcookie('enddate', $enddate, time() + (86400 * 30), "/");
                            setcookie('noadults', $noadults, time() + (86400 * 30), "/");
                            setcookie('nochildren', $nochild, time() + (86400 * 30), "/");
                            setcookie('noinfants', $noinfant, time() + (86400 * 30), "/");
                            setcookie('nopets', $nopet, time() + (86400 * 30), "/");
                            setcookie('noguest', $noguest, time() + (86400 * 30), "/");
                        }

                        if (isset($_POST['submitFilter'])) {
                            $placeName = isset($_COOKIE['placeName']) ? $_COOKIE['placeName'] : '';
                            $stdate = isset($_COOKIE['stdate']) ? $_COOKIE['stdate'] : '';
                            $enddate = isset($_COOKIE['enddate']) ? $_COOKIE['enddate'] : '';
                            $noadults = isset($_COOKIE['noadults']) ? $_COOKIE['noadults'] : '';
                            $nochildren = isset($_COOKIE['nochildren']) ? $_COOKIE['nochildren'] : '';
                            $noinfants = isset($_COOKIE['noinfants']) ? $_COOKIE['noinfants'] : '';
                            $nopets = isset($_COOKIE['nopets']) ? $_COOKIE['nopets'] : '';
                            $noguest = isset($_COOKIE['noguest']) ? $_COOKIE['noguest'] : '';



                            $typePlace = !empty($_POST['type_place']) ? $_POST['type_place'] : null;
                            $minPrice = !empty($_POST['minPrice']) ? $_POST['minPrice'] : 1500;
                            $maxPrice = !empty($_POST['Maxprice']) ? $_POST['Maxprice'] : 7000;
                            $bedroom = !empty($_POST['badroom']) ? $_POST['badroom'] : 1;
                            $beds = !empty($_POST['beds']) ? $_POST['beds'] : 1;
                            $bathroom = !empty($_POST['bathroom']) ? $_POST['bathroom'] : 1;
                            $propertyType = !empty($_POST['propertyTtpe']) ? $_POST['propertyTtpe'] : null;


                            if (!empty($noguest)) {
                                $sql .= " AND p.MaxGuests = $noguest";
                            }
                            $sql .= " AND p.price BETWEEN $minPrice AND $maxPrice";
                            $sql .= " AND s.HasBeds = $beds";
                            $sql .= " AND s.HasBathroom = $bathroom";
                            $sql .= " AND s.HasBadroom = $bedroom";

                            if ($propertyType) {
                                $sql .= " AND Property_type = '$propertyType'";

                            }
                        }
                        $result = mysqli_query($conn, $sql);
                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $image_name = trim($row['first_image']);
                                $image_directory = "upload-images/";
                                $image_path = $image_directory . $image_name;
                                if (empty($image_name)) {
                                    $image_path = "https://img.freepik.com/free-photo/modern-bedroom-with-large-bed-wooden-wall-natural-light_9975-33036.jpg?t=st=1723801127~exp=1723804727~hmac=e2cb857bd4d7cfc2467b1122fc580013a0785f32834e371957e287f95d7ea49a&w=1380";
                                }
                                $place_type_class = $row['place_type'];
                                ?>
                                <div class="room lg:w-1/4 sm:w-1/2 p-4 w-full <?php
                                echo $place_type_class;
                                ?>">
                                    <a class="block relative h-48 rounded overflow-hidden" href="home/room_details/room_details.php?<?php
                                    echo $row['property_id']
                                        ?>">
                                        <i class="text-2xl fa-solid fa-heart absolute right-4 top-4"
                                            style="color: #ffffff;"></i>
                                        <img alt="Hotel Photo" class="object-cover 
                                    object-center w-full h-full" src="<?php
                                    echo $image_path;
                                    ?> ">
                                    </a>
                                    <div class="mt-4">
                                        <p><?php
                                        echo $row['Property_type'];
                                        ?></p>
                                        <div class="flex justify-between">
                                            <h3 class=""><?php
                                            echo $row['property_name']
                                                ?></h3>
                                            <a href="home/room_details/room_details.php?property_id=<?php
                                            echo $row['property_id']
                                                ?>" class="text-blue-500">View Details</a>
                                        </div>
                                        <p class="my-1"> <i class="fa-solid fa-location-dot" style="color: #ff0019;"></i><?php
                                        echo $row['location']
                                            ?></p>
                                        <div class="flex justify-between">
                                            <p><i class="fa-solid fa-star" style="color: #FFD43B;"></i> 5 (<a href="/"
                                                    class="text-blue-500"> 114 reviews</a>)</p>
                                            <p class="">$<?php
                                            echo $row['price']
                                                ?>/Night</p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            ?>
                            <div class="flex flex-col justify-center items-center text-center mb-5">
                                <div class="images w-full lg:h-96 sm:h-56 h-60 mt-10 sm:mt-16 lg:mt-0">
                                    <img src="images/no_data_found.png" alt="not found" srcset="" class="w-full h-full">
                                </div>
                                <h1 class="nodatatitlle">No results found</h1>
                                <p class=" text-gray-600 font-semibold">we couldn't find what you searched for. <br> Try
                                    searcing again</p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </section>
        </div>

        <div class="footer md:px-20">
            <?php include_once 'foooter-header/footer.php'; ?>
        </div>

        <div class="lower_nav flex sm:hidden justify-around ">
            <i class="fa-solid fa-arrow-up-from-bracket lowerNaveClose"></i>
            <div class="explore hidden">
                <a href="index.php"><i class="fa-solid fa-magnifying-glass"></i>
                    Explore</a>
            </div>
            <div class="profileStatus hidden">
                <?php if (isset($_SESSION['user'])): ?>
                    <div class="profile login "><a href="home/profile/profile.php"><i class="fa-regular fa-user"></i>
                            <p>Profile</p>
                        </a></div>
                <?php else: ?>
                    <div class="login "><a href="home/Login-Logout-signup/Login/autologin.php"><i class="fa-regular fa-user"></i>
                            <p>Login</p>
                        </a></div>
                <?php endif; ?>
            </div>
            <i class="fa-solid fa-arrow-right-from-bracket openLowerNav"></i>
        </div>


        <script>
            $(".fa-arrow-up-from-bracket").hide();
            $('.openLowerNav').click(function () {
                $(".lower_nav").css({
                    "border-radius": "0%",
                    "bottom": "0%",
                    "transition": "all 1s ease-in-out",
                    "width": "100%",
                    "padding": " 2%"
                });
                $(".explore, .profileStatus,.fa-arrow-up-from-bracket").show();
                $(this).hide();
            });
            $(".fa-arrow-up-from-bracket").click(() => {
                $('.openLowerNav').show();
                $(".lower_nav").css({
                    "border-radius": "0% 50% 50% 0%",
                    "bottom": "30%",
                    "transition": "all 1s ease-in-out",
                    "width": "15%",
                    "padding": " 5%"
                });
                $(".explore, .profileStatus,.fa-arrow-up-from-bracket").hide();
            })
        </script>










        <?php include_once 'splicode/phone.php' ?>
        <?php

        if (isset($_POST['submitFilter'])) {
            function typeplacestyle($typePlace)
            {
                $targetClass = 'any-type';
                if ($typePlace === 'room') {
                    $targetClass = 'type-room';
                } elseif ($typePlace === 'home') {
                    $targetClass = 'entier-home';
                }

                echo "<script>
                        $(document).ready(function() {
                            $('.entier-home, .type-room, .any-type').css({
                                'background-color': 'transparent',
                                'color': 'black',
                            });
                            $('.$targetClass').css({
                                'background-color': 'black',
                                'color': 'white'
                            });
                        });
                    </script>";
            }

            typeplacestyle($typePlace);

            function Countbadroom($bedroom)
            {
                $targetbadroom = 'badroom-any';
                if ($bedroom == 1) {
                    $targetbadroom = 'badroom-one';
                } else if ($bedroom == 2) {
                    $targetbadroom = 'badroom-two';
                } else if ($bedroom == 3) {
                    $targetbadroom = 'badroom-three';
                } else if ($bedroom == 4) {
                    $targetbadroom = 'badroom-four';
                }
                echo "<script>
                    $(document).ready(function() {
                        $('.badroom-any,.badroom-one, .badroom-two, .badroom-three, .badroom-four').css({
                            'background-color': 'transparent',
                            'color': 'black',
                        });
                        $('.$targetbadroom').css({
                            'background-color': 'black',
                            'color': 'white'
                        });
                    });
                </script>";
            }
            Countbadroom($bedroom);
            function CountBathroom($bathroom)
            {
                $targetbathroom = 'bathroom-any';
                if ($bathroom == 1) {
                    $targetbathroom = 'bathroom-one';
                } else if ($bathroom == 2) {
                    $targetbathroom = 'bathroom-two';
                } else if ($bathroom == 3) {
                    $targetbathroom = 'bathroom-three';
                } else if ($bathroom == 4) {
                    $targetbathroom = 'bathroom-four';
                }
                echo "<script>
                $(document).ready(function() {
                    $('.bathroom-any,.bathroom-one, .bathroom-two, .bathroom-three, .bathroom-four').css({
                        'background-color': 'transparent',
                        'color': 'black',
                    });
                    $('.$targetbathroom ').css({
                        'background-color': 'black',
                        'color': 'white'
                    });
                });
            </script>";
            }
            CountBathroom($bathroom);
            function CountBeds($beds)
            {
                $targetbed = 'bads-any';
                if ($beds == 1) {
                    $targetbed = 'bads-one';
                } else if ($beds == 2) {
                    $targetbed = 'bads-two';
                } else if ($beds == 3) {
                    $targetbed = 'bads-three';
                } else if ($beds == 4) {
                    $targetbed = 'bads-four';
                }
                echo "<script>
                $(document).ready(function() {
                    $(' .bads-any,.bads-one, .bads-two, .bads-three, .bads-four').css({
                        'background-color': 'transparent',
                        'color': 'black',
                    });
                    $('.$targetbed ').css({
                        'background-color': 'black',
                        'color': 'white'
                    });
                });
            </script>";
            }
            CountBeds($beds);

            function Typepropertys($propertyType)
            {
                $properstype = '';
                if ($propertyType == "house") {
                    $properstype = 'house';
                } else if ($propertyType == 'flat') {
                    $properstype = 'flat';
                } else if ($propertyType == 'hotel') {
                    $properstype = 'hotel';
                }
                echo "<script>
                $(document).ready(function() {
                    $(' .guest-house, .house, .flat, .hotel').css({
                        'background-color': 'transparent',
                        'color': 'black',
                    }).find('svg').css('fill', '');;
                    $('.$properstype ').css({
                        'background-color': 'black',
                        'color': 'white'
                    }).find('svg').css('fill', 'white');;
                });
            </script>";
            }
            Typepropertys($propertyType);
        }
        ?>
        <?php include_once 'splicode/filter.php' ?>
    </div>
    <script>

    </script>

</body>

</html>
<?php
ob_end_flush();
?>