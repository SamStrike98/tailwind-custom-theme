<?php get_header(); ?>

<div class="pt-[100px] flex flex-col items-center bg-[#f2f2f2] min-h-[100vh] relative">

<div class="flex flex-col items-center max-w-[1250px]">
        <button type="button" onclick="history.back();" class="font-semibold text-white bg-[#c67b17] hover:bg-[#8f5d1a] text-left absolute top-[100px] self-start rounded-md p-1 ml-1 mt-1"> ← Back </button> 

    
        <?php 
    $image = get_field('image');
    $size = 'large'; // (thumbnail, medium, large, full or custom size)
    if( $image ) { ?>
        <image src="<?php echo wp_get_attachment_image_url( $image, $size ); ?>" class="w-full border-b-2 border-[#c67b17]">
    <?php }; 
    ?>

    <?php 
        $performanceDetails = get_field('performance');
        $dimensionDetails = get_field('dimensions');
        $fuelConsumptionDetails = get_field('fuel_consumption');

                    
        // Function to format the key into a nice label
        function format_label($key) {
            // Replace underscores with spaces and capitalize each word
            return ucwords(str_replace('_', ' ', $key));
        };
    ?>
    <ul>

    </ul>

    <div class="flex flex-col items-center w-full p-3">
        <h2 class="text-center font-extrabold text-3xl font-orbitron"><?php the_title(); ?></h2>
        <h3>Details</h3>
        <div class="flex flex-col items-center">
            <h4>Key Details</h4>
            <ul class="flex flex-wrap">
                <li class="">Year of Registration</li>
                <li>Mileage</li>
                <li>Registration</li>
                <li>Insurance Group</li>
                <li>Engine Size</li>
                <li>Colour</li>
                <li>Previous Owners</li>
                <li>Body Style</li>
                <li>Transmission</li>
                <li>Fuel Type</li>
                <li>Price</li>
                <li>6 Month Road Tax</li>
                <li>12 Month Road Tax</li>
            </ul>
        </div>

        <div class="flex flex-col items-center w-full">
            <h3 class="font-semibold text-2xl">Technical Details</h3>
            <div class="w-4/5 bg-[#c67b17] text-white cursor-pointer overflow-y-hidden h-[50px] transition-all tab_box mb-5 rounded-md shadow-md">
                <div class="h-[50px] flex items-center font-bold text-xl ml-4">Performance</div>
                <ul class=" h-full flex flex-col bg-white text-black rounded-b-md">
                    <li class="h-[calc(100%-50px)] flex flex-col justify-between gap-2">

                        <?php
                        foreach ($performanceDetails as $outerKey => $outerValue) { ?>

                        
                        <ul class="p-2">
                        <!-- Format the outer key to a readable label -->
                        <h4 class="font-bold text-xl underline mb-1"><?php echo format_label($outerKey); ?>:</h4>
                            <?php
                            foreach ($outerValue as $innerKey => $innerValue) { ?>
                                <!-- Format the inner key to a readable label and display the value -->
                                <li class=" mb-1 pl-2"> <span class="font-semibold"><?php echo format_label($innerKey); ?>:</span> <?php echo $innerValue; ?></li>
                                
                                
                           <?php } ?>
                        </ul>
                       <?php } ?> 
                    </li>

                </ul>
            </div>

            <div class="w-4/5 bg-[#c67b17] text-white cursor-pointer overflow-y-hidden h-[50px] transition-all tab_box mb-5 rounded-md shadow-md">
                <div class="h-[50px] flex items-center font-bold text-xl ml-4">Dimensions</div>
                <ul class=" h-full flex flex-col bg-white text-black rounded-b-md">
                    <li class="h-[calc(100%-50px)] flex flex-col justify-between gap-2">

                        <?php
                        foreach ($dimensionDetails as $outerKey => $outerValue) { ?>

                        
                        <ul class="p-2">
                        <!-- Format the outer key to a readable label -->
                        <h4 class="font-bold text-xl underline mb-1"><?php echo format_label($outerKey); ?>:</h4>
                            <?php
                            foreach ($outerValue as $innerKey => $innerValue) { ?>
                                <!-- Format the inner key to a readable label and display the value -->
                                <li class=" mb-1 pl-2"> <span class="font-semibold"><?php echo format_label($innerKey); ?>:</span> <?php echo $innerValue; ?></li>
                                
                                
                           <?php } ?>
                        </ul>
                       <?php } ?> 
                    </li>

                </ul>
            </div>

                        <div class="w-4/5 bg-[#c67b17] text-white cursor-pointer overflow-y-hidden h-[50px] transition-all tab_box mb-5 rounded-md shadow-md">
                <div class="h-[50px] flex items-center font-bold text-xl ml-4">Fuel Consumption</div>
                <ul class=" h-full flex flex-col bg-white text-black rounded-b-md">
                    <li class="h-[calc(100%-50px)] flex flex-col justify-between gap-2">

                        <?php
                        foreach ($fuelConsumptionDetails as $outerKey => $outerValue) { ?>

                        
                        <ul class="p-2">
                        <!-- Format the outer key to a readable label -->
                        <h4 class="font-bold text-xl underline mb-1"><?php echo format_label($outerKey); ?>:</h4>
                            <?php
                            foreach ($outerValue as $innerKey => $innerValue) { ?>
                                <!-- Format the inner key to a readable label and display the value -->
                                <li class="mb-1 pl-2"> <span class="font-semibold"><?php echo format_label($innerKey); ?>:</span> <?php echo $innerValue; ?></li>
                                
                                
                           <?php } ?>
                        </ul>
                       <?php } ?> 
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
    
</div>

<?php get_footer(); ?>