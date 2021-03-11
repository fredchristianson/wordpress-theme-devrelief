<?php

get_header();
?>
<section id="dr-main">
	<div class='posts'><?
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
				?><article class="post"><?
					if (!is_front_page()) {
						?><h2><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2><?
					}
					the_content()
				?></article><?
			endwhile;
		
		else :
			echo '<p>There are no posts!</p>';
		
		endif;
	?></div><?
	get_template_part( 'template/sidebar/sidebar', 'primary' ); 
	get_template_part( 'template/sidebar/sidebar', 'secondary' ); 


?></section> <!-- #dr-main' --><?

get_footer();

?>