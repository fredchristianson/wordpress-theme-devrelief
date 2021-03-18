<article class="post"><?
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
                echo $category->name.' ('.$category->term_id.') '
            ?></span><?
        }
    }
    ?></span><?

    ?><span class='thumbnail'><?
        if (has_post_thumbnail()){
            the_post_thumbnail('thumbnail');
        } else {
            ?>
            <span class='default-thumbnail'>
                <img src="<?php bloginfo('template_directory'); ?>/images/default-post-image.jpg" class='attachment-thumbnail size-thumbnail wp-post-image' alt="<?php the_title(); ?>" />
            </span>
            <?
        }
    ?></span><?
    ?></header><?
    ?><section class='content'><?
        the_content()
    ?></section><?
?></article><?