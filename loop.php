<?

$cat_Idea_ID = get_cat_ID('Idea');
$cat_Draft_ID = get_cat_ID('Draft');

/* $args = array(
    'xcat' => array(-$cat_Draft_ID, -$cat_Idea_ID),
    'order_by' => 'date',
    'order'=>'DES'
);

$queryArgs = $wp_query->query_vars;
if (!$queryArgs['cat']) {
    $queryArgs['cat'] = array(-$cat_Draft_ID, -$cat_Idea_ID);
}

$query = new WP_Query($queryArgs);
 */
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