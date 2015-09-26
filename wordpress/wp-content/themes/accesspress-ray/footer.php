<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package AccessPress Ray
 */
?>
<?php 
global $post, $accesspress_ray_options;
$accesspress_ray_settings = get_option( 'accesspress_ray_options', $accesspress_ray_options );
?>
</div><!-- #content -->
<footer id="colophon">
	<div id="middle-footer" class="footer-menu">		
		<!-- <div class="ak-container"> -->
		<div class="logo-footer">
			<h4>INTRANET ESCOLA SENAI SUIÇO-BRASILEIRA PAULO ERNESTO TOLLE</h4>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'depth' => -1) ); 	?>
		<p class='rights'>2015 - INTRANET ESCOLA SENAI SUIÇO-BRASILEIRA PAULO ERNESTO TOLLE -  TODOS OS DIREITOS RESERVADOS</p>
		<!-- </div> -->
	</div>	
</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
