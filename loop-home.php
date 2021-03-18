<?
if ( have_posts() ) :
    while (have_posts() ) : the_post(); 
        ?><section class='content'><?
            the_content()
        ?></section><?
    endwhile;
else :
    echo '<p>There are no posts!</p>';

endif;
?>