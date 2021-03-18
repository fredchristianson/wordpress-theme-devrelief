<?
if ( have_posts() ) :
    while (have_posts() ) : the_post(); 
        get_template_part('template/content/content','post');
        get_template_part('template/content/content','comments');
    endwhile;
else :
    echo '<p>There are no posts!</p>';

endif;
?>