<?php include '../../config.php';
session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="profile.css?v=<?= $version ?>">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/12543e6ff4.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

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


        .handle_scrolls {
            display: none;
        }

        @media only screen and (max-width: 545px) {
            .all-slide-link {
                display: none;
            }

            .handle_scrolls {
                display: flex;
            }
        }
    </style>
</head>

<body>
    <script src="profile.js?v=<?= $version ?>"></script>
    <?php
    if (isset($_SESSION['user'])) { ?>
        <div class="main_container_profile 0">
            <div class="inner_mian_container_Profile">
                <div class="header_profile_div">
                    <div class="header_content">
                        <div class="profile_iconn_name flex justify-around gap-4 ">
                            <div class="profile_picture  rounded-full bg-gray-700">

                            </div>
                            <d iv class="header_name_text">
                                <h3 class="user_name font-bold whitespace-nowrap">
                                    <?php echo $_SESSION['user']['full_name'] ?> <i
                                        class="fa-solid fa-certificate text-green-700 font-bold"></i>
                                </h3>
                                <div class="account_type flex header_small_font ">
                                    <p class="bg-red-600 rounded-l-md text-white px-2 py-1">Account</p>
                                    <p class="bg-white text-black rounded-r-md px-4 py-1 whitespace-nowrap">Guest Member</p>
                                </div>
                            </d>
                        </div>
                        <div class="new_booking_hosting  whitespace-nowrap header_small_font">
                            <p class=" px-4 py-1 rounded-md cursor-pointer"><a href="../../index.php">New Booking</a></p>
                            <p class="newhosting  px-4 py-1 rounded-md cursor-pointer">New hosting</p>
                        </div>
                    </div>
                </div>
                <div class="profile_details">
                    <div class="slidebar border text-gray-600">
                        <div class="handle_scrolls flex justify-between px-5">
                            <p class="your-activity">Your activitys:Booking</p>
                            <div class="slide-toggle">
                                <i class="fa-solid fa-angle-down"></i>
                            </div>
                        </div>
                        <div class="all-slide-link">
                            <div class="booking_links">
                                <p class="active_slidebar_link Dashboard text-red-500 border-l-2 border-red-500">Dashboard
                                </p>
                                <p class="whichlist">Whichlist</p>
                                <p class="histroy">History</p>
                                <p class="review">review</p>
                            </div>
                            <hr class="my-4 w-3/4 ml-5 border">
                            <div class="hosting_links">
                                <p class="hosting">Hostings</p>
                                <p class="message">Messages</p>
                                <p class="properties">Properties</p>
                            </div>
                            <hr class=" my-4 w-3/4 ml-5 border">
                            <div class="own_details whitespace-nowrap">
                                <p class="update-profile">Update Profile</p>
                                <P class="switching-account">Switch Account</P>
                                <p><a href="http://localhost/project_hotel_managemnt/logout.php">Logut</a></p>
                                <p class=" text-white m-2 bg-red-500 rounded-md font-semibold">Delete Account</p>
                            </div>
                        </div>
                    </div>
                    <div></div>
                    <div class="data_container">
                        <div class="Dashboard_box ">
                            <h3 class="text-2xl font-bold">Dashboard<sup>
                                    <div class="dot w-3 h-3 inline-block bg-red-600 rounded-full"></div>
                                </sup></h3>

                            <div class="dashboard_cards mt-5">
                                <div class="das_card waiting">
                                    <div class="">
                                        <h3>Waiting list</h3>
                                        <h1 class="flex items-center ">840 <i
                                                class="fa-solid fa-circle-chevron-up mx-3"></i>+1.5
                                        </h1>
                                    </div>

                                    <div class="images">
                                        <img src="../../images/waiting.png" alt="" srcset="">
                                    </div>
                                </div>
                                <div class=" das_card complete">
                                    <div>
                                        <h3>Complete flights</h3>
                                        <h1 class="flex items-center">235 <i
                                                class="fa-solid fa-circle-chevron-up mx-3"></i>+1.5</h1>
                                    </div>

                                    <div class="images">
                                        <img src="../../images/complete.png" alt="" srcset="">
                                    </div>
                                </div>
                                <div class=" das_card revenue">
                                    <div>
                                        <h3>Total revenue</h3>
                                        <h1 class="flex items-center ">$2m <i
                                                class="fa-solid fa-circle-chevron-up mx-3"></i>+1.5</h1>
                                    </div>

                                    <div class="images">
                                        <img src="../../images/revenue.png" alt="" srcset="">
                                    </div>
                                </div>
                            </div>
                            <div class="notification_or_data  mt-5">
                                <div class="data_containers_dashboard">
                                    <h3 class=" mb-5 text-md font-bold">Resent Bookings :-</h3>

                                    <div class="recente_booking_data">
                                        <table class="w-full">
                                            <thead>
                                                <tr
                                                    class=" table-header text-gray-600  text-center border-b-2 whitespace-nowrap">
                                                    <th class=" ">Property</th>
                                                    <th class="mobile_hide_hd ">Added on</th>
                                                    <th class="mobile_hide_hd  ">Price</th>
                                                    <th class="mobile_hide_hd  ">Quantity</th>
                                                    <th class="mobile_hide_hd  ">Status</th>
                                                    <th class="mobile_hide_hd_empty"></th>
                                                    <th class=" ">Remove</th>
                                                    <th class=" ">Arrange</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 0; $i < 2; $i++)
                                                    echo '   
                                                    <tr class="whishlist-details text-center border-b hover:bg-gray-100 whitespace-nowrap">
                                                    <td class="">
                                                    <div class=" flex">
                                                    <img class="w-10 h-10 rounded-xl bg-gray-600"/></div>
                                                    </td>
                                                    <td class="whichlist_mobile_hide_td ">2024-07-28</td>
                                                    <td class="whichlist_mobile_hide_td">7000</td>
                                                    <td class="whichlist_mobile_hide_td "> <select name="quantity" id="quantity"
                                                    class="border-b border-gray-300 bg-transparent py-2 text-gray-700 outline-none">
                                                    <option value="1">1</option>
                                                    </select></td>
                                                    <td class="whichlist_mobile_hide_td ">Available</td>
                                                    <td class="whichlist_mobile_hide_td_button text-center">
                                                    <button class="add-cart-botton -mb-5 sm:m-0 ">Add
                                                    to Cart</button>
                                                    </td>
                                                    <td class=" ">
                                                    <i class="fa-solid fa-trash-can text-red-400 hover:text-red-700"></i>
                                                    </td>
                                                    <td class=" ">
                                                    <i class="fa-solid fa-plus text-blue-500 hover:text-blue-700"></i>
                                                    </td>
                                                    </tr>';
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <h3 class=" mt-5 mb-5 text-md font-bold">Resent Hostings :-</h3>
                                    <div class="resent_hosting_data mt-5">
                                        <table class="w-full">
                                            <thead>
                                                <tr
                                                    class=" table-header text-gray-600  text-center border-b-2 whitespace-nowrap">
                                                    <th class=" ">Property</th>
                                                    <th class="mobile_hide_hd ">Added on</th>
                                                    <th class="mobile_hide_hd  ">Price</th>
                                                    <th class="mobile_hide_hd  ">Quantity</th>
                                                    <th class="mobile_hide_hd  ">Status</th>
                                                    <th class="mobile_hide_hd_empty"></th>
                                                    <th class=" ">Remove</th>
                                                    <th class=" ">Arrange</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 0; $i < 1; $i++)
                                                    echo '   
                                                <tr class="whishlist-details text-center border-b hover:bg-gray-100 whitespace-nowrap">
                                                    <td class="">
                                                    <div class=" flex">
                                                    <img class="w-10 h-10 rounded-xl bg-gray-600"/></div>
                                                    </td>
                                                    <td class="whichlist_mobile_hide_td ">2024-07-28</td>
                                                    <td class="whichlist_mobile_hide_td">7000</td>
                                                    <td class="whichlist_mobile_hide_td "> <select name="quantity" id="quantity"
                                                            class="border-b border-gray-300 bg-transparent py-2 text-gray-700 outline-none">
                                                            <option value="1">1</option>
                                                        </select></td>
                                                    <td class="whichlist_mobile_hide_td ">Available</td>
                                                    <td class="whichlist_mobile_hide_td_button text-center">
                                                        <button class="add-cart-botton -mb-5 sm:m-0 bg-red-500 ">Cacnce host</button>
                                                    </td>
                                                    <td class=" ">
                                                        <i class="fa-solid fa-trash-can text-red-400 hover:text-red-700"></i>
                                                    </td>
                                                    <td class=" ">
                                                        <i class="fa-solid fa-plus text-blue-500 hover:text-blue-700"></i>
                                                    </td>
                                                </tr>';
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <hr class="dashboard_hr">
                                <div class="notificatons">
                                    <div class="notification-box ">
                                        <h3 class="text-md font-bold">Notifications<sup>
                                                <div class="dot w-3 h-3 inline-block bg-red-600 rounded-full"></div>
                                            </sup></h3>

                                        <?php
                                        $notification = false;
                                        if ($notification) {
                                            echo '';
                                            ;
                                        } else {
                                            echo '                                    <div
                                        class="empty-notification mt-4 flex flex-col justify-center items-center space-y-5 ">
                                        <i class="fa-solid fa-circle-info text-3xl"></i>
                                        <h2 class="text-md text-gray-600">Empty notification box</h2>
                                        <p class=" text-center text-xs">Lorem, ipsum dolor sit amet consectetur adipisicing
                                            elit. Architecto
                                            aperiam, magni laboriosam minima consectetur nobis. Excepturi, sapiente odio
                                            rem illo
                                            quos unde minus eligendi, deleniti quas, laboriosam assumenda tempora nisi.
                                        </p>
                                    </div>';
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>






                        <div class="whichlist-box hidden">
                            <h3 class="text-2xl font-bold mb-7">Whichlists<sup>
                                    <div class="dot w-3 h-3 inline-block bg-red-600 rounded-full"></div>
                                </sup></h3>

                            <div>
                                <table class="w-full">
                                    <thead>
                                        <tr class=" table-header text-gray-600  text-center border-b-2 whitespace-nowrap">
                                            <th class=" ">Property</th>
                                            <th class="mobile_hide_hd ">Added on</th>
                                            <th class="mobile_hide_hd  ">Price</th>
                                            <th class="mobile_hide_hd  ">Quantity</th>
                                            <th class="mobile_hide_hd  ">Status</th>
                                            <th class="mobile_hide_hd_empty"></th>
                                            <th class=" ">Remove</th>
                                            <th class=" ">Arrange</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < 3; $i++)
                                            echo '   
                                     <tr class="whishlist-details text-center border-b hover:bg-gray-100 whitespace-nowrap">
                                        <td class="">
                                        <div class=" flex">
                                        <input type="checkbox" class=""/>
                                        <img class="w-10 h-10 rounded-xl bg-gray-600"/></div>
                                        </td>
                                        <td class="whichlist_mobile_hide_td ">2024-07-28</td>
                                        <td class="whichlist_mobile_hide_td">7000</td>
                                        <td class="whichlist_mobile_hide_td "> <select name="quantity" id="quantity"
                                                class="border-b border-gray-300 bg-transparent py-2 text-gray-700 outline-none">
                                                <option value="1">1</option>
                                            </select></td>
                                        <td class="whichlist_mobile_hide_td ">Available</td>
                                        <td class="whichlist_mobile_hide_td_button text-center">
                                            <button class="add-cart-botton -mb-5 sm:m-0 ">Add
                                                to Cart</button>
                                        </td>
                                        <td class=" ">
                                            <i class="fa-solid fa-trash-can text-red-400 hover:text-red-700"></i>
                                        </td>
                                        <td class=" ">
                                            <i class="fa-solid fa-plus text-blue-500 hover:text-blue-700"></i>
                                        </td>
                                    </tr>';
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="flex justify-between items-center whichlist-third-section flex-wrap  ">
                                <div class="flex  whishlist-apply-select-parant">
                                    <p class="text-gray-500">APPLY THIS ACTION FOR ALL ITEMS SELECTED</p>
                                    <select name="" id="" placeholder="ADD TO CART" class="whichlist-select bg-transparent">
                                        <option value="">ADD TO CART</option>
                                        <OPtion value="">DROP ITEMS</OPtion>
                                    </select>
                                    <button class="whichlist-button">APPLY</button>
                                </div>
                                <button class="whichlist-btn-update">update</button>
                            </div>
                        </div>
                        <div class="histroy-box hidden">
                            <h3 class="text-2xl font-bold mb-7">History<sup>
                                    <div class="dot w-3 h-3 inline-block bg-red-600 rounded-full"></div>
                                </sup></h3>
                            <div class="histroy-data">
                                <div class="histroy-filter">
                                    <ul class="first-filter">
                                        <li class="active active_all all ml-0">All</li>
                                        <li class="alone">ALone</li>
                                        <li class="family">Family</li>
                                        <li class="place">Place</li>
                                    </ul>
                                    <ul class="second-filter">
                                        <li><i class="fa-solid fa-calendar-days"></i><select name="" id="">
                                                <option value="1">Past 1 Dayes</option>
                                                <option value="1">Past 7 Dayes</option>
                                                <option value="1">Past 15 Dayes</option>
                                                <option value="1">Past 30 Dayes</option>
                                                <option value="1">Past 90 Dayes</option>
                                                <option value="1">Past 180 Dayes</option>
                                                <option value="1">Past 365 Dayes</option>
                                                <option value="1">Past 2 Years</option>
                                                <option value="1">Past 5 Dayes</option>
                                            </select>
                                            <i class="fa-solid fa-sort-down"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="history-data">
                                    <div>
                                        <table class=" w-full text-center align-middle">
                                            <thead>
                                                <tr
                                                    class="histroy-table-header text-gray-600 text-center whitespace-nowrap">
                                                    <th class=" ">Property</th>
                                                    <th class="history_mobile_hide_hr ">Date</th>
                                                    <th class="history_mobile_hide_hr ">Staus</th>
                                                    <th class="">Invoice ID</th>
                                                    <th class=" ">Amount</th>
                                                    <th class="">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php for ($i = 0; $i < 3; $i++)
                                                    echo '   
                                            <tr
                                                class="whishlist-details text-center hover:bg-gray-100 whitespace-nowrap">
                                                <td class=" border-b">                                  
                                                <img src="" alt="imagenot found" class="w-10 h-10 rounded-xl bg-gray-600"/>
                                                </td>
                                                <td class="history_mobile_hide_hd border-b">2024-07-28</td>
                                                <td class="history_mobile_hide_hd border-b">Available</td>
                                                <td class=" border-b">NBK765789N</td>
                                                <td class=" border-b">7000</td>
                                                <td class="border-b text-center text-red-600"><i class="fa-solid fa-trash-can"></i></td>
                                            </tr>'
                                                        ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review_box hidden ">
                                <h3 class="text-2xl font-bold mb-5">Review<sup>
                                        <div class="dot w-3 h-3 inline-block bg-red-600 rounded-full"></div>
                                    </sup></h3>
                                <div class="review_data">
                                    <div class="users">
                                        <div class="user_box active_user_box">
                                            <div class="user_image"></div>
                                            <div class="user_details">
                                                <h3>Jitu Pradhan</h3>
                                                <p>Sales Manageer,Stack</p>
                                            </div>
                                        </div>
                                        <div class="user_box">
                                            <div class="user_image"></div>
                                            <div class="user_details">
                                                <h3>Jitu Pradhan</h3>
                                                <p>Sales Manageer,Stack</p>
                                            </div>
                                        </div>
                                        <div class="user_box hidden sm:flex">
                                            <div class="user_image"></div>
                                            <div class="user_details">
                                                <h3>Jitu Pradhan</h3>
                                                <p>Sales Manageer,Stack</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review_details">
                                        <h3>It was a great experience!</h3>
                                        <div class="rating mb-5">
                                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i
                                                class="fa-solid fa-star"></i>
                                        </div>
                                        <p class="mb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Animi beatae aliquam
                                            necessitatibus adipisci blanditiis, Eum beatae ipsa porro aliquam possimus, neque
                                            voluptatum inventore nisi minima! Neque ipsum modi in voluptatum placeat ab nulla,
                                            eius laborum nisi qui! Porro voluptates aut voluptatibus a error enim, eum beatae
                                            dolorum nostrum voluptas? Ducimus necessitatibus rem ab exercitationem dolores
                                            adipisci harum nulla architecto, ex enim voluptatum dignissimos reprehenderit
                                            dolorum inventore sit voluptas fuga fugit vitae nisi distinctio assumenda dolorem?
                                        </p>
                                        <br>
                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit Lorem ipsum
                                            dolor sit, amet consectetur adipisicing elit. Reiciendis, magnam?</p>
                                    </div>
                                </div>
                            </div>
                            <div class="hosting_box hidden">
                                <h3 class="text-2xl font-bold mb-5">Welcome Host<sup>
                                        <div class="dot w-3 h-3 inline-block bg-red-600 rounded-full"></div>
                                    </sup></h3>
                                <h2>Enter Your Hosting Details:</h2>

                                <div class="property-details">
                                    <form id="propertyForm" action="backend.php" method="post" enctype="multipart/form-data">
                                        <label for="">Property ID</label>
                                        <P class="pl-3 text-green-700 font-semibold" style="display: inline;"
                                            name="property-id">
                                            <?php
                                                function generateHostingID()
                                                {
                                                    $date = date('Ymd');
                                                    $time = date('His');
                                                    $hostingID = 'host_' . $date . $time;
                                                    return $hostingID;
                                                }

                                                $hostingID = generateHostingID();
                                                echo $hostingID;
                                                ?>
                                        <i class="fa-solid fa-check font-bold ml-3"></i>
                                    </P>
                                    <input type="hidden" name="property_id" value="<?php echo $hostingID; ?>"><br />
                                    <label for=""> property Name :</label>
                                    <input type="text" placeholder=" Enter Property Name">
                                    <label for="propertyType" name="proerty_name">Property Type</label>
                                    <select name="propertyType" id="propertyType" class="py-1 px-4">
                                        <option value="House">House</option>
                                        <option value="Flat">Flat</option>
                                        <option value="GuestHouse">Guest House</option>
                                        <option value="Hotel">Hotel</option>
                                    </select>

                                    <label for="propertyPrice">Property Price ($)</label>
                                    <input type="number" name="propertyPrice" id="propertyPrice"
                                        placeholder="Enter the price" min="0" required>

                                    <label for="currentStatus">Current Status</label>
                                    <select name="property_status" id="">
                                        <option value="Avilable" class=" text-green-600">Avilable</option>
                                        <option value="Un avilabele" class=" text-red-700"> UNavilable</option>
                                    </select><br />

                                    <label for="propertyLocation">Property Location</label>
                                    <input type="text" name="propertyLocation" id="propertyLocation"
                                        placeholder="Enter the location" required>

                                    <label for="hostId">Host ID:</label>
                                    <p id="hostId" class="pl-3 text-green-700 font-semibold" name="host_id"
                                        style="display: inline;">
                                        <?php echo $_SESSION['user']['user_id'] ?>
                                        <i class="fa-solid fa-check font-bold ml-3"></i>
                                    </p><br />

                                    <label for="maxGuests">Maximum Guests</label>
                                    <input type="number" name="maxGuests" id="maxGuests"
                                        placeholder="Enter the number of guests" min="1" required>
                                    <label for="propertyImages">Upload Property Images</label>
                                    <input type="file" name="propertyImages[]" id="propertyImages" multiple accept="image/*"
                                        required>
                                    <div id="imagePreview" class="image-preview"></div>
                                    <label for="propertyTitle">Property Title</label>
                                    <input type="text" name="propertyTitle" id="propertyTitle" placeholder="Enter the title"
                                        required>

                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="5"
                                        placeholder="Enter a detailed description of the property" required></textarea>

                                    <div class="amenities-section">
                                        <h4 class="inline-block">Amenities:</h4>
                                        <?php
                                        $amenities = [
                                            "property_id" => "Property ID",
                                            "HasKitchen" => "Has Kitchen",
                                            "HasAC" => "Has AC",
                                            "HasWiFi" => "Has WiFi",
                                            "HasParking" => "Has Parking",
                                            "HasDryer" => "Has Dryer",
                                            "AllowsPets" => "Allows Pets",
                                            "HasPool" => "Has Pool",
                                            "HasGym" => "Has Gym",
                                            "HasBalcony" => "Has Balcony",
                                            "HasGarden" => "Has Garden",
                                            "HasFireplace" => "Has Fireplace",
                                            "HasHotTub" => "Has Hot Tub",
                                            "HasBBQ" => "Has BBQ",
                                            "IsSmokeFree" => "Is Smoke-Free",
                                            "HasElevator" => "Has Elevator"
                                        ];
                                        foreach ($amenities as $value => $label) {
                                            echo '<label class="">';
                                            echo '<input type="checkbox" name="amenities[]" value="' . htmlspecialchars($value) . '"> ' . htmlspecialchars($label);
                                            echo '</label>';
                                        }
                                        ?>
                                    </div>

                                    <button class="mt-4 bg-blue-400 text-white px-5 py-2 font-semibold rounded-md"
                                        name="upload-hosing">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="properties_box">
                            <h3 class="text-2xl font-bold mb-5">Welcome Host<sup>
                                    <div class="dot w-3 h-3 inline-block bg-red-600 rounded-full"></div>
                                </sup></h3>
                            <div>
                                <script>
                                    function toggleDetails(id) {
                                        var details = document.getElementById('details-' + id);
                                        if (details.style.display === 'none') {
                                            details.style.display = 'table-row';
                                        } else {
                                            details.style.display = 'none';
                                        }
                                    }
                                </script>
                                <table class="w-full property_table">
                                    <thead>
                                        <tr class="table-header text-gray-600 text-center border-b-2 whitespace-nowrap">
                                            <td>serial NO</td>
                                            <th>Property id</th>
                                            <th class="mobile_hide_hd">Property type</th>
                                            <th class="mobile_hide_hd">Price</th>
                                            <th class="mobile_hide_hd">Status</th>
                                            <th class="mobile_hide_hd">Location</th>
                                            <th class="mobile_hide_hd">Max Guests</th>
                                            <th class="mobile_hide_hd">Place type</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../../coon.php';
                                        $sql = "SELECT * FROM property WHERE HOSTID = {$_SESSION['user']['user_id']}";
                                        $result = mysqli_query($conn, $sql);
                                        $serialNo = 1;
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo "<tr>";
                                                echo "<td>{$serialNo}</td>";
                                                echo "<td>{$row['Property_id']}</td>";
                                                echo "<td class='mobile_hide_hd'>{$row['Property_type']}</td>";
                                                echo "<td class='mobile_hide_hd'>{$row['price']}</td>";
                                                echo "<td class='mobile_hide_hd'>" . ($row['availability'] ? 'Available' : 'Unavailable') . "</td>";
                                                echo "<td class='mobile_hide_hd'>{$row['location']}</td>";
                                                echo "<td class='mobile_hide_hd'>{$row['MaxGuests']}</td>";
                                                echo "<td class='mobile_hide_hd'>{$row['place_type']}</td>";
                                                echo "<td><button onclick=\"toggleDetails('{$row['Property_id']}')\">Show Details</button></td>";
                                                echo "</tr>";
                                                echo "<tr id='details-{$row['Property_id']}' class='details'>";
                                                echo "<td colspan='9'>";
                                                echo "<strong>Title:</strong> {$row['Title']}<br>";
                                                echo "<strong>Description:</strong> {$row['Description']}<br>";
                                                echo "<strong>Images:</strong><br>";
                                                $images = explode(',', $row['property_images']);
                                                foreach ($images as $image) {
                                                    echo "<img src='path/to/images/{$image}' alt='Property Image'>";
                                                }
                                                echo "</td>";
                                                echo "</tr>";
                                                $serialNo++;
                                            }
                                        } else {
                                            echo "<tr><td colspan='9'>No records found</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        header("location:http://localhost/project_hotel_managemnt/");
    }

    ?>
</body>

</html>

<?php


























?>