<?
$logger = new DRLog\DRLogger("loop-single");
//$logger->debug("single loop running");
if ( have_posts() ) :
    while (have_posts() ) : the_post(); 
    ?><section class='posts content single'><?
    get_template_part('template-parts/content/content','post');
    get_template_part('template-parts/content/content','comments');

    ?></section><?
    endwhile;
else :
    echo '<p>There are no posts!</p>';

endif;
?>