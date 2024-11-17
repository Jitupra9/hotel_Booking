<div class="nav w-full ">
    <div class="top_header justify-between w-full hidden sm:flex items-center pt-4  mb-5 ">
        <div class="logo text-green-600 text-5xl sm:text-2xl font-bold "><i class="fa-solid fa-feather-pointed"></i>
            MyHome
        </div>
        <div class="mini_box hidden border border-gray-300 sm:mx-3  rounded-full shadow-lg shadow-gray-500 ">
            <div class="flex justify-between items-center">
                <p class="anywhere   cursor-pointer  px-4 lg:px-16 border-r-2">Anywhere</p>
                <p class="  anyweek  cursor-pointer   px-4 lg:px-16 border-r-2">Any week
                </p>
                <p class=" addguests  cursor-pointer  px-4 lg:px-16 ">Add guests</p>
                <div class=" w-7 h-7 mini_search flex justify-center items-center bg-gray-400 text-white rounded-full ">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i>
                </div>
            </div>
        </div>
        <div class=" text-gray-700 flex space-x-5 pr-16 items-center">
            <p class="airbnb-your-home text-2xl sm:text-sm">Airbnb Your home</p><i class="fa-solid fa-globe"></i>
            <div
                class="open-slide-bar cursor-pointer border rounded-full flex gap-5 px-3 py-2 justify-center items-center">
                <i class="fa-solid fa-bars-staggered"></i>
                <div class=" flex justify-center items-center bg-gray-500 w-7 h-7 rounded-full">
                    <i class="fa-solid fa-user text-white"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="account-slide-bar hidden">
        <p><a href="">Messages</a></p>
        <p><a href="">Notifications</a></p>
        <p><a href="">Trips</a></p>
        <p><a href="">Whichlist</a></p>
        <hr class="border border-gray-500 my-2">
        <?php if (isset($_SESSION['user'])):
            ?>
            <div class=""><a href="home/profile/profile.php">
                    <p>Account</p>
                </a></div>
        <?php else: ?>
            <div><a href="home/Login-Logout-signup/Login/autologin.php">
                    <p>Login</p>
                </a></div>
        <?php endif; ?>
        <hr class="border border-gray-500 my-2">
        <p><a href="">Help Center</a></p>
        <p><a href="home/Login-Logout-signup/logout.php">Logut</a></p>
    </div>








    <div class="mobile_header ">
        <div class="top_search_box border-2  whitespace-nowrap">
            <svg class="filter-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                <path
                    d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
            </svg>
            <div class="travel_fillup text-gray-600">
                <p class="font-semibold text-sm">Where to?</p>
                <p class=" text-xs font-sans ">Anywhere - Anytime - Add guests</p>
            </div>
        </div>
        <div class="filter-icon-border">
            <svg class="filterOpen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                <path
                    d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
            </svg>
        </div>
    </div>










    <div class="desktop_secreen_content">
        <div class=" header_one hidden sm:flex items-center justify-center space-x-5 lg:-mt-10 text-gray-500 ">
            <h3></h3>
            <h3 class=" stay cursor-pointer text-black">Stays</h3>
            <h3 class=" experiences cursor-pointer">Experiences</h3>
        </div>
        <div class=" hidden sm:flex header_two py-5">
            <div class="inner_header_two ">
                <div class="cursor-pointer open_map_box  overflow-hidden  hover:bg-gray-100 rounded-l-full">
                    <div class="inner_open_map_box  px-5 h-full lg:px-14 bg-transparent  py-2  ">
                        <p class=" font-semibold text-gray-800">Where</p>
                        <input class="text-gray-500 outline-none bg-transparent placename" type="text"
                            placeholder="Search destination">
                    </div>
                </div>

                <div
                    class="open_calander_box open_checkin cursor-pointer border-r  border-l border-gray-200  hover:bg-gray-100 ">
                    <div class="inner_open_checkin   h-full _box px-5 lg:px-14 py-2  bg-transparent">
                        <p class=" font-semibold text-gray-800">Check in</p>
                        <p class="text-gray-500">Add date.</p>
                    </div>
                </div>
                <div
                    class="open_calander_box open_checkout cursor-pointer border-r  border-l border-gray-200  hover:bg-gray-100 ">
                    <div class="inner_open_checkout  h-full  px-5 lg:px-14 py-2  bg-transparent">
                        <p class=" font-semibold text-gray-800">Check out</p>
                        <p class="text-gray-500">Add dat..</p>
                    </div>
                </div>
                <div
                    class=" open_add_dates hidden cursor-pointer px-2 lg:px-8 border-r border-l border-gray-200 hover:bg-gray-100 ">
                    <div class="inner_open_add_date  px-16 h-16 pt-1 lg:px-28  bg-transparent ">
                        <p class=" font-semibold text-gray-800">Dates</p>
                        <p class="text-gray-500">Add dates.</p>
                    </div>
                </div>
                <div class=" cursor-pointer open_guest_box overflow-hidden  hover:bg-gray-200 rounded-r-full">
                    <div
                        class="inner_open_guest_box   h-full  px-5 lg:px-8 py-2   bg-transparent flex items-center gap-16 ">
                        <div>
                            <p class=" font-semibold text-gray-800">Who</p>
                            <p class="text-gray-500">Add guests</p>
                        </div>
                        <script>
                            $(".placename").on('input', function () {
                                alert("please not enter any address , may be your selected address not avilable in our database")
                                let searchval = $(this).val();
                                $(".placenames").val(searchval);
                            });
                        </script>
                        <form action="" method="POST">
                            <input type="text" class=" hidden  placenames" name="placeName">
                            <input type="text" name="stdate" id="checkin" class=" hidden">
                            <input type="text" name="enddate" id="checkout" class=" hidden">
                            <input type="number" class=" hidden adultcounts" name="noadult">
                            <input type="number" class="hidden childcounts" name="nochildren">
                            <input type="number" class="hidden infantcounts" name="noinfants">
                            <input type="number" class="hidden petcounts" name="nopets">
                            <button type="submit" name="searchroom"
                                class="deaktop_search sm:w-9 sm:h-9 lg:w-10 lg:h-10 flex justify-center items-center bg-gray-400 rounded-full text-white text-xl">
                                <i class='fa-solid fa-magnifying-glass'></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>