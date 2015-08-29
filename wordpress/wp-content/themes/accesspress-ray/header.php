<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package AccessPress Ray
 */
?><!DOCTYPE html> 
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalabe=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
global $accesspress_ray_options;
$accesspress_ray_settings = get_option( 'accesspress_ray_options', $accesspress_ray_options );
?>
<div id="page" class="site">
<header id="masthead" class="site-header">
    <div id="top-header">
		<div class="ak-container">

			<div class="header-wrap clearfix <?php do_action( 'accesspress_ray_logo_alignment' ); ?>">
				<div class="site-branding main-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">				
					<?php if ( get_header_image() ) { ?>
						<img src="<?php header_image(); ?>" alt="<?php bloginfo('name') ?>">
					<?php }else{ ?>
						<h1 class="site-title"><?php echo bloginfo('title'); ?></h1>
						<div class="tagline site-description"><?php echo bloginfo('description'); ?></div>
					<?php } ?>		
					</a>		
				</div><!-- .site-branding -->        		

				<nav id="site-navigation" class="main-navigation">
					<h1 class="menu-toggle"><?php _e( 'Menu', 'accesspress_ray' ); ?></h1>

						<?php 
						wp_nav_menu( array( 
						'theme_location' => 'primary' , 
						'container_class' => 'menu',
						'items_wrap'      => '<ul class="clearfix" id="%1$s">%3$s</ul>',
						) ); 

						if($accesspress_ray_settings['show_search'] == 0){ ?>
						<div class="search-icon">
						<i class="fa fa-search"></i>
						<div class="ak-search">
							<?php get_search_form(); ?>
						</div>
						</div>
						<?php } ?>

				</nav><!-- #site-navigation -->
			</div><!-- .header-wrap -->

		</div><!-- .ak-container -->
  </div><!-- #top-header -->
</header><!-- #masthead -->

<section id="slider-banner">	
	<div class="slider-wrap">
		<?php 
		if(is_home() || is_front_page() ){
			do_action( 'accesspress_ray_bxslider' ); 
		} ?>
	</div>
</section><!-- #slider-banner -->

	
<?php
if((is_home() || is_front_page()) && 'page' == get_option( 'show_on_front' )){	
	$accesspress_ray_content_id = "content";	
}elseif(is_home() || is_front_page() ){
	$accesspress_ray_content_id = "home-content";
}else{
	$accesspress_ray_content_id ="content";
} ?>

<div id="<?php echo $accesspress_ray_content_id; ?>" class="site-content">
