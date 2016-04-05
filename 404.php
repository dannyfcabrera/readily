<?php
/**
 * The template for displaying all pages.
 *
 *
 * @package Readily
 */

get_header(); ?>

  	<main itemprop="mainContentOfPage" role id="main" role="main">

  		<?php
    
        get_template_part( 'template-parts/content', 'none' );

  		?>

		</main><!-- #main -->

<?php
  
if ( ! (is_front_page() || is_home()) ) :
  get_sidebar();
endif;

get_footer();
