<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head(); ?>
</head>
<body>

<header class=" w-full h-[100px] z-10 bg-white fixed  border-b-2 border-[#c67b17] flex justify-center font-orbitron">
    <div class="max-w-[1250px] w-full h-full flex flex-row items-center justify-between px-3">
    <?php
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    // echo $image[0];
    ?>

    
    <img src="<?php echo $image[0]; ?>" class="w-[100px] h-[100px]"/>
    
    <div class="hidden md:flex w-2/3 justify-evenly">
            <?php wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'desktop-links'
        )
    );
    ?>
    </div>
   <span class="flex md:hidden cursor-pointer text-[#c67b17] text-4xl"> <i class="fa fa-bars mobile-menu-btn" aria-hidden="true"></i> </span>
</div>
</header>
<div class="hidden mobile-menu-container  w-full top-[100px] fixed z-10 font-orbitron">
        <?php wp_nav_menu(
        array(
            'theme_location' => 'mobile-menu',
            'menu_class' => 'mobile-links'
        )
    );
    ?>
</div>