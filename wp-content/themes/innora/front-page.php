<?php  get_header();?>

<?php $hero = get_field('hero');?>
<?php include_once('sliders.php')?>

    <!-- Welcome Area Start -->
   





    <!-- Welcome Area End -->

    <!-- About Us Area Start -->
    <section class="roberto-about-area section-padding-100-0">
        <!-- Hotel Search Form Area -->
        <div class="hotel-search-form-area">
            <div class="container-fluid">
                <div class="hotel-search-form">
                    <form action="#" method="post">
                        <div class="row justify-content-between align-items-end">
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkIn">Check In</label>
                                <input type="date" class="form-control" id="checkIn" name="checkin-date">
                            </div>
                            <div class="col-6 col-md-2 col-lg-3">
                                <label for="checkOut">Check Out</label>
                                <input type="date" class="form-control" id="checkOut" name="checkout-date">
                            </div>
                            <div class="col-4 col-md-1">
                                <label for="room">Room</label>
                                <select name="room" id="room" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-1">
                                <label for="adults">Adult</label>
                                <select name="adults" id="adults" class="form-control">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                </select>
                            </div>
                            <div class="col-4 col-md-2 col-lg-1">
                                <label for="children">Children</label>
                                <select name="children" id="children" class="form-control">
                                    <option value="01">00</option>
                                    <option value="02">01</option>
                                    <option value="03">02</option>
                                    <option value="04">03</option>
                                    <option value="05">04</option>
                                    <option value="06">05</option>
                                    <option value="06">07</option>
                                    <option value="06">08</option>
                                    <option value="06">09</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="form-control btn roberto-btn w-100">Check Availability</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

       
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
    <div class="partner-area">
        <div class="container">
        <?php  $partner_logo = get_field('about_images_front');?>
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="<?php echo $partner_logo['partner_logo_one']?>" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="<?php echo $partner_logo['partner_logo_two']?>" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="<?php echo $partner_logo['partner_logo_three']?>" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="<?php echo $partner_logo['partner_logo_four']?>" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="<?php echo $partner_logo['partner_logo_five']?>" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->
<?php  get_footer();?>
