<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Vitality
 * @since Vitality 1.0
 */
get_header();

if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;

get_footer(); 
?>