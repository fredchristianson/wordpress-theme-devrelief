<?php

date_default_timezone_set( 'America/New_York' );
get_header();
?>
<section id="dr-main"><?
	if( is_front_page() ) {
		get_template_part( 'loop', 'home' );
	} else if ( is_singular() ) {
		get_template_part( 'loop', 'single' );
	} else {
		get_template_part( 'loop' );
	}
		
	get_template_part( 'template-parts/sidebar/sidebar', 'primary' ); 
	get_template_part( 'template-parts/sidebar/sidebar', 'secondary' ); 


?></section> <!-- #dr-main' --><?

get_footer();

?>