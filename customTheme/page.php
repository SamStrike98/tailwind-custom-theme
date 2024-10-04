<?php get_header(); ?>

<div class="pt-[100px] flex flex-col items-center bg-[#f2f2f2] min-h-[100vh]">
    <div class="max-w-[1250px] flex flex-col items-center my-12">
    <h2 class="font-bold text-4xl text-center font-orbitron text-[#c67b17]"><?php the_title(); ?></h2>
    
    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <section class="flex flex-col w-[80%] my-10 page-content">
        <?php the_content(); ?>
    </section>

    <?php endwhile; else: endif; ?>

    </div>
</div>

<?php get_footer(); ?>