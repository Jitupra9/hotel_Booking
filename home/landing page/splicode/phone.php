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