<div class="filter hidden box-border">
    <div
        class=" inner_filter px-2 relative w-full h-full bg-white  sm:rounded-xl  sm:px-5 overflow-hidden overflow-y-scroll scrollbar-hide">
        <div class="px-2 ">
            <div class="filter-header py-5 offFilter cursor-pointer">
                <button>
                    <svg class="w-5 h-5 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                            d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </button>
                <h3 class="font-bold text-black text-xl text-center">Filters</h3>
            </div>
            <hr class=" border">
            <h1 class=" text-black mb-2 font-bold text-xl mt-6">Type of place </h1>
            <p>search rooms ,enter home or any tyoe of place</p>
            <div class="room-type border rounded-xl justify-between flex h-20 my-5  text-sm ">
                <div class="any-type rounded-l-xl px-9 w-5/12  bg-black text-white flex  items-center justify-center">
                    <h1 name="house_type" value="any type">Any type</h1>
                </div>
                <div
                    class="type-room border-l border-r w-1/4 border-gray-400 hover:bg-black hover:text-white px-8  flex items-center justify-center">
                    room</div>
                <div
                    class=" entier-home rounded-r-xl hover:bg-black w-1/3 hover:text-white px-5  flex items-center justify-center">
                    <h1>Home</h1>
                </div>
            </div>
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
                    <button class="badroom-one rounded-2xl px-5 py-2 border-2 border-gray-400">1</button>
                    <button class="badroom-two rounded-2xl px-5 py-2 border-2 border-gray-400">2</button>
                    <button class="badroom-three rounded-2xl px-5 py-2 border-2 border-gray-400">3</button>
                    <button class="badroom-four rounded-2xl px-5 py-2 border-2 border-gray-400">4</button>
                </div>
                <p class="my-6">Beds</p>
                <div class="beds flex flex-wrap space-x-2 space-y-2">
                    <span></span>
                    <button
                        class="bads-any bg-black text-white border-2 border-gray-400 rounded-2xl px-6 py-2">Any</button>
                    <button class="bads-one rounded-2xl px-5 py-2 border-2 border-gray-400">1</button>
                    <button class="bads-two rounded-2xl px-5 py-2 border-2 border-gray-400">2</button>
                    <button class="bads-three rounded-2xl px-5 py-2 border-2 border-gray-400">3</button>
                    <button class="bads-four rounded-2xl px-5 py-2 border-2 border-gray-400">4</button>
                </div>
                <p class="my-6">Bathroom</p>
                <div class="bathroom flex flex-wrap space-x-2 space-y-2">
                    <span></span>
                    <button
                        class=" bathroom-any bg-black text-white border-2 border-gray-400 rounded-2xl px-6 py-2">Any</button>
                    <button class="bathroom-one rounded-2xl px-5 py-2 border-2 border-gray-400">1</button>
                    <button class="bathroom-two rounded-2xl px-5 py-2 border-2 border-gray-400">2</button>
                    <button class="bathroom-three rounded-2xl px-5 py-2 border-2 border-gray-400">3</button>
                    <button class="bathroom-four rounded-2xl px-5 py-2 border-2 border-gray-400">4</button>
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
                    <div class="guest-house p-5 border-2 border-gray-500 flex flex-col w-32 space-y-7 rounded-xl">
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
                <div class="hidden">
                    <input type="text" id="type_place">
                    <input type="number" id="minPrice">
                    <input type="number" id="Maxprice">
                    <input type="number" id="badroom">
                    <input type="number" id="beds">
                    <input type="number" id="bathroom">
                    <input type="text" id="propertyTtpe">
                </div>
            </div>
        </div>
        <div class="filter_nav fixed sm:relative border-1 w-full  bottom-0 bg-white flex justify-between px-5 py-3 items-center">
            <a class="reset_filter cursor-pointer font-bold">clear all</a>
            <button value="show all"
                class=" cursor-pointer submitfilter bg-black px-4 py-2 font-bold border rounded-xl text-white">show
                all</button>
        </div>
    </div>
</div>