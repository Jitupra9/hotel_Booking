<div class=" absolute w-4/5 ">
<div class=" hidden absolute left-0   w-96 map_box bg-white rounded-3xl py-7  shadow-xl shadow-gray-900 border-2 ">
    <p class=" font-semibold my-5 px-9 ">Search by Region</p>
        <div
            class="  flex flex-wrap text-center justify-center items-center  gap-4 w-96  overflow-hidden box-border ">
            <div>
                <div class=" w-24 border-2 rounded-xl  hover:border-black ">
                    <img class="object-cover object-center w-full h-full block rounded-xl" src="Frontend/images/full_map.jpg"
                        alt="">
                </div>
                <p class="my-2 text-gray-600">I'm flexible </p>
            </div>
            <div>
                <div class=" w-24 border-2 rounded-xl  hover:border-black">
                    <img class="object-cover object-center w-full h-full block rounded-xl" src="Frontend/images/europe.webp"
                        alt="">
                </div>
                <p class="my-2 text-gray-600">Europe</p>
            </div>
            <div>
                <div class=" w-24 border-2 rounded-xl  hover:border-black">
                    <img class="object-cover object-center w-full h-full block rounded-xl" src="Frontend/images/italy.webp"
                        alt="">
                </div>
                <p class="my-2 text-gray-600">Italy </p>
            </div>

            <div>
                <div class=" w-24 border-2 rounded-xl  hover:border-black">
                    <img class="object-cover object-center w-full h-full block rounded-xl" src="Frontend/images/south_asia.webp"
                        alt="">
                </div>
                <p class="my-2 text-gray-600">Southeast Asia </p>
            </div>
            <div>
                <div class=" w-24 border-2 rounded-xl hover:border-black ">
                    <img class="object-cover object-center w-full h-full block rounded-xl" src="Frontend/images/midle_east.webp"
                        alt="">
                </div>
                <p class="my-2 text-gray-600">Middle East</p>
            </div>
            <div>
                <div class=" w-24 border-2 rounded-xl hover:border-black ">
                    <img class="object-cover object-center w-full h-full block rounded-xl"
                        src="Frontend/images/unitaed_state.webp" alt="">
                </div>
                <p class="my-2 text-gray-600">United states</p>
            </div>
        </div>
        </div>




    <div class=" hidden absolute lg:left-1/3 sm:left-1/4 w-96 calander_box p-10 rounded-3xl bg-white shadow-xl shadow-gray-900 border-2">
                        <div class="select_date">
                            <div
                                class="select_date bg-gray-200  flex items-center px-2 py-2 mb-5 rounded-full justify-between">
                                <div class="dates px-5 py-2 bg-white  rounded-full">
                                    <p class=" font-semibold cursor-pointer">Dates</p>
                                </div>
                                <div class="months  px-5 py-2 rounded-full hover:bg-white ">
                                    <p class=" font-semibold cursor-pointer">Months</p>
                                </div>
                                <div class="flexible px-5 py-2 hover:bg-white rounded-full">
                                    <p class=" font-semibold cursor-pointer">Flexible</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div></div> -->
                        <div class="">
                            <div class="calendar-container h-60 overflow-y-scroll bg-white scrollbar-hide font-bold text-gray-600">
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
                                <div class="flex justify-between items-center mt-2 px-2"> <span id="prev_month"
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
                                        <button class="month_decrements p-3 border rounded-full">
                                            <svg class="w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="gray"
                                                    d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                            </svg></button>
                                        <p class="month_counts">2</p>
                                        <button class="month_increments p-3 border rounded-full"><svg class="w-2"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                <path fill="gray"
                                                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center my-4 font-bold">
                                    <p>Starting date</p>
                                    <p class="start_months"><u>Wed,May 1</u></p>
                                </div>
                                <div class="flex justify-between items-center font-bold">
                                    <p>End date</p>
                                    <p class="end_months"><u>Thu,Aug 1</u></p>
                                </div>
                            </div>
                        </div>
                        <div class="Flexible_container">
                            <div class="Flexible_container hidden">
                                <div class="">
                                    <h3 class=" text-gray-700 font-bold my-1">How long would you likke to stay ?</h3>
                                    <div class="flex space-x-4 items-center my-4">
                                        <p class="border rounded-full px-3 py-2 font-semibold text-gray-500 text-sm ">
                                            Weekend</p>
                                        <p class="border rounded-full px-3 py-2 font-semibold text-gray-500 text-sm ">
                                            Week</p>
                                        <p class="border rounded-full px-3 py-2 font-semibold text-gray-500 text-sm ">
                                            Month</p>
                                    </div>
                                    <hr>
                                    <h3 class=" text-gray-700 font-bold my-1">When do you want to go ?</h3>
                                    <div class="flex space-x-3 my-5 items-center">
                                        <div class="w-full px-6 py-3 border rounded-xl space-y-3 justify-center"><svg
                                                class="w-2 ml-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <path fill="gray"
                                                    d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                                            </svg>
                                            <p class=" text-center font-semibold text-gray-400 text-sm">May 2024</p>
                                        </div>
                                        <div class="w-full px-6 py-3 border rounded-xl space-y-3 justify-center"><svg
                                                class="w-2 ml-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <path fill="gray"
                                                    d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                                            </svg>
                                            <p class=" text-center font-semibold text-gray-400 text-sm">May 2024</p>
                                        </div>
                                        <div class="w-full px-6 py-3 border rounded-xl space-y-3 justify-center"><svg
                                                class="w-2 ml-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 448 512">
                                                <path fill="gray"
                                                    d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z" />
                                            </svg>
                                            <p class=" text-center font-semibold text-gray-400 text-sm">May 2024</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" hidden absolute w-96 right-0 guest_box py-7 px-10 rounded-3xl bg-white shadow-xl shadow-gray-900 border-2 ">
                    <div>
                        <div class= "flex justify-between items-center border-b-2 my-6 pb-3">
                            <div>
                                <p class=" font-bold text-md text-gray-700">Adults</p>
                                <p class=" text-sm font-semibold text-gray-500">Ages 13 or above</p>
                            </div>
                            <div class=" flex gap-4 items-center">
                                <button class="decrement_adults  p-3 border rounded-full">
                                    <svg class="w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="gray"
                                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                    </svg></button>
                                <p class="count_adults">0</p>
                                <button class="increment_adults p-3 border rounded-full"><svg class="w-2"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="gray"
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class= "flex justify-between items-center border-b-2 my-6 pb-3">
                            <div>
                                <p class="font-bold text-md text-gray-700">Children</p>
                                <p class=" text-sm font-semibold text-gray-500">Ages 2-12</p>
                            </div>
                            <div class=" flex gap-4 items-center">
                                <button class="decrement_children  p-3 border rounded-full">
                                    <svg class="w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="gray"
                                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                    </svg></button>
                                <p class="count_children">0</p>
                                <button class=" increment_children p-3 border rounded-full"><svg class="w-2"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="gray"
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class= "flex justify-between items-center border-b-2 my-3 pb-3">
                            <div>
                                <p class="font-bold text-md text-gray-700">Infants</p>
                                <p class=" text-sm font-semibold text-gray-500">Under-2</p>
                            </div>
                            <div class=" flex gap-4 items-center">
                                <button class="decrement_infants p-3 border rounded-full">
                                    <svg class="w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="gray"
                                            d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                    </svg></button>
                                <p class=" count_infants">0</p>
                                <button class="increment_infants p-3 border rounded-full"><svg class="w-2"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="gray"
                                            d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div>
                            <div class="pet_div  flex justify-between items-center border-b-2 my-3 pb-3">
                                <div>
                                    <p class="font-bold text-md text-gray-700">Pets</p>
                                    <a href="" class=" text-xs font-semibold text-gray-500"><u>Bringing a service animal
                                            ?</u></a>
                                </div>
                                <div class=" flex gap-4 items-center">
                                    <button class="decrement_pets p-3 border rounded-full">
                                        <svg class="w-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <path fill="gray"
                                                d="M432 256c0 17.7-14.3 32-32 32L48 288c-17.7 0-32-14.3-32-32s14.3-32 32-32l352 0c17.7 0 32 14.3 32 32z" />
                                        </svg></button>
                                    <p class=" count_pets">0</p>
                                    <button class="increment_pets p-3 border rounded-full"><svg class="w-2"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
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
</div>