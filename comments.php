<?

if (have_comments()) : ?>
    <ol class="post-comments">
        <?
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
            ));
        ?>
    </ol>
    <?
endif;

comment_form();
