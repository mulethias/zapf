<?php  get_header();

      

?>





<?php $hero = get_field('hero');?>
<?php include_once('sliders.php')?>

    <!-- Welcome Area Start -->

    <!-- Welcome Area End -->

    <!-- About Us Area Start -->





       
        <?php 
        include_once('FilterCard.php')
       ?>
       
        <?php 
        include_once('front-about-us.php')
       ?>
       <?php include_once('team.php')?> 
       <?php include_once('cottages.php')?>
       <?php include_once('property.php')?>

    <!-- Service Area Start -->
    <div class="roberto-service-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-content d-flex align-items-center justify-content-between">
                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="100ms">
                            <img src="<?php bloginfo('template_url');?>/img/core-img/icon-1.png" alt="">
                            <h5>Transportion</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <img src="<?php bloginfo('template_url');?>/img/core-img/icon-2.png" alt="">
                            <h5>Reiseservice</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="500ms">
                            <img src="<?php bloginfo('template_url');?>/img/core-img/icon-3.png" alt="">
                            <h5>Spa Relaxtion</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="700ms">
                            <img src="<?php bloginfo('template_url');?>/img/core-img/icon-4.png" alt="">
                            <h5>Restaurant</h5>
                        </div>

                        <!-- Single Service Area -->
                        <div class="single-service--area mb-100 wow fadeInUp" data-wow-delay="900ms">
                            <img src="<?php bloginfo('template_url');?>/img/core-img/icon-1.png" alt="">
                            <h5>Bar &amp; Drink</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Area End -->
    <?php 
        include_once('carousel-area.php')
       ?>
    

    <!-- Testimonials Area Start -->
    <?php 
        include_once('testimonials-area.php')
       ?>
    <!-- Testimonials Area End -->

    <?php 
        include_once('projects-area.php')
       ?>

    <!-- Blog Area Start -->
    <?php 
        include_once('event-area.php')
       ?>
    <!-- Blog Area End -->

    
    <?php 
        include_once('contact-area.php')
       ?>
    <!-- Partner Area Start -->
    <?php 
        include_once('partner-area.php')
       ?>
    <!-- Partner Area End -->
<?php  get_footer();?>
