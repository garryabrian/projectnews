<?php

/* sets predefined Post Thumbnail dimensions */
if ( function_exists( 'add_theme_support' ) ) {
   add_theme_support( 'post-thumbnails' );
   
   //blog page template
	add_image_size( 'ptentry-thumb', 184, 184, true );
	//gallery page template
	add_image_size( 'ptgallery-thumb', 207, 136, true );
      
   //featured image size
   add_image_size( 'featured-thumb', 249, 158, true );
   add_image_size( 'featured-small', 104, 104, true );
      
   //recent category image size
   add_image_size( 'recentcat-thumb', 279, 105, true );
   
   //entry image size
   add_image_size( 'custom-thumb', 238, 238, true );
   add_image_size( 'custom-thumb2', 238, 96, true );
      
   //small image size
   add_image_size( 'small-thumb', 59, 59, true );
   
};
/* --------------------------------------------- */

?>