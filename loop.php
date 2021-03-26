<?
$logger = new DRLog\DRLogger("loop");
//$logger->debug("loop running");

if ( have_posts() ) :
    ?><section class='posts content multiple'><?
    while (have_posts() ) : the_post(); 
            get_template_part('template-parts/content/content','post');
    endwhile;
    ?></section><?
else :
    echo '<p>There are no posts!</p>';

endif;
?>