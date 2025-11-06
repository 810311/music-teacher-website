<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rennie_Craigg
 */

get_header();
?>

	<main id="primary" class="site-main">
  
					
          <h1 class="page-title">
		          <?php echo get_the_title( get_option('page_for_posts', true) ); ?>
	        </h1>
          
<section>
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single');

			// the_post_navigation(
			// 	array(
			// 		'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'rennie-craigg-music-teacher' ) . '</span> <span class="nav-title">%title</span>',
			// 		'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'rennie-craigg-music-teacher' ) . '</span> <span class="nav-title">%title</span>',
			// 	)
			// );

			
		endwhile; //End of the loop
		?>


    </section>
	</main><!-- #main -->

<?php

get_footer();
