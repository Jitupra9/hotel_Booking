<?php include_once '../../config/config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>room details</title>
    <link rel="stylesheet" href="room_details.css?v=<?= $version ?>">
    <script src="https://kit.fontawesome.com/12543e6ff4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    </style>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../frontend/javascript/room_details.js?v=<?= $version ?>"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpBvHKh_kjcu357JjejICS9hw-qENKK-s&libraries=places"></script>
    <?php
    try {
        if (isset($_GET['property'])) {
            $property_id = $_GET['property'];
            include_once '../../config/coon.php';
            $sql = "select p.*,s.* from property p join
                        property_specification s on p.Property_id = s.property_id  where p.property_id= '$property_id' ";
            $result = mysqli_query($conn, $sql);
            $activeSpecifications = [];
            $warnings = [];

            if ($result && mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                $specifications = [
                    'HasKitchen' => ['label' => 'Kitchen', 'icon' => 'fa-kitchen-set'],
                    'HasAC' => ['label' => 'Air Conditioning', 'icon' => 'fa-snowflake'],
                    'HasWiFi' => ['label' => 'WiFi', 'icon' => 'fa-wifi'],
                    'HasParking' => ['label' => 'Parking', 'icon' => 'fa-car'],
                    'HasDryer' => ['label' => 'Dryer', 'icon' => 'fa-dryer'],
                    'AllowsPets' => ['label' => 'Pets Allowed', 'icon' => 'fa-paw'],
                    'HasPool' => ['label' => 'Pool', 'icon' => 'fa-swimming-pool'],
                    'HasGym' => ['label' => 'Gym', 'icon' => 'fa-dumbbell'],
                    'HasBalcony' => ['label' => 'Balcony', 'icon' => 'fa-building'],
                    'HasGarden' => ['label' => 'Garden', 'icon' => 'fa-tree'],
                    'HasFireplace' => ['label' => 'Fireplace', 'icon' => 'fa-fire'],
                    'HasHotTub' => ['label' => 'Hot Tub', 'icon' => 'fa-hot-tub'],
                    'HasBBQ' => ['label' => 'BBQ', 'icon' => 'fa-utensils'],
                    'IsSmokeFree' => ['label' => 'Smoke-Free', 'icon' => 'fa-ban-smoking'],
                    'HasElevator' => ['label' => 'Elevator', 'icon' => 'fa-elevator'],
                    'AllowsSmoking' => ['label' => 'Smoking Allowed', 'icon' => 'fa-smoking'],
                ];
                foreach ($specifications as $column => $details) {
                    if (!empty($row[$column]) && $row[$column] > 0) {
                        if ($column === 'IsSmokeFree' && $row[$column] == 1) {
                            $warnings[] = "Smoking is restricted because this property is smoke-free.";
                            unset($specifications['AllowsSmoking']);
                        } elseif ($column === 'AllowsSmoking' && $row[$column] == 1) {
                            $warnings[] = "This property allows smoking. It may not be suitable for non-smokers.";
                            unset($specifications['IsSmokeFree']);
                        }
                        if (isset($specifications[$column])) {
                            $activeSpecifications[] = $details;
                        }
                    }
                }
            } else {
                $warnings[] = "No specifications available for this property.";
            }
        }
    } catch (Exception $error) {
        echo "somthing is wrong or may be server not respond ";
    } finally {
    }
    ?>
    <div class="property_main_container">
        <div class=" hidden sm:block  ">
            <div class="flex justify-between">
                <h1 class="text-3xl font-semibold">
                    <?php echo isset($row['Title']) ? $row['Title'] : "Propperty Title" ?>
                </h1>
                <div class=" flex items-center gap-3 relative">
                    <button class=" shareButton cursor-pointer"><u><i class="fa-regular fa-share-from-square"></i>
                            Share</u></button>
                    <?php
                    if (isset($_SESSION['user'])) {
                        $property_id = $_GET['property'];
                        $user_id = $_SESSION['user']['user_id'];
                        $query = "select property_id from wishlist where property_id ='$property_id' and user_id = '$user_id' ";
                        $result = mysqli_query($conn, $query);
                        if (mysqli_num_rows($result) != 0) {
                            ?>
                            <button class="saveItem"><u><i class="saved_porp fa-solid fa-bookmark text-red-600"></i>
                                    Save</u></button>
                            <?php
                        } else {
                            ?>
                            <button class="saveItem"><u><i class="saved_porp fa-regular fa-bookmark"></i>
                                    Save</u></button>
                            <?php
                        }
                    } else {
                        ?>
                        <button class="saveItem"><u><i class="saved_porp fa-regular fa-bookmark"></i>
                                Save</u></button>
                        <?php
                    }
                    ?>
                    <div
                        class=" share_sucess bg-white  shadow-lg border shadow-gray-600 rounded-xl py-1 px-3 absolute top-6 whitespace-nowrap hidden">
                        <i class="fa-solid fa-circle-check" style="color: #63E6BE;"></i> Link copyed
                    </div>
                    <div
                        class=" save_sucess bg-white  shadow-lg border shadow-gray-600 rounded-xl py-1 px-3 absolute top-6 whitespace-nowrap hidden ">
                        <i class="fa-solid fa-circle-check" style="color: #63E6BE;"></i> Item is saved
                    </div>
                </div>
                <script>
                    $(".saveItem").click(function (e) {
                        <?php
                        if (isset($_SESSION['user'])) {
                            ?>
                            const date = new Date();
                            const property_details = {
                                user_id: "<?php echo $_SESSION['user']['user_id'] ?>",
                                property_id: "<?php echo $_GET['property'] ?>",
                                date: `${date.getFullYear()}-${date.getMonth() + 1}-${date.getDate()}`
                            }
                            $.ajax({
                                url: "../../backend/save.php",
                                type: "POST",
                                data: {
                                    user_id: property_details.user_id,
                                    property_id: property_details.property_id,
                                    date: property_details.date
                                },
                                dataType: "JSON",
                                success: function (response) {
                                    if (response) {
                                        $(".saved_porp").removeClass("fa-regular");
                                        $(".saved_porp").addClass("fa-solid");
                                        $(".saved_porp").css({
                                            color: 'red'
                                        });
                                        $(".save_sucess").fadeIn();
                                        setTimeout(() => {
                                            $(".save_sucess").fadeOut();
                                        }, 1000);
                                    } else {
                                        alert("it's not worked");
                                    }
                                },
                                error: function (error) {
                                    console.error("AJAX Error:", error);
                                }
                            });
                            <?php
                        } else {
                            ?>
                            $(".login_popup").fadeIn();
                            <?php
                        }
                        ?>
                    });
                </script>
            </div>
        </div>
        <div class="login_popup hidden ">
            <i class="fa-regular fa-circle-user text-3xl text-red-600 mb-3"></i>
            <h1 class=" font-semibold text-xl mb-5">please login</h1>
            <p class="mb-3">Before performe any action please <br> login your account</p>
            <div class="">
                <button class="cancel_login_popup bg-gray-400 rounded-lg px-3 py-1">cancel</button>
                <button class="bg-red-600 text-white rounded-lg px-3 py-1"><a
                        href="../../frontend/Login-Logout-signup/Login/login.php">OK</a></button>
            </div>
        </div>
        <div class="image-container relative sm:my-5 w-full h-64 flex sm:h-80 lg:h-96 gap-2">
            <div class="sm:hidden absolute top-5 flex justify-between px-5 w-full">
                <button id="back-button" class="w-10 h-10 bg-white rounded-full">
                    <a href="" class="button"><i class="fa-solid fa-angle-left"></i></a>
                </button>
                <div>
                    <button class="w-10 h-10 bg-white rounded-full"><i
                            class="fa-solid fa-arrow-up-from-bracket"></i></button>
                    <button class="w-10 h-10 bg-white rounded-full"><i class="fa-solid fa-heart"></i></button>
                </div>
            </div>
            <img alt="image not found" class="sm:rounded-l-xl w-full sm:w-1/2 object-cover object-center h-full block"
                src="https://sitecore-cd-imgr.shangri-la.com/MediaFiles/9/B/1/%7B9B1CADF9-F770-4FBA-84C8-FE234781FCA6%7D4ed5fcea5a2c45968fb4d881cc167dfe.jpg" />

            <div class=" images w-1/2  flex-col gap-2 hidden sm:flex">
                <img src="https://img.freepik.com/premium-photo/hotel-rooms-interior-design-wall-decor_410516-11035.jpg"
                    alt="Image 2" class=" h-1/2 object-cover object-center" />
                <img src="https://www.oppeinhome.com/upload/image/product/thumb/20211009/white-grey-beige-modern-hotel-wood-grain1.jpg"
                    alt="Image 3" class="h-1/2 object-cover object-center" />
            </div>
            <div class="images w-1/2 sm:flex flex-col gap-2 hidden ">
                <img src="https://sthotelsmalta.com/wp-content/uploads/2022/06/modern-luxury-bedroom-suite-and-bathroom-with-working-table-1024x664.jpg"
                    alt="Image 2" class="h-1/2 object-cover object-center sm:rounded-tr-xl" />
                <img src="https://www.oppeinhome.com/upload/image/product/thumb/20211009/white-grey-beige-modern-hotel-wood-grain1.jpg"
                    alt="Image 3" class=" hover:bg-gray-500 h-1/2 object-cover object-center sm:rounded-br-xl" />
            </div>
            <div class="hidden absolute bottom-5 sm:flex justify-between px-5 w-full">
                <button id="back-button" class=" bg-white font-semibold rounded-lg border border-gray-600 px-3 py-1 ">
                    <a href="" class="button"><i class="fa-solid fa-list-ul"></i> Show all photos</a>
                </button>
            </div>
        </div>


        <div class="propertydetalis_parent">
            <div class="propertydetalis relative flex justify-between" alt="something wrong">
                <div class=" booking_detilas_div">
                    <h1 class=" sm:hidden text-2xl my-2 font-semibold">Property Title</h1>
                    <p class="font-semibold my-1 sm:text-2xl whitespace-nowrap">
                        <?php
                        echo (isset($row['property_name']) && isset($row['locations'])) ? $row['property_name'] . " in " . $row['locations'] . ", India" : "Propperty Name and Location not avilable";
                        ?>
                    </p>
                    <p class="whitespace-nowrap">
                        <?php echo (isset($row['MaxAdult']) ? $row['MaxAdult'] : 0) + (isset($row['MaxChild']) ? $row['MaxChild'] : 0) . " " . " guests" . " . " . (isset($row['HasBadroom']) ? $row['HasBadroom'] . " " . "bedrooms " : "") . " . " . (isset($row['HasBeds']) ? $row['HasBeds'] . " " . "beds" : "") . " . " . (isset($row['HasBathroom']) ? $row['HasBathroom'] . " " . "bathrooms" : "");
                        ?>
                    </p>
                    <div class="py-3 mt-5 border border-gray-200 rounded-xl font-semibold">
                        <div class="flex items-center justify-around">
                            <div class=" analys_box  border-r flex justify-center items-center ">
                                <h3>Guests <br> favourite</h3>
                                <p class="guset_favourite">One of the most loved homes on <br> easy stay,according
                                    guests</p>
                            </div>
                            <div class=" analys_box  border-r">
                                <p class=" text-center text-2xl">00</p>
                                <?php for ($i = 0; $i <= 5; $i++) {
                                    echo '<i class="fa-solid fa-star text-xs"></i>';
                                } ?>
                            </div>
                            <divc class=" analys_box  ">
                                <p class="text-2xl"><?php echo isset($row['propert_review']) ? $row['propert_review'] : '00'  ?></p>
                                <p><u>Reviews</u></p>
                            </divc>
                        </div>
                    </div>
                    <div class="whitespace-nowrap cursor-pointer  border-b mt-5 flex items-center gap-5 py-5">
                        <div class=" bg-gray-200 flex justify-center items-center w-10 h-10 rounded-full"><i
                                class="fa-solid fa-user"></i></div>
                        <div>
                            <h3 class=" font-bold ">Hosted by
                                <?php echo (isset($row['Hostid']) ? $row['Hostid'] : "Name Not Found") ?>
                            </h3>
                            <p class=" host-p-profile">Superhost -
                                <?php
                                $now = time();
                                $date = isset($row['Hosting_date']) ? $row['Hosting_date'] : 00;
                                $diff = $now - strtotime($date);
                                $day = $diff / (24 * 60 * 60);
                                echo isset($row['Hosting_date']) ? round($day / 30) : 00
                                    ?>
                                months hosting
                            </p>
                        </div>
                    </div>
                    <div class="property-feature-parent border-b-2 whitespace-nowrap">
                        <div class=" property-feature ">
                            <div class=" w-12  rounded-full"><i class="fa-solid fa-key"></i></div>
                            <div>
                                <h3 class=" font-semibold">Great check-in experience</h3>
                                <p>Recent guests loved the smooth start to this stay.</p>
                            </div>
                        </div>
                        <div class="property-feature">
                            <div class="w-12  rounded-full"><i class="fa-solid fa-street-view"></i></div>
                            <div>
                                <h3 class=" font-semibold">Peace and quiet</h3>
                                <p>Guests say this home is in a quiet area.</p>
                            </div>
                        </div>
                        <div class="property-feature">
                            <div class=" w-12 rounded-full"><i class="fa-regular fa-calendar"></i></div>
                            <div>
                                <h3 class=" font-semibold">Free cancellation</h3>
                                <p>Get a full refund if you change your mind.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" py-5 border-b-2">
                        <h1 class=" text-2xl font-semibold">About this place </h1> <br>
                        <p><?php echo (isset($row['Description'])) ? $row['Description'] : "No Description" ?></p>
                        <a href="" class=" font-semibold my-7"><u>Show more</u></a>
                    </div>
                </div>
                <div class="payment_div ">
                    <div class="payment_form  mb-5  border-2 shadow-lg p-5 rounded-xl lg:px-10">
                        <h1><span class=" font-bold text-2xl">₹2,200</span><span> night</span></h1>
                        <div class="border border-gray-600 rounded-lg text-xs my-5">
                            <div class="flex border-b border-gray-600">
                                <div class=" border-r border-gray-600 p-2 pr-10 lg:pr-24">
                                    <p class="font-semibold">CHECKIN</p>
                                    <p class="my-1">5/18/2024</p>
                                </div>
                                <div class="p-2 pr-10 lg:pr-24">
                                    <p class="font-semibold ">CHECKOUT</p>
                                    <p class="my-1">5/18/2024</p>
                                </div>
                            </div>
                            <div class="flex p-2 justify-between">
                                <div>
                                    <p class="font-semibold">GUESTS</p>
                                    <p class="my-1">3 guests</p>
                                </div>
                                <i class=" cursor-pointer fa-solid fa-angle-left transform -rotate-90"></i>
                            </div>
                        </div>
                        <a class="cursor-pointer text-white w-full block bg-pink-600 rounded-lg px-7 py-2 font-semibold text-center"
                            id="rzp-button1">Reserve</a>
                        <p class=" my-2">You won't be charged yet</p>
                        <div class=" py-2 border-b-2 ">
                            <div class=" flex my-2 items-center justify-between ">
                                <p><u>₹2,200 * 5 nights</u></p>
                                <p>₹11,000</p>
                            </div>
                            <div class=" flex my-2 items-center justify-between">
                                <p><u>Airbnb service fee</u></p>
                                <p>₹1332</p>
                            </div>
                        </div>
                        <div class=" flex my-2 py-3 items-center justify-between font-bold">
                            <p>Total(INR) before taxes</p>
                            <p>₹13,999.06</p>
                        </div>
                    </div>
                    <div
                        class="payment_litle flex items-start border-2 border-gray-200 shadow-2xl p-3 rounded-xl bg-white">
                        <i class="fa-brands fa-usps text-pink-600 "></i>
                        <div class="">
                            <h1 class="font-semibold mb-1 "> Good Price</h1>
                            <p class=" text-gray-500">Your dates are ₹355 less than the avg. nightly rate over the last
                                3 months.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" border-b-2 flex flex-col gap-y-3 py-5">
                <h2 class=" text-2xl font-semibold my-4">What this place offers</h2>
                <div class="lg:flex gap-10 tracking-widest">
                    <div> 
                        <?php
                        if (!empty($activeSpecifications)) {
                            foreach ($activeSpecifications as $index => $spec) {
                                if ($index % 5 === 0 && $index !== 0) {
                                    echo '</div><div>';
                                }
                                ?>
                                <div class="flex gap-5 my-2">
                                    <i class="fa-solid <?= $spec['icon'] ?>"></i>
                                    <p><?= $spec['label'] ?></p>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>No active specifications to display.</p>";
                        }
                        ?>
                    </div>
                </div>

                <?php if (!empty($warnings)) { ?>
                    <div class="bg-red-100 text-red-600 p-3 rounded-lg my-5">
                        <h3 class="font-bold">Restrictions:</h3>
                        <ul>
                            <?php foreach ($warnings as $warning) { ?>
                                <li><?= $warning ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>



            </div>
            <div class=" border-b-2">
                <h1 class=" my-4 font-bold text-xl ">Where you'll be</h1>
                <p>Bhubaneswar,Odisha,india</p>
                <div class="maps my-5 h-60 w-full opacity-75 rounded-xl "></div>
            </div>
            <script>
                var map; // Declare a global variable to hold the map object

                function initMap() {

                    if (!map) {

                        var location = { lat: 19.26330565998834, lng: 84.55881488959878 };
                        map = new google.maps.Map($('.maps')[ 0 ], {
                            zoom: 12,
                            center: location,
                            disableDefaultUI: true
                        });
                    }
                }
                initMap();
            </script>


            <h1 class="hidden sm:block text-2xl font-semibold my-5">Meet your Host</h1>
            <div
                class="hostdetails px-3 bg-gray-200 bg-opacity-40 rounded-xl py-7 sm:flex flex-col items-center justify-center">
                <h1 class=" sm:hidden text-2xl font-semibold my-5">Meet your Host</h1>
                <div class="flex flex-col lg:flex-row lg:space-x-10  justify-center sm:px-10">
                    <div>
                        <div
                            class="details flex gap-10 sm:w-96 items-center text-center justify-center bg-white rounded-3xl shadow-xl shadow-gray-700 py-5 px-5 my-10">
                            <div>
                                <div class=" rounded-full w-20 h-20 bg-gray-600"></div>
                                <h2 class=" font-bold text-xl">
                                    <?php echo (isset($row['Hostid']) ? $row['Hostid'] : "Name Not Found") ?></h2>
                                <p>Host</p>
                            </div>
                            <div>
                                <div class="py-3 border-b-2">
                                    <p class=" text-lg font-semibold">140</p>
                                    <p class=" text-xs">Reviews</p>
                                </div>
                                <div class="py-3 border-b-2">
                                    <p class=" text-lg font-semibold">4.81 <i class='fa-solid fa-star'></i></p>
                                    <p class=" text-xs">Rating</p>
                                </div>
                                <div class="py-3 border-b-2">
                                    <p class=" text-lg font-semibold">1</p>
                                    <p class=" text-xs">Year hosting</p>
                                </div>
                            </div>
                        </div>
                        <div class=" flex items-center gap-5 my-2"><i class="fa-solid fa-graduation-cap"></i>
                            <p>Where I went to school: South Shields Marine School</p>
                        </div>
                        <div class=" flex items-center gap-5 my-2"><i class="fa-solid fa-briefcase"></i>
                            <p>My work : Entrepreneur</p>
                        </div>
                        <p class=" font-bold my-2"> Show more</p>
                    </div>
                    <div>
                        <p class=" text-xl font-semibold my-5">
                            <?php echo (isset($row['Hostid']) ? $row['Hostid'] : "Name Not Found") ?> is a Superhost</p>
                        <div class="my-3">
                            <p>Superhosts are experienced, highly rated hosts who are committed to providing great stays
                                for guests.</p>
                        </div>
                        <p class=" text-xl font-semibold my-5">Host details</p>
                        <div class="my-3">
                            <p>Response rate: 83%</p>
                            <p>Responds within a few hours</p>
                        </div>
                        <button class="px-5 py-3 font-semibold  rounded-lg my-4 bg-black text-white">Message
                            Host</button>
                        <hr class="my-5 border-1 border-black">
                        <p class=" text-sm mt-10"><i class="fa-solid fa-sack-dollar text-red-400"></i> To protect your
                            payment, never transfer money or communicate outside of the Airbnb website or app.</p>

                    </div>
                </div>
            </div>
            <p class=" hidden sm:block my-5 font-semibold text-2xl">Things to Know</p>
            <div class=" sm:flex gap-5">
                <div class="sm:w-1/3 py-5 flex space-x-3 items-center border-b-2 text-sm ">
                    <div>
                        <h1 class=" font-semibold text-lg my-2">Cancellation policy</h1>
                        <p class=" my-5">cancel before 10 may for a partial refund</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, quia aspernatur! Eligendi
                            cupiditate nam maiores.</p>
                    </div>
                    <div class=" sm:hidden text-2xl transform rotate-180"><i class="fa-solid fa-angle-left"></i></div>
                </div>
                <div class=" sm:w-1/3 px-2 py-3  border-b-2 ">

                    <h1 class=" font-semibold text-lg my-2"> House rules</h1>
                    <p class=" my-2">Check-in after 12.00pm</p>
                    <p class="my-2">Checkout before 10.00 am</p>
                    <p class="my-2">4 guests maximum</p>
                    <p class=" font-bold">show more</p>
                </div>
                <div class=" sm:w-1/3 px-2 py-3  border-b-2  ">
                    <h1 class=" font-semibold text-lg my-2">Safety & property</h1>
                    <p class=" my-2">Carbon monoxide alarm not reported</p>
                    <p class=" my-2">Smoke alarm not reported</p>
                    <p class=" font-bold ">show more</p>
                </div>
            </div>
            <p class=" font-bold my-5 mb-24"><i class="fa-solid fa-flag mx-4"></i> <span>Report this listing</span></p>
            <hr class=" left-0 absolute w-full border-2  bg-gray-400">
        </div>
    </div>
    </div>
    </div>
</body>

</html>