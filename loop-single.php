<?
if ( have_posts() ) :
    while (have_posts() ) : the_post(); 
        get_template_part('template-parts/content/content','post');
        get_template_part('template-parts/content/content','comments');
    endwhile;
else :
    echo '<p>There are no posts!</p>';

endif;
?>