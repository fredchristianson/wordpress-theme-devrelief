<?php
 
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() , array(), time() , 'all' );

	// load js as module in html file
	//wp_enqueue_script( 'devrelief-javascript', get_theme_file_uri( '/js/devrelief.js' ), array(), time(), true );

}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function devrelief_setup() {

	register_nav_menus(
		array(
			'menu-primary' => __( 'Primary', 'devrelief' ),
			'footer' => __( 'Footer Menu', 'devrelief' )
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 200,
			'width'       => 200,
			'flex-width'  => false,
			'flex-height' => false,
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);

			// Add theme support for selective refresh for widgets.
			add_theme_support( 'customize-selective-refresh-widgets' );

			// Add support for Block Styles.
			add_theme_support( 'wp-block-styles' );
	
			// Add support for full and wide align images.
			add_theme_support( 'align-wide' );
	
			// Add support for editor styles.
			add_theme_support( 'editor-styles' );
	
			// Enqueue editor styles.
			add_editor_style( 'style-editor.css' );
	
			// Add custom editor font sizes.
			add_theme_support(
				'editor-font-sizes',
				array(
					array(
						'name'      => __( 'Small', 'devrelief' ),
						'shortName' => __( 'S', 'devrelief' ),
						'size'      => 19.5,
						'slug'      => 'small',
					),
					array(
						'name'      => __( 'Normal', 'devrelief' ),
						'shortName' => __( 'M', 'devrelief' ),
						'size'      => 22,
						'slug'      => 'normal',
					),
					array(
						'name'      => __( 'Large', 'devrelief' ),
						'shortName' => __( 'L', 'devrelief' ),
						'size'      => 36.5,
						'slug'      => 'large',
					),
					array(
						'name'      => __( 'Huge', 'devrelief' ),
						'shortName' => __( 'XL', 'devrelief' ),
						'size'      => 49.5,
						'slug'      => 'huge',
					),
				)
			);
	
				
			// Add support for responsive embedded content.
			add_theme_support( 'responsive-embeds' );
	
			// Add support for custom line height.
			add_theme_support( 'custom-line-height' );
}

add_action( 'after_setup_theme', 'devrelief_setup' );

function devrelief_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer Widgets', 'devrelief' ),
			'id'            => 'footer',
			'description'   => __( 'Add widgets here to appear in your footer.', 'devrelief' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Header Widgets', 'devrelief' ),
			'id'            => 'header',
			'description'   => __( 'Add widgets here to appear in your header.', 'devrelief' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Primary Sidebar', 'devrelief' ),
			'id'            => 'primary',
			'description'   => __( 'Add widgets here to appear in primary sidebar.', 'devrelief' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar( array(
        'name'          => __( 'Secondary Sidebar', 'devrelief' ),
        'id'            => 'secondary',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );



}
add_action( 'widgets_init', 'devrelief_widgets_init' );