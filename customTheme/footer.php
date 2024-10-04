<?php wp_footer(); ?>
<footer class="w-full border-t-2 border-[#c67b17] flex flex-col items-center font-orbitron">
    <div class="h-[400px] max-w-[1250px] w-full flex flex-col items-center justify-between py-8">

        <div class="flex flex-row justify-evenly w-3/4">
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            ?>

            
            <img src="<?php echo $image[0]; ?>" class="w-[200px] h-[200px]"/>

            <div class="flex flex-col items-center gap-5">

                <ul class="flex flex-col font-bold">
                    <li>45-50 Wellington Avenue</li>
                    <li>Greenwich</li>
                    <li>London</li>
                    <li>SE10 8BB</li>
                </ul>

                <ul class="flex flex-row justify-between w-full">
                    <li>
                        <span class="cursor-pointer bg-[#c67b17] hover:bg-[#8f5d1a] w-[40px] h-[40px] rounded-full flex justify-center items-center"><i class="fa fa-facebook fa-lg text-white" aria-hidden="true"></i></span>
                    </li>

                    <li>
                        <span class="cursor-pointer bg-[#c67b17] hover:bg-[#8f5d1a] w-[40px] h-[40px] rounded-full flex justify-center items-center"><i class="fa fa-twitter fa-lg text-white" aria-hidden="true"></i></span>
                    </li>

                    <li>
                        <span class="cursor-pointer bg-[#c67b17] hover:bg-[#8f5d1a] w-[40px] h-[40px] rounded-full flex justify-center items-center"><i class="fa fa-instagram fa-lg text-white" aria-hidden="true"></i></span>
                    </li>

                    <li>
                        <span class="cursor-pointer bg-[#c67b17] hover:bg-[#8f5d1a] w-[40px] h-[40px] rounded-full flex justify-center items-center"><i class="fa fa-envelope fa-lg text-white" aria-hidden="true"></i></span>
                    </li>
                </ul>


            </div>
        </div>
            <div class="w-full flex flex-col items-center">
                <div class="flex justify-evenly w-3/4 my-2">
                <?php wp_nav_menu(
                    array(
                'theme_location' => 'footer-upper-menu',
                'menu_class' => 'footer-upper-links'
                    )
                );
                ?>
            </div>

            <div class="flex justify-evenly w-[95%] sm:w-3/4 my-2">
                <?php wp_nav_menu(
                    array(
                'theme_location' => 'footer-lower-menu',
                'menu_class' => 'footer-lower-links'
                    )
                );
                ?>
            </div>
            </div>
    </div>
</footer>
</body>
</html>