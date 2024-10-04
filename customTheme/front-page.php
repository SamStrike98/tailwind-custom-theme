<?php get_header(); ?>

<div class="pt-[100px] flex flex-col items-center bg-[#f2f2f2] min-h-[100vh]">
       <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

       <div class=" w-full max-h-[600px] relative">
        <?php if(has_post_thumbnail()): ?>
            <img src="<?php the_post_thumbnail_url('blog-large') ?>" alt="<?php the_title() ?>" class="w-full max-h-[600px] object-center object-cover opacity-100"/>
        <?php endif; ?>
        <?php endwhile; else: endif; ?>
        <div class="absolute w-full h-full top-0 text-center bg-black bg-opacity-40 flex items-center justify-center">
        <h2 class="font-orbitron text-5xl font-extrabold text-white">Welcome to Apex Motors</h2>
        </div>
        </div>

<div class="max-w-[1250px] flex flex-col items-center ">

    
<div class=" w-[80%]">
    <section class="my-10">
    <h3 class="font-bold text-3xl text-center font-orbitron text-[#c67b17] mt-10">Reviews</h3>
    <?php
// WP_Query for latest 3 reviews from the custom post type 'reviews'
$args_reviews = array(
    'post_type'      => 'review',   // Custom post type 'reviews'
    'posts_per_page' => 3,           // Limit to 3 reviews
    'orderby'        => 'date',      // Order by the post date
    'order'          => 'DESC',      // Display newest first
);

$latest_reviews = new WP_Query( $args_reviews );

// Start Loop
if ( $latest_reviews->have_posts() ) :
    echo '<div class="flex flex-row flex-wrap  gap-3 px-2 w-full justify-center">';  // Wrapper for reviews
    while ( $latest_reviews->have_posts() ) : $latest_reviews->the_post(); ?>

        <div class="shadow-md transition-shadow rounded-sm my-4 w-[300px] bg-white p-4 border-2 border-[#c67b17]">
            <div class="text-center w-full">⭐⭐⭐⭐⭐</div>
            
            
            <div class="review-content font-semibold text-lg my-3">
                <?php the_field('car_purchased'); ?> <!-- Display an excerpt or part of the review -->
            </div>

            <div class="review-content italic my-3">
                <span class="text-3xl font-bold">"</span><?php the_field('content'); ?><span class="text-3xl font-bold">"</span><!-- Display an excerpt or part of the review -->
            </div>
            <h4 class="font-bold text-xl text-center"><?php the_field('author'); ?></h4> <!-- Display the title (could be the reviewer's name) -->


        </div>

    <?php endwhile;
    echo '</div>';  // End wrapper
    wp_reset_postdata();  // Reset the global $post object so the rest of the page works properly
else :
    echo '<p>No reviews found.</p>';
endif;
?>
</section>

<section class="my-10">

<?php
// Query for latest 3 cars
$args_cars = array(
    'post_type'      => 'cars',      // Custom post type 'cars'
    'posts_per_page' => 3,           // Limit to 3 cars
    'orderby'        => 'date',      // Order by the post date
    'order'          => 'DESC',      // Display newest first
);

$latest_cars = new WP_Query( $args_cars ); ?>


<h3 class="font-bold text-3xl text-center font-orbitron text-[#c67b17] mt-10">Latest Cars</h3>

<?php
// Start Car Loop
if ( $latest_cars->have_posts() ) :
    echo '<div class="flex flex-row flex-wrap gap-2 px-2 w-full justify-center">';  // Wrapper for cars
    while ( $latest_cars->have_posts() ) : $latest_cars->the_post(); ?>

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

    <?php endwhile;
    echo '</div>';
    wp_reset_postdata(); // Reset after the second query
else :
    echo '<p>No cars found.</p>';
endif;
?>

<a href="/cars" class="font-orbitron text-[#c67b17] font-semibold hover:underline text-2xl">All Cars</a>
</section>


<section class="flex flex-col page-content bg-white p-10 shadow-md rounded-sm border-x-2 border-t-2 border-[#c67b17] mt-10 home-content">
    <?php the_content(); ?>
</section>
</div>
</div>

</div>

<?php get_footer(); ?>