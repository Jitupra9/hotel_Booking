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
            <?php include_once 'splicode/phone.php' ?>
            <?php include_once 'splicode/filter.php' ?>
            <div class=" hidden  w-full sm:flex justify-center ">
                <?php include_once 'splicode/desktop.php'; ?>
            </div>
            <div class="catogories_filter border-b-2 flex w-full justify-center items-center ">
                <div
                    class="catogorys py-2 text-gray-500 flex text-sm items-center space-x-5 sm:space-x-5 lg:space-x-10 overflow-hidden overflow-x-scroll scrollbar-hide sm:mr-5">
                    <script>
                        const categories = [ {
                            icon: "fa-snowflake",
                            name: "New",
                            color: "text-red-500"
                        },
                        {
                            icon: "fa-person-swimming",
                            name: "Pools"
                        },
                        {
                            icon: "fa-umbrella-beach",
                            name: "Beach"
                        },
                        {
                            icon: "fa-water",
                            name: "Lake"
                        },
                        {
                            icon: "fa-fire",
                            name: "Trending"
                        },
                        {
                            icon: "fa-mountain-city",
                            name: "Hill"
                        },
                        {
                            icon: "fa-tree-city",
                            name: "Tree"
                        },
                        {
                            icon: "fa-igloo",
                            name: "Caves"
                        },
                        {
                            icon: "fa-wand-magic-sparkles",
                            name: "Luxury"
                        },
                        {
                            icon: "fa-landmark-dome",
                            name: "Domes"
                        },
                        {
                            icon: "fa-person-skating",
                            name: "Iceland"
                        },
                        {
                            icon: "fa-tent",
                            name: "Camping"
                        },
                        {
                            icon: "fa-house-user",
                            name: "Room"
                        },
                        {
                            icon: "fa-pagelines",
                            name: "Desert"
                        }
                        ];

                        $(document).ready(() => {
                            categories.forEach(({
                                icon,
                                name,
                                color = "text-black"
                            }) =>
                                $(".catogorys").append(`
                    <div class="cursor-pointer ${name.toLowerCase()}_icon flex flex-col space-y-4 text-center">
                        <i class="fa-solid ${icon} text-lg"></i>
                        <p class="${color}">${name}</p>
                    </div>
                `)
                            );
                        });
                    </script>
                </div>

                <div class=" hidden cursor-pointer sm:flex ">
                    <div
                        class=" filterOpen rounded-xl overflow-hidden w-24 py-5 bg-green-600  flex gap-3 items-center justify-center ">
                        <i class="fa-regular fa-pen-to-square  text-white "></i>
                        <p class="font-semibold text-sm text-white">Filters</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="all_rooms  md:px-20">
            <section class=" rooms_main_parant text-gray-600 body-font pt-32 sm:pt-72 md:pt-60 lg:pt-64">
                <div class="inner_parant_room px-2 mx-auto">
                    <div class="allrooms flex flex-wrap -m-4 justify-center px-3 sm:px-0">
                        <div
                            class="sm:hidden border-2 w-full mx-2 mt-5 text-center font-bold border-gray-500 rounded-2xl p-5">
                            Price including Tax <i class="fa-solid fa-toggle-on"></i>
                        </div>
                    </div>
                    <script>

                        $(document).ready(function () {
                            let searchData = {}; // Define searchData at the top for global access

                            const renderRooms = (rooms) => {
                                $(".allrooms").empty();
                                rooms.forEach(element => {
                                    const room = `
                                <div class="proeprty-details w-full sm:w-80 border border-gray-500 rounded-2xl font-semibold pb-5 overflow-hidden m-2">
                                    <div class="images relative">
                                        <div class="absolute top-3 w-full flex justify-between px-2">
                                            <p class="bg-white rounded-full px-2">Guest Favorite</p>
                                            <p><i class="fa-solid fa-heart opacity-50 text-black"></i></p>
                                        </div>
                                        <img src="images/0d0d81ad-e946-4086-b122-ce0b4464af75.jpg" class="w-full h-full" alt="Room Image">
                                    </div>
                                    <div class="details p-1">
                                        <div class="flex justify-between font-bold">
                                            <p class="text-gray-700">${element.Title}</p>
                                            <p class="text-sm"><i class="fa-solid fa-star text-xs"></i> 5</p>
                                        </div>
                                        <p>${element.locations}</p>
                                          <p>${element.Property_type}</p>
                                        <p>${element.price} rupees</p>
                                    </div>
                                </div>`;
                                    $(".allrooms").append(room);
                                });
                            };

                            const fetchRooms = (searchData = {}) => {
                                $.ajax({
                                    url: "backend/room-fetch.php",
                                    type: searchData ? "POST" : "GET",
                                    data: searchData ? {
                                        placename: searchData.place,
                                        stdate: searchData.checkin,
                                        enddate: searchData.checkout,
                                        noadult: searchData.adult,
                                        nochild: searchData.child,
                                        nopets: searchData.pet,
                                        placeType: searchData.placeType, // Added missing property
                                        minPrice: searchData.minPrice,
                                        Maxprice: searchData.Maxprice,
                                        badroom: searchData.badroom,
                                        beds: searchData.beds,
                                        bathroom: searchData.bathroom,
                                        propertyTtpe: searchData.propertyTtpe
                                    } : {},
                                    dataType: "JSON",
                                    success: function (response) {
                                        renderRooms(response);
                                    },
                                    error: function (xhr, status, error) {
                                        console.error("Error fetching rooms:", error);
                                    }
                                });
                                console.log(searchData);
                            }; 
                            fetchRooms(searchData);

                            $(".deaktop_search").on("click", () => {
                                searchData = {
                                    place: $(".placename").val(),
                                    checkin: $("#checkin").val(),
                                    checkout: $("#checkout").val(),
                                    adult: $(".adultcounts").val(),
                                    child: $(".childcounts").val(),
                                    pet: $(".petcounts").val(),
                                    placeType: "", 
                                    minPrice: "", 
                                    Maxprice: "", 
                                    badroom: "",
                                    beds: "", 
                                    bathroom: "",
                                    propertyTtpe: "" 
                                };
                                fetchRooms(searchData);
                            });

                            $(".submitfilter").click(() => {
                                const filterData = {
                                    placeType: $("#type_place").val(),
                                    minPrice: $("#minPrice").val(),
                                    Maxprice: $("#Maxprice").val(),
                                    badroom: $("#badroom").val(),
                                    beds: $("#beds").val(),
                                    bathroom: $("#bathroom").val(),
                                    propertyTtpe: $("#propertyTtpe").val(),
                                };
                                const combinedData = { ...searchData, ...filterData };
                                fetchRooms(combinedData);
                                console.log(combinedData);
                            });
                            $(".reset_filter").click(()=>{

                            })
                        });


                    </script>

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
                    <div class="login "><a href="home/Login-Logout-signup/Login/autologin.php"><i
                                class="fa-regular fa-user"></i>
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
    </div>
</body>

</html>
<?php
ob_end_flush();
?>