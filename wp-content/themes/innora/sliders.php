<section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Welcome Slide -->
       
    <?php
    $sliders = get_field('slide_images');
    $count = 0;
    
    
    foreach($sliders as $link):
       if($link):
    ?>

<div class="single-welcome-slide bg-img bg-overlay" style="background-image: url(<?php echo $link ?>);" 
data-img-url="<?php echo $link ?>">
                <!-- Welcome Content -->
                <div class="welcome-content h-100">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <!-- Welcome Text -->
                            <div class="col-12">
                                <div class="welcome-text text-center">
                                    <h6 data-animation="fadeInLeft" data-delay="200ms"><?php echo $hero['small_title'];?></h6>
                                    <h2 data-animation="fadeInLeft" data-delay="500ms"><?php echo $hero['main_title'];?></h2>
                                    <a href="<?php echo $hero['link'];?>" class="btn roberto-btn btn-2" 
                                    data-animation="fadeInLeft" data-delay="800ms"><?php echo $hero['link_text'];?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





       <?php endif;  endforeach;?>

         
        

        

        </div>
    </section>