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

 
               
              print('<br /> <br /><br /><br /><br /><br />:');

             var_dump( $posts    );
             var_dump(get_fields(352)     );
              print('<br /> <br /><br /><br /><br /><br />');
           

  
  


?>
















   
 
    <!-- Partner Area End -->
<?php  get_footer();?>
