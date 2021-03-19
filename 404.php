<?php

date_default_timezone_set( 'America/New_York' );
get_header();
?>
<section id="dr-main">
	<div class='posts'>
        <h1 class="page-title"><?php _e( 'Not Found', 'devrelief' ); ?></h1>
        <h2><?php _e( 'One of us should be embarrassed.  I\'ll check the logs to see if it\'s me', 'devrelief' ); ?></h2>

                <?php get_search_form(); ?>

	</div><?
	get_template_part( 'template-parts/sidebar/sidebar', 'primary' ); 
	get_template_part( 'template-parts/sidebar/sidebar', 'secondary' ); 


?></section> <!-- #dr-main' --><?

get_footer();

?>


