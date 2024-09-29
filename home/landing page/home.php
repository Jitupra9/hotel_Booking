<?php include_once 'config.php' ?>
<?php
// Start output buffering at the beginning of the file
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

        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body class="py-5">
    
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="scrpt.js?v=<?= $version ?>"></script>
    <div class="py-7 book_containe">
        <div class="header top-0 fixed bg-white  pt-2 w-full z-50  ">
            <?php include_once 'header.php' ?>
            <div class=" hidden  w-full sm:flex justify-center ">
                <?php include_once 'splitCode.php'; ?>
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
                <div class=" hidden cursor-pointer sm:flex">
                    <div
                        class=" filterOpen rounded-xl overflow-hidden w-24 py-5 border border-gray-300 flex gap-3 items-center justify-center ">
                        <i class="fa-regular fa-pen-to-square text-gray-500  "></i>
                        <i class='fa-solid fa-check hidden  text-gray-500 '></i>
                        <p class="font-semibold text-sm ">Filters</p>
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
                        include_once 'coon.php';
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
            <?php include_once 'footer.php'; ?>
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
                    <div class="login "><a href="login/autologin.php"><i class="fa-regular fa-user"></i>
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










        <div
            class=" hidden  sm:hidden  fixed w-full h-full top-0  travel_info px-4 py-4  pb-10 font-sans bg-gray-50 overflow-hidden overflow-y-scroll scrollbar-hide">
            <div class="travel_info_header flex items-center px-2 my-2 ">
                <div></div>
                <svg class=" offtravel_info w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                    <path
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>

                <div class="flex space-x-5 pl-16">
                    <div></div>
                    <p class=" stay active font-bold  ">Stays</p>
                    <p class=" experiences cursor-pointer font-bold  text-gray-500">Experiences</p>
                </div>
            </div>
            <div class="flex flex-col space-y-5 ">
                <div></div>
                <div class="addres_container ">
                    <div class=" addres_div p-5 rounded-3xl bg-white shadow-lg shadow-black">
                        <div class="addres_div_header">
                            <h2 class=" text-xl font-semibold">Where to?</h2>
                            <div class=" input-field px-3 py-3 space-x-3 my-4 flex items-center border-2 rounded-xl">
                                <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path
                                        d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
                                </svg>
                                <input class="search_place outline-none text-gray-400 font-semibold" type="text"
                                    id="searchInput" placeholder="Search your destination">
                            </div>
                        </div>
                        <div id="mapContainer" class=" maps h-full overflow-x-scroll scrollbar-hide">
                            <div class=" flex space-x-4 sm:w-80 search_area">
                                <div>
                                    <div class=" w-32 border rounded-xl  hover:border-black">
                                        <img class="object-cover object-center w-full h-full block rounded-xl"
                                            src="images/full_map.jpg" alt="">
                                    </div>
                                    <p class="my-2 text-gray-600">I'm flexible </p>
                                </div>
                                <div>
                                    <div class=" w-32 border rounded-xl  hover:border-black">
                                        <img class="object-cover object-center w-full h-full block rounded-xl"
                                            src="images/europe.webp" alt="">
                                    </div>
                                    <p class="my-2 text-gray-600">Europe</p>
                                </div>
                                <div>
                                    <div class=" w-32 border rounded-xl  hover:border-black">
                                        <img class="object-cover object-center w-full h-full block rounded-xl"
                                            src="images/italy.webp" alt="">
                                    </div>
                                    <p class="my-2 text-gray-600">Italy </p>
                                </div>

                                <div>
                                    <div class=" w-32 border rounded-xl  hover:border-black">
                                        <img class="object-cover object-center w-full h-full block rounded-3xl"
                                            src="images/south_asia.webp" alt="">
                                    </div>
                                    <p class="my-2 text-gray-600">Southeast Asia </p>
                                </div>
                                <div>
                                    <div class=" w-32 border rounded-xl hover:border-black ">
                                        <img class="object-cover object-center w-full h-full block rounded-xl"
                                            src="images/midle_east.webp" alt="">
                                    </div>
                                    <p class="my-2 text-gray-600">Middle East</p>
                                </div>
                                <div>
                                    <div class=" w-32 border rounded-xl hover:border-black ">
                                        <img class="object-cover object-center w-full h-full block rounded-xl"
                                            src="images/united_kingdom.webp" alt="">
                                    </div>
                                    <p class="my-2 text-gray-600">United Kingdom </p>
                                </div>
                                <div>
                                    <div class=" w-32 border rounded-xl hover:border-black ">
                                        <img class="object-cover object-center w-full h-full block rounded-xl"
                                            src="images/unitaed_state.webp" alt="">
                                    </div>
                                    <p class="my-2 text-gray-600">United states</p>
                                </div>
                                <div>
                                    <div class=" w-32 border rounded-xl  hover:border-black">
                                        <img class="object-cover object-center w-full h-full block rounded-xl"
                                            src="images/thailand.webp" alt="">
                                    </div>
                                    <p class="my-2 text-gray-600">Thailand</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="whenOrtime_container">
                    <div class="date_div p-5 rounded-3xl bg-white shadow-lg shadow-black">
                        <h2 class=" text-xl mb-5 font-semibold"> When's your trip ?</h2>
                        <div class="select_date">
                            <div
                                class="select_date bg-gray-200  flex items-center px-2 py-2 mb-5 rounded-full justify-between">
                                <div class="dates px-5 py-2 bg-white  rounded-full">
                                    <p class=" font-semibold ">Dates</p>
                                </div>
                                <div class="months  px-5 py-2 rounded-full hover:bg-white ">
                                    <p class=" font-semibold ">Months</p>
                                </div>
                                <div class="flexible px-5 py-2 hover:bg-white rounded-full">
                                    <p class=" font-semibold ">Flexible</p>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="calendar-container h-60 overflow-y-scroll bg-white font-bold text-gray-600">
                                <h3 class="month_year ml-2 mb-3"></h3>
                                <table class="w-full ">
                                    <thead>
                                        <tr class="font-semibold">
                                            <th>Sun</th>
                                            <th>Mon</th>
                                            <th>Tue</th>
                                            <th>Wed</th>
                                            <th>Thu</th>
                                            <th>Fri</th>
                                            <th>Sat</th>
                                        </tr>
                                    </thead>
                                    <tbody class="calander_body text-center">
                                    </tbody>
                                </table>
                                <div class="flex justify-between items-center mt-2 px-2"><span id="prev_month"
                                        class=" cursor-pointer w-9 h-9 flex justify-center items-center border rounded-full border-gray-400 "><i
                                            class="fa-solid fa-arrow-left"></i></span><span id="next_month"
                                        class="  cursor-pointer  w-9 h-9 flex justify-center items-center border-gray-400 rounded-full border "><i
                                            class="fa-solid fa-arrow-right"></i></span></div>
                            </div>
                        </div>
                        <div class="months_container text-gray-600 font-semibold ">
                            <div class=" months_container hidden py-5">
                                <div class=" flex justify-between items-center">
                                    <p class=" font-bold text-gray-600">Months</p>
                                    <div class=" flex space-x-2 items-center">
                                        <button class="month_decrement p-3 border rounded-full">
                                            <svg class="w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="gray"
                                                    d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                            </svg></button>
                                        <p class="month_count">2</p>
                                        <button class="month_increment p-3 border rounded-full"><svg class="w-5"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="gray"
                                                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center my-4 font-bold">
                                    <p>Starting date</p>
                                    <p class=" font-semibold start_month font">Wed,May 1</p>
                                </div>
                                <div class="flex justify-between items-center font-bold">
                                    <p>End date</p>
                                    <p class=" font-semibold end_month font">Thu,Aug 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="Flexible_container">
                            <div class="Flexible_container hidden">
                                <div class="">
                                    <h3 class=" text-gray-700 font-bold my-1">How long would you likke to stay ?</h3>
                                    <div class="flex space-x-4 items-center my-4">
                                        <p
                                            class=" weekend bg-black text-white border rounded-full px-3 py-2 font-semibold  text-sm ">
                                            Weekend</p>
                                        <p
                                            class="week border rounded-full px-3 py-2 font-semibold text-gray-500 text-sm ">
                                            Week</p>
                                        <p
                                            class="month border rounded-full px-3 py-2 font-semibold text-gray-500 text-sm ">
                                            Month</p>
                                    </div>
                                    <hr>
                                    <h3 class=" text-gray-700 font-bold my-1">When do you want to go ?</h3>
                                    <div class="flex space-x-3 my-5 items-center">
                                        <div
                                            class="first_month w-full px-6 py-3 border rounded-xl space-y-3 justify-center">
                                            <svg class="w-5 ml-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <path fill="gray"
                                                    d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                                            </svg>
                                            <p class=" text-center font-semibold text-gray-400 text-sm" id="month1"></p>
                                        </div>
                                        <div
                                            class=" second_month w-full px-6 py-3 border rounded-xl space-y-3 justify-center">
                                            <svg class="w-5 ml-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <path fill="gray"
                                                    d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                                            </svg>
                                            <p class=" text-center font-semibold text-gray-400 text-sm" id="month2"></p>
                                        </div>
                                        <div
                                            class="second_second_month w-full px-6 py-3 border rounded-xl space-y-3 justify-center">
                                            <svg class="w-5 ml-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <path fill="gray"
                                                    d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                                            </svg>
                                            <p class=" text-center font-semibold  text-gray-400 text-sm" id="month3">
                                            </p>
                                        </div>
                                    </div>
                                    <script>
                                        function getMonthName(date) {
                                            return date.toLocaleString('default', { month: 'long', year: 'numeric' });
                                        }

                                        const now = new Date();
                                        const month1 = new Date(now.getFullYear(), now.getMonth(), 1);
                                        const month2 = new Date(now.getFullYear(), now.getMonth() + 1, 1);
                                        const month3 = new Date(now.getFullYear(), now.getMonth() + 2, 1);

                                        $('#month1').text(getMonthName(month1));
                                        $('#month2').text(getMonthName(month2));
                                        $('#month3').text(getMonthName(month3));
                                        $(".first_month,.second_month,.second_second_month").click(function (e) {
                                            e.preventDefault();
                                            $(".first_month,.second_month,.second_second_month").addClass("border")
                                            $(".first_month,.second_month,.second_second_month").removeClass("border-gray-900")
                                            $(this).addClass("border-gray-900");
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="total_guest p-5 rounded-3xl bg-white shadow-lg shadow-black">
                    <h2 class=" font-semibold text-2xl my-4 text-gray-700 "> Who's coming ?</h2>
                    <div>
                        <div class="flex justify-between items-center pb-3">
                            <div>
                                <p class=" font-bold text-md text-gray-700">Adults</p>
                                <p class=" text-sm font-semibold text-gray-500">Ages 13 or above</p>
                            </div>
                            <div class=" flex space-x-2 items-center">
                                <button id="decrement_adults" class="p-3 border rounded-full">
                                    <svg class=" w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="gray"
                                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                    </svg></button>
                                <p class="guest_adults">0</p>
                                <button id="increment_adults" class="p-3 border rounded-full"><svg class="w-3"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="gray"
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pb-3">
                            <div>
                                <p class="font-bold text-md text-gray-700">Children</p>
                                <p class=" text-sm font-semibold text-gray-500">Ages 2-12</p>
                            </div>
                            <div class=" flex space-x-2 items-center">
                                <button id="decrement_children" class=" decrement p-3 border rounded-full">
                                    <svg class="w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="gray"
                                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                    </svg></button>
                                <p class=" guest_children">0</p>
                                <button id="increment_children" class=" increment p-3 border rounded-full"><svg
                                        class="w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="gray"
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flex justify-between items-center pb-3">
                            <div>
                                <p class="font-bold text-md text-gray-700">Infants</p>
                                <p class=" text-sm font-semibold text-gray-500">Under-2</p>
                            </div>
                            <div class=" flex space-x-2 items-center">
                                <button id="decrement_infants" class="decrement p-3 border rounded-full">
                                    <svg class="w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="gray"
                                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                    </svg></button>
                                <p class=" guest_infants">0</p>
                                <button id="increment_infants" class=" increment p-3 border rounded-full"><svg
                                        class="w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="gray"
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div>
                            <div class="pet_div flex justify-between items-center pb-3">
                                <div>
                                    <p class="font-bold text-md text-gray-700">Pets</p>
                                    <a href="" class=" text-sm font-semibold text-gray-500"><u>Bringing a service animal
                                            ?</u></a>
                                </div>
                                <div class=" flex space-x-2 items-center">
                                    <button id="decrement_pets" class=" decrement p-3 border rounded-full">
                                        <svg class="w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="gray"
                                                d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                        </svg></button>
                                    <p class=" guest_pets">0</p>
                                    <button id="increment_pets" class=" increment p-3 border rounded-full"><svg
                                            class="w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="gray"
                                                d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>

                <div class="fixed bottom-0 left-0 reset_submit w-full px-2 py-3 bg-white">
                    <div class="flex items-center justify-between px-7 py-2 font-semibold">
                        <p class="reset_p cursor-pointer text-gray-800 font-semibold"><u>Clear all</u></p>
                        <script>
                            $(document).ready(function () {
                                $('.reset_p').on('click', function () {
                                    $.ajax({
                                        url: 'delete_cookies.php',
                                        method: 'POST',
                                        success: function (response) {
                                            location.reload();
                                        },
                                        error: function (xhr, status, error) {
                                            console.error('Error deleting cookies:', error);
                                        }
                                    });
                                });
                            });

                            $("#searchInput").on('input', function () {
                                alert("please not enter any address , may be your selected address not avilable in our database")
                                let searchval = $(this).val();
                                $(".serchInputdata").val(searchval);
                            });

                        </script>
                        <form action="" method="POST">
                            <input type="text" class="hidden serchInputdata" name="placeName">
                            <input type="text" class="hidden startingDate" name="stdate">
                            <input type="text" class="hidden endingDate" name="enddate">
                            <input type="number" class="hidden adultcount" name="noadult">
                            <input type="number" class="hidden ChildrenCount" name="nochildren">
                            <input type="number" class="hidden infantsCount" name="noinfants">
                            <input type="number" class="hidden petsCount" name="nopets">
                            <input type="submit"
                                class=" reset_btn text-white font-semibold bg-red-600 px-7 py-2 rounded-xl flex space-x-5 items-center"
                                value="Search" name="searchroom">
                        </form>
                    </div>
                </div>


            </div>
        </div>
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
        <div class="filter hidden box-border">
            <div
                class=" inner_filter px-2 relative h-full bg-white  sm:rounded-xl  sm:px-5 overflow-hidden overflow-y-scroll scrollbar-hide">
                <div class="relative px-2 ">
                    <div class="filter-header py-5 offFilter cursor-pointer">
                        <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                                d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                        </svg>
                        <h3 class="font-bold text-black text-xl text-center">Filters</h3>
                    </div>
                    <hr class=" border">
                    <h1 class=" text-black mb-2 font-bold text-xl mt-6">Type of place </h1>
                    <p>search rooms ,enter home or any tyoe of place</p>
                    <div class="room-type border rounded-xl justify-between flex h-20 my-5  text-sm ">
                        <div
                            class="any-type rounded-l-xl px-9 w-5/12  bg-black text-white flex  items-center justify-center">
                            <h1 name="house_type" value="any type">Any type</h1>
                        </div>
                        <div
                            class="type-room border-l border-r w-1/4 border-gray-400 hover:bg-black hover:text-white px-8  flex items-center justify-center">
                            room</div>
                        <div
                            class=" entier-home rounded-r-xl hover:bg-black w-1/3 hover:text-white px-5  flex items-center justify-center">
                            <h1>Entire Home</h1>
                        </div>
                    </div>
                    <script>
                        $("button").preventDefault();
                    </script>
                    <div>
                        <hr class="my-8 border">
                        <h1 class=" mb-1 font-bold text-2xl">Price range</h1>
                        <p class="mb-4">Nightly prices before fees and taxes</p>
                        <div class=" flex items-center space-x-1 -ml-2">
                            <div></div>
                            <div class=" w-[30%] border-2 border-gray-400 p-2 rounded-xl">
                                <p>Minimum</p>
                                <input type="number" name="minvalue" class="min_val bg-transparent w-full outline-none"
                                    placeholder="1500" pattern="\d*">
                            </div>
                            <hr class="w-5 border border-black">
                            <div class=" w-[30%] border-2 border-gray-400 p-2 rounded-xl">
                                <p>Maximum</p>
                                <input type="number" name="maxvalue" class="max_val bg-transparent w-full outline-none"
                                    placeholder="7000" pattern="\d*">
                            </div>
                        </div>
                        <hr class="my-8 border">
                        <h1 class="text-2xl font-bold mt-5">Room and beds</h1>
                        <p class="my-6">Bedroom</p>
                        <div class="bedrrom flex flex-wrap space-x-2 space-y-2">
                            <span></span>
                            <button
                                class="badroom-any bg-black text-white border-2 border-gray-400 rounded-2xl px-6 py-2">Any</button>
                            <button class="badroom-one rounded-2xl px-6 py-2 border-2 border-gray-400">1</button>
                            <button class="badroom-two rounded-2xl px-6 py-2 border-2 border-gray-400">2</button>
                            <button class="badroom-three rounded-2xl px-6 py-2 border-2 border-gray-400">3</button>
                            <button class="badroom-four rounded-2xl px-6 py-2 border-2 border-gray-400">4</button>
                        </div>
                        <p class="my-6">Beds</p>
                        <div class="beds flex flex-wrap space-x-2 space-y-2">
                            <span></span>
                            <button
                                class="bads-any bg-black text-white border-2 border-gray-400 rounded-2xl px-6 py-2">Any</button>
                            <button class="bads-one rounded-2xl px-6 py-2 border-2 border-gray-400">1</button>
                            <button class="bads-two rounded-2xl px-6 py-2 border-2 border-gray-400">2</button>
                            <button class="bads-three rounded-2xl px-6 py-2 border-2 border-gray-400">3</button>
                            <button class="bads-four rounded-2xl px-6 py-2 border-2 border-gray-400">4</button>
                        </div>
                        <p class="my-6">Bathroom</p>
                        <div class="bathroom flex flex-wrap space-x-2 space-y-2">
                            <span></span>
                            <button
                                class=" bathroom-any bg-black text-white border-2 border-gray-400 rounded-2xl px-6 py-2">Any</button>
                            <button class="bathroom-one rounded-2xl px-6 py-2 border-2 border-gray-400">1</button>
                            <button class="bathroom-two rounded-2xl px-6 py-2 border-2 border-gray-400">2</button>
                            <button class="bathroom-three rounded-2xl px-6 py-2 border-2 border-gray-400">3</button>
                            <button class="bathroom-four rounded-2xl px-6 py-2 border-2 border-gray-400">4</button>
                        </div>

                        <h1 class="font-bold text-2xl my-10 mb-5">Top-tier stays</h1>
                        <div class="px-5 py-3 border-2 border-gray-400 rounded-xl">
                            <svg class="w-10 h-10 my-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">

                                <path
                                    d="M272.2 64.6l-51.1 51.1c-15.3 4.2-29.5 11.9-41.5 22.5L153 161.9C142.8 171 129.5 176 115.8 176H96V304c20.4 .6 39.8 8.9 54.3 23.4l35.6 35.6 7 7 0 0L219.9 397c6.2 6.2 16.4 6.2 22.6 0c1.7-1.7 3-3.7 3.7-5.8c2.8-7.7 9.3-13.5 17.3-15.3s16.4 .6 22.2 6.5L296.5 393c11.6 11.6 30.4 11.6 41.9 0c5.4-5.4 8.3-12.3 8.6-19.4c.4-8.8 5.6-16.6 13.6-20.4s17.3-3 24.4 2.1c9.4 6.7 22.5 5.8 30.9-2.6c9.4-9.4 9.4-24.6 0-33.9L340.1 243l-35.8 33c-27.3 25.2-69.2 25.6-97 .9c-31.7-28.2-32.4-77.4-1.6-106.5l70.1-66.2C303.2 78.4 339.4 64 377.1 64c36.1 0 71 13.3 97.9 37.2L505.1 128H544h40 40c8.8 0 16 7.2 16 16V352c0 17.7-14.3 32-32 32H576c-11.8 0-22.2-6.4-27.7-16H463.4c-3.4 6.7-7.9 13.1-13.5 18.7c-17.1 17.1-40.8 23.8-63 20.1c-3.6 7.3-8.5 14.1-14.6 20.2c-27.3 27.3-70 30-100.4 8.1c-25.1 20.8-62.5 19.5-86-4.1L159 404l-7-7-35.6-35.6c-5.5-5.5-12.7-8.7-20.4-9.3C96 369.7 81.6 384 64 384H32c-17.7 0-32-14.3-32-32V144c0-8.8 7.2-16 16-16H56 96h19.8c2 0 3.9-.7 5.3-2l26.5-23.6C175.5 77.7 211.4 64 248.7 64H259c4.4 0 8.9 .2 13.2 .6zM544 320V176H496c-5.9 0-11.6-2.2-15.9-6.1l-36.9-32.8c-18.2-16.2-41.7-25.1-66.1-25.1c-25.4 0-49.8 9.7-68.3 27.1l-70.1 66.2c-10.3 9.8-10.1 26.3 .5 35.7c9.3 8.3 23.4 8.1 32.5-.3l71.9-66.4c9.7-9 24.9-8.4 33.9 1.4s8.4 24.9-1.4 33.9l-.8 .8 74.4 74.4c10 10 16.5 22.3 19.4 35.1H544zM64 336a16 16 0 1 0 -32 0 16 16 0 1 0 32 0zm528 16a16 16 0 1 0 0-32 16 16 0 1 0 0 32z" />
                            </svg>
                            <h3 class="text-xl font-bold">Guest favourties</h3>
                            <p>Lorem ipsum dolor sit amet, elit. Numquam, voluptatem?</p>

                        </div>

                        <h1 class="text-2xl font-bold mt-10 my-5"> Property type</h1>
                        <div class="flex flex-wrap space-x-7 space-y-6 mb-10">
                            <div></div>
                            <div class="house p-5 border-2 border-gray-500 flex flex-col w-32 space-y-7 rounded-xl">
                                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">

                                    <path
                                        d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                                </svg>
                                <h3 class="font-semibold text-xl ">House</h3>
                            </div>
                            <div class="flat p-5 border-2 border-gray-500 flex flex-col w-32 space-y-7 rounded-xl"><svg
                                    class="w-10 h-10" axmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">

                                    <path
                                        d="M48 0C21.5 0 0 21.5 0 48V464c0 26.5 21.5 48 48 48h96V432c0-26.5 21.5-48 48-48s48 21.5 48 48v80h96c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48H48zM64 240c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V240zm112-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V240c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V240zM80 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zm80 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H176c-8.8 0-16-7.2-16-16V112zM272 96h32c8.8 0 16 7.2 16 16v32c0 8.8-7.2 16-16 16H272c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16zM448 0c-17.7 0-32 14.3-32 32V512h64V192H624c8.8 0 16-7.2 16-16V48c0-8.8-7.2-16-16-16H480c0-17.7-14.3-32-32-32z" />
                                </svg>
                                <h3 class="font-semibold text-xl "> Flat</h3>
                            </div>
                            <div
                                class="guest-house p-5 border-2 border-gray-500 flex flex-col w-32 space-y-7 rounded-xl">
                                <svg class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">

                                    <path
                                        d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c.2 35.5-28.5 64.3-64 64.3H128.1c-35.3 0-64-28.7-64-64V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24zM352 224a64 64 0 1 0 -128 0 64 64 0 1 0 128 0zm-96 96c-44.2 0-80 35.8-80 80c0 8.8 7.2 16 16 16H384c8.8 0 16-7.2 16-16c0-44.2-35.8-80-80-80H256z" />
                                </svg>
                                <h3 class="font-semibold text-sm ">Guest House</h3>
                            </div>
                            <div class="hotel p-5 border-2 border-gray-500 flex flex-col w-32 space-y-7 rounded-xl"><svg
                                    class="w-10 h-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                                    <path
                                        d="M0 32C0 14.3 14.3 0 32 0H480c17.7 0 32 14.3 32 32s-14.3 32-32 32V448c17.7 0 32 14.3 32 32s-14.3 32-32 32H304V464c0-26.5-21.5-48-48-48s-48 21.5-48 48v48H32c-17.7 0-32-14.3-32-32s14.3-32 32-32V64C14.3 64 0 49.7 0 32zm96 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H112c-8.8 0-16 7.2-16 16zM240 96c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H240zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H368c-8.8 0-16 7.2-16 16zM112 192c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H112zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H240c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H368zM328 384c13.3 0 24.3-10.9 21-23.8c-10.6-41.5-48.2-72.2-93-72.2s-82.5 30.7-93 72.2c-3.3 12.8 7.8 23.8 21 23.8H328z" />
                                </svg>
                                <h3 class="font-semibold text-xl ">Hotel</h3>
                            </div>
                        </div>


                        <h1 class="font-bold text-wxl my-5">Amenities</h1>
                        <h3 class="text-xl font-semibold mb-4">Essentials</h3>
                        <div class="container space-y-5">
                            <div></div>
                            <div class="flex justify-between items-center">
                                <label for="" class="mr-2">Wifi</label>
                                <input type="checkbox" name="" id="wifiCheckbox">
                            </div>
                            <div class="flex justify-between items-center">
                                <label for="" class="mr-2">Kitchen</label>
                                <input type="checkbox" name="" id="kitchenCheckbox">
                            </div>
                            <div class="flex justify-between items-center">
                                <label for="" class="mr-2">Washing machine</label>
                                <input type="checkbox" name="" id="washingMachineCheckbox">
                            </div>
                            <div class="flex justify-between items-center">
                                <label for="" class="mr-2">Dryer</label>
                                <input type="checkbox" name="" id="dryerCheckbox">
                            </div>

                        </div>

                        <h1 class=" font-bold text-2xl my-5 ">host language</h1>

                        <div class="container  space-y-5">
                            <div class="flex justify-between items-center">
                                <label for="" class="mr-2">English</label>
                                <input type="checkbox" name="" id="englishCheckbox">
                            </div>
                            <div class="flex justify-between items-center">
                                <label for="" class="mr-2">Hindi</label>
                                <input type="checkbox" name="" id="hindiCheckbox">
                            </div>
                            <div class="flex justify-between items-center">
                                <label for="" class="mr-2">Odia</label>
                                <input type="checkbox" name="" id="odiaCheckbox">
                            </div>
                        </div>
                        <form action="" method="POST">
                            <div class="hidden">
                                <input type="text" id="type_place" name="type_place">
                                <input type="number" id="minPrice" name="minPrice">
                                <input type="number" id="Maxprice" name="Maxprice">
                                <input type="number" id="badroom" name="badroom">
                                <input type="number" id="beds" name="beds">
                                <input type="number" id="bathroom" name="bathroom">
                                <input type="text" id="propertyTtpe" name="propertyTtpe">
                            </div>
                            <div class=" w-full px-4 py-10 flex justify-between mt-5 mb-2 items-center">
                                <a class="reset_filter cursor-pointer font-bold" <?php
                                if (isset($_POST['submitFilter'])) {
                                    echo "href='index.php'";
                                }
                                ?>>clear all</a>

                                <input type="submit" value="show all" name="submitFilter"
                                    class=" cursor-pointerq submit_filter bg-black px-4 py-2 font-bold border rounded-xl text-white">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>

</body>

</html>
<?php
// End output buffering and send output
ob_end_flush();
?>