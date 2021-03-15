<div class='devrelief-settings'>
    <h1>Developer Relief Theme Settings</h1>
    <? if (!empty($_POST)) {
        $ignore_values = $_REQUEST['ignore-category'];
        update_option('ignore_categories',$ignore_values);
    } else {
        $ignore_values = get_option('ignore_categories');
    }
    if (! $ignore_values) {
        $ignore_values = array();
    }
    ?>
    <form method="post" >
        <?php
            settings_fields("content_filter_section");
            do_settings_sections("dr_content_filter");  
            $categories = get_categories(array('hide_empty'=>false));    
            ?><ul class='categories'><?
            foreach($categories as $category) {
                if ($category->parent == 0){
                    ?><li><?
                    ?><label><input type='checkbox' <? echo (in_array($category->term_id,$ignore_values) ?  'checked' :  '')?> name='ignore-category[]' value='<?echo $category->term_id?>'/><?echo $category->name . ' ('.$category->term_id.')'?></label><?
                    $children = array_filter($categories,function($child) use($category) {
                        return $child->parent == $category->term_id;
                    });
                    if (count($children)>0) {
                        ?><ul><?
                        foreach($children as $child) {
                            ?><li><?
                            ?><label><input type='checkbox' name='ignore-category[]'  <? echo (in_array($child->term_id,$ignore_values) ?  'checked' :  '')?> value='<?echo $child->term_id?>'/><?echo $child->name . ' ('.$child->term_id.')'?></label><?
                            ?></li><?
                        }
                        ?></ul><?
                    } 
                    ?></li><?
                }
            }
            ?></ul><?
            submit_button(); 
        ?>          
    </form>
</div>