<?php /* Template Name: ProcessEmail */ ?>

<?php 

        if (isset($_POST['sender-name']) && isset($_POST['email']) && isset($_POST['message'])) {
            $name = $_POST['sender-name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

             $status =  wp_mail('booking@3sisterscottages.com', $name, $message);
           
                if ($status){
                   echo 'Thank you for contacting us. We will get back to you soon';
                
                }
             
        }

       ?>
   

      