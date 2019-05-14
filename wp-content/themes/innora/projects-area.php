<!-- Projects Area Start -->
<section class="roberto-project-area">

<?php  $room = get_field('carousel');?>
        <!-- Projects Slide -->
        <div class="projects-slides owl-carousel">

            <!-- Single Project Slide -->
            <div class="single-project-slide active bg-img" style="background-image: url(<?php echo $room['carousel_img_one']?>)">
 
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                    <?php echo $room['carousel_heading_one']?>
   
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                    <?php echo $room['carousel_message_one']?>
                    </div>
                    <a href="#" class="btn project-btn"><?php echo $room['carousel_button']?></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url(<?php echo $room['carousel_img_two']?>)">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                    <?php echo $room['carousel_heading_two']?>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                    <?php echo $room['carousel_message_two']?>
                    </div>
                    <a href="#" class="btn project-btn"><?php echo $room['carousel_button']?></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url(<?php echo $room['carousel_img_three']?>)">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                    <?php echo $room['carousel_heading_three']?>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                    <?php echo $room['carousel_message_three']?>
                    </div>
                    <a href="#" class="btn project-btn"><?php echo $room['carousel_button']?> </a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url(<?php echo $room['carousel_img_four']?>)">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">
                    <?php echo $room['carousel_heading_four']?>
                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text"> 
                    <?php echo $room['carousel_message_four']?>
                    </div>
                    <a href="#" class="btn project-btn"><?php echo $room['carousel_button']?></a>
                </div>
            </div>

            <!-- Single Project Slide -->
            <div class="single-project-slide bg-img" style="background-image: url(<?php echo $room['carousel_img_five']?>)">
                <!-- Project Text -->
                <div class="project-content">
                    <div class="text">  
                    
                   <?php echo $room['carousel_heading_five']?>

                    </div>
                </div>
                <!-- Hover Effects -->
                <div class="hover-effects">
                    <div class="text">
                    <?php echo $room['carousel_message_five']?>
                    </div>
                    <a href="#" class="btn project-btn"><?php echo $room['carousel_button']?></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Projects Area End -->