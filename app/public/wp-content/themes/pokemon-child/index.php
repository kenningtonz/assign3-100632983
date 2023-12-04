<?php


 get_header();

 if(has_content()){
     the_content();
 }

 get_template_part( 'posts-query' );

get_footer();
?>
