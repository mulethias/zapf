<!-- Call To Action Area Start -->
<section class="roberto-cta-area">
        <div class="container">
        <?php  $contact = get_field('about_images_front');?>
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(<?php echo $contact['contact_us_image']?>)">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50 text-color white">
                        <?php echo $contact['contact_us_message']?>
                            
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="#" class="btn roberto-btn mb-50"><?php echo $contact['contact_us_button']?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->