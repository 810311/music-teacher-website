<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rennie_Craigg
 */

?>

	<footer id="colophon" class="site-footer">

    <?php dynamic_sidebar('footer-1');?>

    <?php dynamic_sidebar('footer-2');?>

    <?php dynamic_sidebar('footer-3');?> 

 	</footer> 



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
