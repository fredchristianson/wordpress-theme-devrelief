<?

$cat_Idea_ID = get_cat_ID('Idea');
$cat_Draft_ID = get_cat_ID('Draft');

$args = array(
    'cat' => array(-$cat_Draft_ID, -$cat_Idea_ID),
    'order_by' => 'date',
    'order'=>'DES'
);

$query = new WP_Query( $args); 
if ( $query->have_posts() ) :
    while ($query->have_posts() ) : $query->the_post(); 
        ?><article class="post"><?
            ?><header><?
            if (!is_front_page()) {
                ?><h2 class='title'><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2><?
            }
            ?><span class='posted_at'><?
                ?><span class='date'><?
                    the_time('F d, Y');
                ?></span><span class='time'><?
                    the_time();
                ?></span><?
            ?></span><?
            $tags = get_the_tags();
            ?><span class='tags'><?
            if ($tags) {
                foreach($tags as $tag) {
                    ?><span><? 
                      echo $tag->name.' '
                    ?></span><?
                }
            }
            ?></span><?

            $categories = get_the_category();
            ?><span class='categories'><?
            if ($categories) {
                foreach($categories as $category) {
                    ?><span><? 
                      echo $category->name.' '
                    ?></span><?
                }
            }
            ?></span><?

            ?><span class='thumbnail'><?
                if (has_post_thumbnail()){
                    the_post_thumbnail('thumbnail');
                }
            ?></span><?
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