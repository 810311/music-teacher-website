<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rennie_Craigg
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rennie-craigg-music-teacher' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>

			<h1 class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        
        <?php 
        /*Site title - wrap second word in a <span> to style differently
        https://stackoverflow.com/questions/44055537/how-to-separate-the-values-inside-bloginfo-name-in-wordpress/44056693#44056693*/
          $bloginfo_name = get_bloginfo('name'); 
          $bloginfo_name = str_replace('a', '<span>Craigg</span>', $bloginfo_name );
          echo $bloginfo_name;
        ?>
          </a>
        </h1>
				<?php
			else :
				?>
				<p class="site-title">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          
        <?php 
          $bloginfo_name = get_bloginfo('name'); 
          $bloginfo_name = str_replace('Craigg', '<span>Craigg</span>', $bloginfo_name );
          echo $bloginfo_name;
        ?>
          </a>
        </p>
				<?php
			endif;
			$rennie_craigg_music_teacher_description = get_bloginfo( 'description', 'display' );
			if ( $rennie_craigg_music_teacher_description || is_customize_preview() ) :
				?>
        <p class="site-description"><?php echo $rennie_craigg_music_teacher_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
        </p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">

    <input id="menu-toggle" type="checkbox" />
    <label onclick="myFunction()" class='menu-button-container' for="menu-toggle">
      <span class='menu-button'></span>
    </label>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
          			'container'      => false 
				)
			);
			?>
		</nav><!-- #site-navigation -->

    
    
	</header><!-- #masthead -->
 
