<?php include_once '../../config.php' ?>

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
    <script src="scrpt.js?v=<?= $version ?>"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVTBjdaWk84VPZ-v9C4TKk41Wd-GK1nlo"></script>
    <?php
    if (isset($_GET['property_id'])) {
        $property_id = $_GET['property_id'];
        include_once '../../coon.php';
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
                    WHERE p.property_id = '$property_id '";
        $result = mysqli_query($conn, $sql);
        if( mysqli_num_rows($result)>0){
            $row = mysqli_fetch_array($result);
        }
        ?>
        <div class="property_main_container">
            <div class=" hidden sm:block  ">
                <div class="flex justify-between">
                    <h1 class="text-3xl font-semibold"><?php echo $row['title'] ?></h1>
                    <div class=" flex items-center gap-3">
                        <p><i class="fa-regular fa-share-from-square"></i> Share</p>
                        <p><i class="fa-regular fa-heart"></i> Save</p>
                    </div>
                </div>
            </div>
            <div class="image-container relative sm:my-5 w-full h-64 flex sm:h-80 lg:h-96 gap-2">
                <div class="sm:hidden absolute top-5 flex justify-between px-5 w-full">
                    <button id="back-button" class="w-10 h-10 bg-white rounded-full">
                        <a href="javascript:history.back()" class="button"><i class="fa-solid fa-angle-left"></i></a>
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
                        <a href="" class="button">Show all photos</a>
                    </button>
                </div>
            </div>


            <div class="px-5">
                <div class="propertydetalis flex overflow-hidden " alt="something wrong">
                    <div class=" ">
                        <h1 class=" sm:hidden text-2xl my-2 font-semibold"><?php echo $row['title'] ?></h1>
                        <p class="font-semibold my-1 sm:text-xl whitespace-nowrap">Entire rental unit in <?php echo $row['location'] ?>
                        </p>
                        <p class="whitespace-nowrap">4 guests . 2 bedrooms . 2 beds . 1 bathrooms</p>
                        <p class="my-1 whitespace-nowrap font-bold"><i class="fa-solid fa-star"></i> 4.75 - <u>24
                                reviews</u></p>
                        <div
                            class="whitespace-nowrap cursor-pointer border-t-2 border-b-2 mt-5 flex items-center gap-5 py-5">
                            <div class=" bg-gray-400 flex justify-center items-center w-10 h-10 rounded-full"><i
                                    class="fa-solid fa-user"></i></div>
                            <div>
                                <h3 class=" font-bold ">Hosted by Sourav</h3>
                                <p>Superhost . 16 months hosting</p>
                            </div>
                        </div>
                        <div class=" border-b-2 whitespace-nowrap">
                            <div class=" flex items-center py-5">
                                <div class=" w-10 h-10 rounded-full"><i class="fa-solid fa-door-open"></i></div>
                                <div>
                                    <h3 class=" font-semibold">Self check-in</h3>
                                    <p>Check yourself in with the lockbox.</p>
                                </div>
                            </div>
                            <div class=" flex items-center py-5">
                                <div class=" w-10 h-10 rounded-full"><i class="fa-solid fa-paw"></i></div>
                                <div>
                                    <h3 class=" font-semibold">Furry friends welcome</h3>
                                    <p>Bring your pets along for the stay.</p>
                                </div>
                            </div>
                        </div>
                        <div class=" py-5 border-b-2">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illo molestias est temporibus
                                provident
                                sunt deleniti eaque asperiores minus officiis quia? Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Incidunt, hic!</p>
                            <a href="" class=" font-semibold my-7"><u>Show more</u></a>
                        </div>
                    </div>
                    <div class="payment_form hidden sm:block border-2 shadow-lg px-5 py-5 rounded-xl lg:px-10">
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
                        <a class="cursor-pointer text-white w-full block  bg-pink-600 rounded-lg px-7 py-2 font-semibold text-center"
                            href="">Reserve</a>
                        <p class=" my-2">You won't be charged yet</p>
                        <div class=" py-2 border-b-2 ">
                            <div class=" flex my-2 items-center justify-between ">
                                <p>₹2,200 * 5 nights</p>
                                <p>₹11,000</p>
                            </div>
                            <div class=" flex my-2 items-center justify-between">
                                <p>Cleaning fee</p>
                                <p>₹100</p>
                            </div>
                            <div class=" flex my-2 items-center justify-between">
                                <p>Service fee</p>
                                <p>₹1567.06</p>
                            </div>
                            <div class=" flex my-2 items-center justify-between">
                                <p>Taxes</p>
                                <p>₹1332</p>
                            </div>
                        </div>
                        <div class=" flex my-2 py-3 items-center justify-between font-bold">
                            <p>Total(INR)</p>
                            <p>₹13,999.06</p>
                        </div>
                    </div>
                </div>
                <div class=" border-b-2 flex flex-col gap-y-3 py-5">
                    <h2 class=" text-2xl font-bold my-4">What this place offers</h2>
                    <div class=" lg:flex gap-10">
                        <div>
                            <div class=" flex gap-5 my-2"><i class="fa-solid fa-city"></i>
                                <p>City skyline view</p>
                            </div>
                            <div class=" flex gap-5 my-2"><i class="fa-solid fa-kitchen-set"></i>
                                <p>kitchen</p>
                            </div>
                            <div class=" flex gap-5 my-2"><i class="fa-solid fa-wifi"></i>
                                <p>wifi</p>
                            </div>
                            <div class=" flex gap-5 my-2"><i class="fa-solid fa-car"></i>
                                <p>Free parking on premises</p>
                            </div>
                            <div class=" flex gap-5 my-2"><i class="fa-solid fa-tv"></i>
                                <p>TV</p>
                            </div>
                        </div>
                        <div>
                            <div class=" flex gap-5 my-2"><i class="fa-solid fa-paw"></i>
                                <p>pets allowed</p>
                            </div>

                            <div class=" flex gap-5 my-2"><i class="fa-solid fa-bath"></i>
                                <p>Dedicated workspace</p>
                            </div>
                            <div class=" flex gap-5 my-2 line-through "><i class="fa-solid fa-ban-smoking"></i>
                                <p>Smoke alarm</p>
                            </div>
                            <div class=" flex gap-5 my-2 line-through"><i class="fa-solid fa-ban"></i>
                                <p>Carbon monoxide alarm</p>
                            </div>
                        </div>
                        <div class=" text-center font-semibold my-2">
                            <p class="cursor-pointer">Show all amenities</p>
                        </div>
                    </div>
                </div>
                <div class=" border-b-2">
                    <h1 class=" my-4 font-bold text-2xl">Where you'll be</h1>
                    <p>Bhubaneswar,Odisha,india</p>
                    <div class="maps my-5 h-60 w-full opacity-75 rounded-xl "></div>
                </div>
                <script>
                    var map; // Declare a global variable to hold the map object

                    function initMap() {
                     
                        if (!map) {
                      
                            var location = { lat: 20.2961, lng: 85.8245 }; 

                            
                            map = new google.maps.Map($('.maps')[ 0 ], {
                                zoom: 12,
                                center: location,
                                disableDefaultUI: true 
                            });
                        }
                    }
                    initMap();
                </script>
                <div class="reviews w-full">
                    <h1 class=" my-3 mb-7 text-2xl font-bold"><i class="fa-solid fa-star"></i> 4.71-58 reviews</h1>
                    <div class="all_reviews w-full  px-2 py-5 bg-gray-50  ">
                        <div class=" review-box rounded-lg  bg-white px-5 py-2 shadow-lg shadow-gray-500 ">
                            <div class="flex text-xs my-3">
                                <?php
                                for ($i = 1; $i <= 5; $i++) {
                                    echo "<i class='fa-solid fa-star' ></i>";
                                }
                                ?> - 3 days ago
                            </div>

                            <p class="text-sm">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, nisi!
                            </p>
                            <p class=" font-semibold my-3">Show more</p>
                            <div class=" px-2 flex items-center gap-6 py-3">
                                <div class=" w-10 h-10 rounded-full bg-gray-400 flex items-center justify-center"><i
                                        class="fa-solid fa-user"></i></div>
                                <div>
                                    <h3 class=" font-bold">Aakash</h3>
                                    <p>patna,india</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" py-3  border-2 border-gray-800 my-5 rounded-lg text-center">
                    <p class="font-semibold cursor-pointer">Show all 58 reviews</p>
                </div>
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
                                    <h2 class=" font-bold text-xl">Sourav</h2>
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
                            <p class=" text-xl font-semibold my-5">Aditi is a Superhost</p>
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
        <?php
    }
    ?>

</body>

</html>