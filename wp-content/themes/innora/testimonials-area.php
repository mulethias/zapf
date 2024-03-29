<section class="roberto-testimonials-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">

          <?php  $people_say = get_field('testimonial_image');?>
                <div class="col-12 col-md-6">
                    <div class="testimonial-thumbnail owl-carousel mb-100">
                        <img src="<?php echo $people_say['testimonial_image_one']?>" alt="">
                        <img src="<?php echo $people_say['testimonial_image_two']?>" alt="">
                        <img src="<?php echo $people_say['testimonial_image_three']?>" alt="">
                        <img src="<?php echo $people_say['testimonial_image_four']?>" alt="">
                       
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <h6><?php echo $info['testimonials'];?></h6>
                        <h2><?php echo $info['testimonial_title'];?></h2>
                    </div>
                    <!-- Testimonial Slide -->
                    <div class="testimonial-slides owl-carousel mb-100">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <?php echo $info['testimonial_body'];?>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div>
                                <h6><?php echo $info['testimonial_post_position'];?><span><?php echo $info['testimonial_post_name'];?></span></h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5><?php echo $info['testimonial_body'];?></h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div> 
                         <h6><?php echo $info['testimonial_post_position'];?>
                         <span><?php echo $info['testimonial_post_name'];?></span></h6>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5><?php echo $info['testimonial_body'];?></h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div> 

                              <h6><?php echo $info['testimonial_post_position'];?>
                              <span><?php echo $info['testimonial_post_name'];?></span></h6>
                            </div>
                        </div>

                            <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <h5><?php echo $info['testimonial_body'];?></h5>
                            <div class="rating-title">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                </div> 

                              <h6><?php echo $info['testimonial_post_position'];?>
                              <span><?php echo $info['testimonial_post_name'];?></span></h6>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>