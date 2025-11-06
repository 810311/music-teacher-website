<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Rennie_Craigg
 */

get_header();
?>

	<main id="primary" class="site-main">
			
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'rennie-craigg-music-teacher' ); ?></h1>
			</header><!-- .page-header -->
			
		<section class="error-404 not-found">
			

			<div class="page-content">

			<div class="search-constrain">
				<h3><?php esc_html_e( 'It looks like nothing was found at this location...', 'rennie-craigg-music-teacher' ); ?></h2>
				<h4><?php esc_html_e( 'Maybe try a search or one of the links below ?', 'rennie-craigg-music-teacher' ); ?></h3>
					<?php
					get_search_form();
					?>
			</div>
					<div class="constrain">
						<?php
						the_widget( 'WP_Widget_Recent_Posts', array('title' => 'Posts', 'number' => 4));
						?>

						<div class="widget widget_categories">
							<h2 class="widget-title"><?php esc_html_e( 'Categories', 'rennie-craigg-music-teacher' ); ?></h2>
							<ul>
								<?php
								wp_list_categories(
									array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									)
								);
								?>
							</ul>
						</div><!-- .widget -->


					</div>	<!-- .constrain -->					

					

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
