<?
if ( have_posts() ) :
    while (have_posts() ) : the_post(); 
        ?><article class="post"><?
            ?><header><?
            if (!is_front_page()) {
                ?><h2><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2><?
            }
            if (has_post_thumbnail()){
                the_post_thumbnail('thumbnail');
            }
            ?></header><?
            ?><section class='content'><?
                the_content()
            ?></section><?
        ?></article><?
    endwhile;
else :
    echo '<p>There are no posts!</p>';

endif;
?>