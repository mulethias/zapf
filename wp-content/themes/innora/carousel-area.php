<!-- Our Room Area Start -->
<section class="roberto-rooms-area">
        <div class="rooms-slides owl-carousel">

        <?php  $preview_room = get_field('room_preview');?>
            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(<?php echo $preview_room['premium']?>)"></div>
                

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms"><?php echo $preview_room['room_one_preview_title']?></h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms"><?php echo $preview_room['price']?><span></span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                        <li><span><i class="fa fa-check"></i> <?php echo $preview_room['premium_room_detail_one']?></span> <span></span></li> 
                        <li><span><i class="fa fa-check"></i> <?php echo $preview_room['premium_room_detail_two']?></span> <span></span></li> 
                        <li><span><i class="fa fa-check"></i> <?php echo $preview_room['premium_room_detail_three']?></span> <span></span></li> 
                        <li><span><i class="fa fa-check"></i> <?php echo $preview_room['premium_room_detail_four']?></span> <span></span></li> 
                        <li><span><i class="fa fa-check"></i> <?php echo $preview_room['premium_room_detail_five']?></span> <span></span></li> 
                    </ul>
                    <a href="#" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>

            <!-- Single Room Slide -->
            <div class="single-room-slide d-flex align-items-center">
                <!-- Thumbnail -->
                <div class="room-thumbnail h-100 bg-img" style="background-image: url(<?php echo $preview_room['best']?>)"></div>

                <!-- Content -->
                <div class="room-content">
                    <h2 data-animation="fadeInUp" data-delay="100ms"><?php echo $preview_room['room_one_preview_title_two']?></h2>
                    <h3 data-animation="fadeInUp" data-delay="300ms"><?php echo $preview_room['price_two']?><span></span></h3>
                    <ul class="room-feature" data-animation="fadeInUp" data-delay="500ms">
                    <li><span><i class="fa fa-check"></i> <?php echo $preview_room['room_detail_one']?></span> <span></span></li> 
                        <li><span><i class="fa fa-check"></i> <?php echo $preview_room['room_detail_two']?></span> <span></span></li> 
                        <li><span><i class="fa fa-check"></i> <?php echo $preview_room['room_detail_three']?></span> <span></span></li> 
                        <li><span><i class="fa fa-check"></i> <?php echo $preview_room['room_detail_four']?></span> <span></span></li> 
                        <li><span><i class="fa fa-check"></i> <?php echo $preview_room['room_detail_five']?></span> <span></span></li> 
                       
                    </ul>
                    <a href="#" class="btn roberto-btn mt-30" data-animation="fadeInUp" data-delay="700ms">View Details</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Room Area End -->