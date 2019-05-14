<?php

   $post_args = array(
                'post_type'         => 'post',
                'status'         => 'publish',
                'meta_key'         => 'cottages',
 
);
         
    $posts     =  get_posts( $post_args);
?>




<section class="roberto-blog-area section-padding-100-0">

        <div class="container">

        <?php  $event = get_field('events');?>
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h1>Cottages</h1> 
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Post Area -->


                <?php $count = 0; while($count <= count($posts)):  
                    $row =  get_field('cottages',$posts[$count++]->ID);   
                   $photo = $row['photo'];
                   $name = $row['name'];
                   $descrip = $row['description'];
                   $price = $row['price'];
                    ?>


                        <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="post-thumbnail"><img src="<?php echo $photo?>" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-catagory"><?php echo $name?></a>
                            <a href="#" class="post-date"><?php echo $price?></a>
                        </div>
                        <!-- Post Title -->
                        <p><?php echo $descrip?></p> 
                    </div>
                </div>
                    

<?php  endwhile;?>
             
             
        

            </div>
        </div>
    </section>