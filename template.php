<?php

// Any type of loop statment should be foreach / for / while etc...
// Wordpress example
// www.loeion.com

$date_group = '';

while ($query->have_posts()):
    $query->the_post();
		$post_id 		  = get_the_ID();
    $start_date 	= get_post_meta( $post_id , 'event_date', true );
    
    $post_date =  date('Ymd', strtotime($start_date));

	        // Check post date differs from the current date [loop date]
	        if ( $post_date != $date_group ) {
          
            //Main content here
            
             $date_group = $post_date;
          
          } else {
          
            //Child data of same date goes here
          }
          
  endwhile;
		  

