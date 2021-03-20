<?
if ( have_posts() ) :
    while (have_posts() ) : the_post(); 
        ?><section class='posts content home single'><?
            the_content();
            get_template_part('template-parts/content/content','comments');

        ?></section><?
    endwhile;
else :
    echo '<p>There are no posts!</p>';

endif;
?>