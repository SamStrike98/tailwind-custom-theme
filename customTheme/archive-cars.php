<?php get_header(); ?>

<div class="pt-[100px] flex flex-col items-center bg-[#f2f2f2] min-h-[100vh]">
    <h2 class="font-bold text-4xl text-center font-orbitron my-12">Cars</h2>

    <div class="flex  flex-row w-full max-w-[1250px] ">
    <span class="self-start filter_btn font-bold text-white cursor-pointer fixed bg-[#c67b17] bg-opacity-60 hover:bg-opacity-100 p-2 rounded-sm flex justify-evenly items-center gap-2 bottom-0">
        <i class="fa fa-arrow-right filter_btn_icon" aria-hidden="true"></i> Filter 
    </span>

    <div class=" w-0 mt-[66px] hidden filters_container top-[100px] sticky">
        <div class="sticky top-[100px] flex w-[200px] max-w-[200px] bg-white p-2 rounded-sm flex-col gap-4 filters_box shadow-md">
            <?php get_search_form(); ?>
        <?php if(is_active_sidebar('car-sidebar') ): ?>
            <?php dynamic_sidebar('car-sidebar'); ?>
        <?php endif; ?>

        </div>
            
    </div>



    <ul class="flex flex-row flex-wrap  gap-2 px-2 mt-[50px] w-full justify-center cars_container">
    <?php 

    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="shadow-md transition-shadow rounded-sm my-4 w-[300px] bg-white">
        <!-- <a href="<?php the_permalink(); ?>" class="w-full"> -->
            <div class="flex flex-col items-center">
            
                <?php 
                $image = get_field('image');
                $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                if( $image ) { ?>
                    <image src="<?php echo wp_get_attachment_image_url( $image, $size ); ?>" class="w-full h-[200px]">
               <?php }; 
                ?>
                <div class="w-full flex flex-col items-center px-2 py-4">
                <h4 class="text-center font-bold text-2xl my-2 font-orbitron"><?php the_title(); ?></h4>

                <ul class="flex flex-row flex-wrap justify-between w-full gap-2 my-2">
                    <li class="rounded-lg border text-[11px] font-bold  py-[2px] px-[6px] my-2 bg-[#f2f2f2] shadow-sm"><?php the_field('year'); ?></li>
                    <li class="rounded-lg border text-[11px] font-bold py-[2px] px-[6px] my-2 bg-[#f2f2f2] shadow-sm"><?php the_field('miles'); ?> miles</li>
                    <li class="rounded-lg border text-[11px] font-bold py-[2px] px-[6px] my-2 bg-[#f2f2f2] shadow-sm"><?php the_field('engine_size'); ?> ltr</li>
                    <li class="rounded-lg border text-[11px] font-bold py-[2px] px-[6px] my-2 bg-[#f2f2f2] shadow-sm"><?php the_field('gear_box'); ?></li>
                    <li class="rounded-lg border text-[11px] font-bold py-[2px] px-[6px] my-2 bg-[#f2f2f2] shadow-sm"><?php the_field('fuel_type'); ?></li>
                </ul>   

                <p class="font-bold text-2xl my-2 w-full">£<?php the_field('price'); ?></p>
                <a href="<?php the_permalink(); ?>" class="w-1/2 my-2 p-3 text-white bg-[#c67b17] hover:bg-[#8f5d1a] transition-colors text-center font-bold rounded-md">View Details</a>
                </div>
            </div>


        <!-- </a> -->
    </div>

    <?php endwhile; else: endif;?>
    </ul>

    </div>

</div>

<?php get_footer(); ?>