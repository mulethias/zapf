<?php /* Template Name: FilterAvailableRooms */ ?>

<?php  get_header();?>
<?php



$args = [

    'adults'=>   array(
            'key'      => 'adults',
            'value'    => '7',
            'compare'  => '=',
        ),
        'children'=>  array(
            'key'      => 'children',
            'value'    => '7',
            'compare'  => '=',
        ),
    'check_in'=>    array(
            'key'      => 'check_in',
            'value'    => array(date('Y-m-d H:i:s',strtotime($_GET['check_in'])),
                                    date('Y-m-d H:i:s',strtotime($_GET['check_out']))),
            'compare'  => 'NOT BETWEEN',
             'type'		=> 'DATETIME'

    ),
     'check_in'=>    array(
            'key'      => 'check_out',
            'value'    => array(date('Y-m-d H:i:s',strtotime($_GET['check_in'])),
                                    date('Y-m-d H:i:s',strtotime($_GET['check_out']))),
            'compare'  => 'NOT BETWEEN',
             'type'		=> 'DATETIME'

    ),
    ];

    $filters = [];

    foreach ($args as $key => $value) {
            if($_GET[$key])
            array_unshift($filters,$value);
    }
    var_dump($filters);


         $post_args = array(
                'post_type'         => 'post',
                
                'status'         => 'publish',
               
   'meta_query'     => array(
        'relation' => 'AND',
           $filters
        )
);
         
    $posts     =  get_posts( $post_args);
?>

 <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Available Rooms Rooms</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Room</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">


 <?php $count = 0; while($count <= count($posts)):  
                    $post =  $posts[$count];   
                    $row =  get_fields($posts[$count++]->ID);   
                    // var_dump($post);
                   $photo = $row['image_1'];
                   $name = $row['name'];
                   $descrip = $post->post_content;
                   $price = $row['price'];
                    ?>


                    <!-- Single Room Area -->
                    <div class="single-room-area d-flex align-items-center mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Room Thumbnail -->
                        <div class="room-thumbnail">
                            <img src="<?php echo $photo ?>" alt="">
                        </div>
                        <!-- Room Content -->
                        <div class="room-content">
                            <h4><?php echo $post->post_title ?></h4>
                            <h4><?php echo $price ?></h4>
                            <?php echo $descrip ?>
                            <a href="#" class="btn view-detail-btn">View Details <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>

 <?php endwhile; ?>
                  

                    <!-- Pagination -->
                    <!-- <nav class="roberto-pagination wow fadeInUp mb-100" data-wow-delay="1000ms">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav> -->
                </div>

             
            </div>
        </div>
    </div>
    <!-- Rooms Area End -->

    <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/1.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Contact (+12) 345-678-9999 to book directly or for advice</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="#" class="btn roberto-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p1.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p2.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p3.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p4.png" alt=""></a>
                        <!-- Single Partner Logo -->
                        <a href="#" class="partner-logo"><img src="img/core-img/p5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->

    <!-- Footer Area Start -->
    <?php 
        include_once('footer.php')
       ?>