<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;700&display=swap" rel="stylesheet">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
 
<body <?php body_class(); ?>>
<div class='dr-page'>
 
<header class="site-header">
	<?php if ( has_custom_logo() ) { ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<? } else { ?>
		<div class="site-logo"><img width="200" height="200" src="<?php bloginfo('template_directory'); ?>/images/dr-simple-blue.png" class="custom-logo"></div>

	<?php } ?>
	<h1 class='site-title' ><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<h4 class='site-tagline'><?php bloginfo( 'description' ); ?></h4>
    <?php if ( has_nav_menu( 'menu-primary' ) ) : ?>
		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-primary',
					'menu_class'     => 'main-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	<?php endif; ?>
	<div class='social-widgets'>
		<?php get_template_part( 'template-parts/header/header', 'widgets' ); ?> 
	</div>
	<div class='user'>
		<?php get_template_part( 'template-parts/header/header', 'user' ); ?> 
	</div>
</header>