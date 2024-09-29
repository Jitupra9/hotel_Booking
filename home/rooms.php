<section class=" rooms_main_parant text-gray-600 body-font pt-40 sm:pt-72 md:pt-60">
    <div class="inner_parant_room px-5 mx-auto">
        <div class="flex flex-wrap -m-4">
            <?php
            for ($i = 0; $i < 48; $i++) {
                echo '<div class="room lg:w-1/4 sm:w-1/2 p-4 w-full">
                    <a class="block relative h-48 rounded overflow-hidden">
                        <i class="text-2xl fa-solid fa-heart absolute right-4 top-4" style="color: #ffffff;"></i>
                        <img alt="ecommerce" class="object-cover object-center w-full h-full" src="images/bilderboken-rlwE8f8anOc-unsplash.jpg">
                    </a>
                    <div class="mt-4">
                        <div class="flex justify-between">
                            <h3 class="">Snehali villa</h3>
                            <a href="bookform.php" class="text-blue-500">View Details</a>
                        </div>
                        <p class="my-1"> <i class="fa-solid fa-location-dot" style="color: #ff0019;"></i> 102- Post Road Wells ME.CANADA</p>
                        <div class="flex justify-between">
                            <p><i class="fa-solid fa-star" style="color: #FFD43B;"></i> 5 (<a href="/" class="text-blue-500"> 114 reviews</a>)</p>
                            <p class="">$380/Night</p>
                        </div>
                    </div>
                </div>';
            }
            ?>
        </div>
    </div>
</section>