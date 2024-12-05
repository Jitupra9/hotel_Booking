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
        .search_on {
            background-color: rgb(255, 34, 0);
            box-shadow: 1px 1px 10px 5px rgba(242, 30, 30, 0.569);
            color: rgb(252, 203, 202);
        }
    </style>
</head>

<body class="py-5">

    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="home/javascript/scripts.js?v=<?= $version ?>"></script>
    <script src="home/javascript/scripts_two.js?v=<?= $version ?>"></script>
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
                            name: "new",
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
                            categories.forEach(({ icon, name }) => {
                                $(".catogorys").append(`
                                    <div class="cursor-pointer ${name.toLowerCase()}_icon flex flex-col space-y-4 text-center">
                                        <i class="fa-solid ${icon} text-lg"></i>
                                        <p>${name}</p>
                                    </div>
                                `);
                            });
                            function filterRooms(type) {
                                $(".property_details").hide();
                                $("." + type).show();
                            }
                            $(".new_icon").click(function () { filterRooms('property_details'); });
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
                            let searchData = {};
                            const renderRooms = (rooms) => {
                                $(".allrooms").empty();
                                if (rooms.length != 0) {
                                    rooms.forEach(element => {
                                        function formatDateRange(availableFrom, availableTo) {
                                            const monthNames = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];

                                            const fromDate = new Date(availableFrom);
                                            const toDate = new Date(availableTo);

                                            const formattedFrom = `${fromDate.getDate()}-${monthNames[ fromDate.getMonth() ]}`;
                                            const formattedTo = `${toDate.getDate()}-${monthNames[ toDate.getMonth() ]}`;

                                            return `${formattedFrom} to ${formattedTo}`;
                                        }
                                        const room = `
                                            <div class="property_details ${element.place_type} w-full sm:w-80 border border-gray-400 rounded-2xl  pb-5 overflow-hidden m-2">
                                                <div class="images relative  cursor-pointer">
                                                    <div class="imageoverflows absolute flex justify-center items-center w-full h-full bg-black opacity-50">
                                                    <a href="home/room_details/room_details.php?property=${element.Property_id}" class=" text-white">Click to Details</a></div>
                                                    <div class="absolute top-3 w-full flex justify-between px-2">
                                                        <p class="bg-white rounded-full px-2">Guest Favorite</p>
                                                        <p><i class="fa-solid fa-heart opacity-50 text-black"></i></p>
                                                    </div>
                                                <!-- room images not stored due to large storages need  -->
                                                    <img src="images/0d0d81ad-e946-4086-b122-ce0b4464af75.jpg" class="w-full h-full" alt="Room Image">
                                                </div>
                                                <div class="details p-2">
                                                    <div class="flex justify-between font-semibold ">
                                                        <p class="text-black ">${element.property_name} in <span class="">${element.locations}</span></p>
                                                        <p class="text-sm"><i class="fa-solid fa-star text-xs"></i> 5-(312)</p>
                                                    </div>
                                                    <p class=" ">${element.Description}</p>
                                                    <p  class="text-xs tracking-widest font-semibold">${formatDateRange(element.available_from, element.available_to)}</p>
                                                    <p ><span class="text-black font-semibold"><i class="fa-solid fa-indian-rupee-sign text-xs"></i>${element.price}</span> night</p>
                                                </div>
                                            </div>`;
                                        $(".allrooms").append(room);
                                        $(".imageoverflows").hide();
                                        $(".images").hover(
                                            function () {
                                                $(this).find(".imageoverflows").show();
                                            },
                                            function () {
                                                $(this).find(".imageoverflows").hide();
                                            }
                                        );
                                    });
                                } else {
                                    console.log("it's empty")
                                    let nothing = '<h1> No data is avilabl</h1>';
                                    $(".allrooms").append(nothing);
                                }
                                
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
                                        placeType: searchData.placeType,
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
                                $(".deaktop_search").addClass("search_on");
                                $(".search_dlt").show();
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
                                const combinedData = {
                                    ...searchData,
                                    ...filterData
                                };
                                fetchRooms(combinedData);

                            });
                            $(".reset_filter").click(() => {
                                const filterData = {
                                    placeType: null,
                                    minPrice: null,
                                    Maxprice: null,
                                    badroom: null,
                                    beds: null,
                                    bathroom: null,
                                    propertyTtpe: null,
                                };
                                const combinedData = {
                                    ...searchData,
                                    ...filterData
                                };
                                fetchRooms(combinedData);

                            })
                            $(".search_dlt").click(() => {
                                searchData = {
                                    place: "",
                                    checkin: "",
                                    checkout: "",
                                    adult: "",
                                    child: "",
                                    pet: "",
                                };
                                fetchRooms(searchData);
                                $(".deaktop_search").removeClass("search_on");
                                $(".search_dlt").hide();
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