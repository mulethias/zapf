<?php

   $post_args = array(
                'post_type'         => 'post',
                'status'         => 'publish',
                'meta_key'         => 'property',
 
);
         
    $posts     =  get_posts( $post_args);



    
?>




<section class="roberto-testimonials-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-md-6">
                    <div class="testimonial-thumbnail owl-carousel mb-100">

                           <?php $count = 0; while($count <= count($posts)):  
                    $row =  get_field('property',$posts[$count++]->ID);   
                   $photo = $row['photo'];
                    ?>
                        <img src="<?php echo $photo ?>" alt="">
                           <?php  endwhile; ?>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <!-- <h6>Our Property</h6> -->
                        <h2>Our Property</h2>
                    </div>
                    <!-- Testimonial Slide -->
                    <div class="testimonial-slides owl-carousel mb-100">

                  
                         <?php $count = 0; while($count <= count($posts)):  
                    $row =  get_field('property',$posts[$count++]->ID);   
                   $descrip = $row['description'];
                    ?>


                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide">
                            <?php echo $descrip;?>
                         
                        </div>
                           <?php  endwhile; ?>


                      

                    </div>
                </div>
            </div>
        </div>
    </section>