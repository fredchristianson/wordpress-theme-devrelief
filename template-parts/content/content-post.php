<?

$logger = new DRLog\DRLogger("content-post");


$categories = get_the_category();
$is_draft = false;
$is_idea = false;
$is_in_progress = false;
$cat_class = '';
foreach($categories as $category){
    //$logger->debug("category: ".$category->name);
    if ($category->name == 'Draft') {
        $is_draft = true;
        $cat_class = $cat_class.' draft';
    }
    if ($category->name == 'Idea') {
        $is_idea = true;
        $cat_class = $cat_class.' idea';
    }
    if ($category->name == 'In Progress') {
        $is_idea = true;
        $cat_class = $cat_class.' in-progress';
    }
}


?>
<article class="post <?echo $cat_class ?>"><?
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
            ?>
             
                    <span class='tag tag-<?echo trim(str_replace(array(':',' ',';','.','?','\r','\n','\t'),'-',strtolower($tag->name))," \n\r\t\v\0;?,.?;:-")?>'>
                    <a href='<?echo get_tag_link($tag)?>'><?
                           echo $tag->name
                    ?></a></span><?
        }
    }
    ?></span><?

    $categories = get_the_category();
    ?><span class='categories'><?
    if ($categories) {
        foreach($categories as $category) {
            ?>
            
            <span class='category category-<?echo  trim(str_replace(array(':',' ',';','.','?','\r','\n','\t'),'-',strtolower($category->name))," \n\r\t\v\0;?,.?;:-")?>'>
               <a href='<?echo get_category_link($category)?>'>
            <?echo $category->name;
                
            ?>
            </span></a><?
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
        if (is_singular()) {
            //$logger->debug("show the_content");

            the_content();
        } else {
            //$logger->debug("show the_excerpt");
            the_excerpt();
            ?><a href='<?the_permalink()?>'>read more</a><?
        }
    ?></section><?
?></article><?