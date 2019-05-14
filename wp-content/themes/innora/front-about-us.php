

<div class="container mt-100">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <!-- Section Heading -->
                    
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <?php  $info = get_field('main_information');?>
                        <h6><?php echo $info['about_us_front_page_title'];?></h6>
                        <h2><?php echo $info['about_us_front_page_heading'];?></h2>
                    </div>
                    <div class="about-us-content mb-100">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms"><?php echo $info['about_us_front_page_body'];?></h5>
                        <p class="wow fadeInUp" data-wow-delay="400ms"><?php echo $info['position'];?><span><?php echo $info['name_person_posting'];?></span></p>
                        
                       
                         </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                    <?php
    $about = get_field('about_images_front');?>


                        <div class="row no-gutters">
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="<?php echo $about['img_one']?>" alt="">
                                </div>
                                <div class="single-thumb">
                                    <img src="<?php echo $about['img_two']?>" alt="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-thumb">
                                    <img src="<?php echo $about['img_three']?>" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->