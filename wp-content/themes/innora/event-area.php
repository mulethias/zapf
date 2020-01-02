<section class="roberto-blog-area section-padding-100-0">

        <div class="container">

        <?php  $event = get_field('events');?>
            <div class="row">
                <!-- Section Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="100ms">
                        <h6>Events</h6> 
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="300ms">
                        <a href="#" class="post-thumbnail"><img src="<?php echo $event['image_one']?>" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date"><?php echo $event['event_one_date']?></a>
                            <a href="#" class="post-catagory"><?php echo $event['post_catagory']?></a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title"><?php echo $event['post_title']?></a>
                        <p><?php echo $event['event_message_one']?></p>
                         
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <a href="#" class="post-thumbnail"><img src="<?php echo $event['image_two']?>" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date"><?php echo $event['event_two_date']?></a>
                            <a href="#" class="post-catagory"><?php echo $event['post_catagory_one']?></a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title"><?php echo $event['post_title_one']?></a>
                        <?php echo $event['event_message_two']?>
                         
                    </div>
                </div>

                <!-- Single Post Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post-area mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <a href="#" class="post-thumbnail"><img src="<?php echo $event['image_three']?>" alt=""></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <a href="#" class="post-date"><?php echo $event['event_three_date']?></a>
                            <a href="#" class="post-catagory"><?php echo $event['post_catagory_two']?></a>
                        </div>
                        <!-- Post Title -->
                        <a href="#" class="post-title"><?php echo $event['post_title_two']?></a>
                        <p><?php echo $event['event_message_three']?></p>
                         
                    </div>
                </div>

            </div>
        </div>
    </section>