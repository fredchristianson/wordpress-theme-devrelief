<?
if (comments_open()){
    $comment_count = get_comments_number();

    if ($comment_count >0) {
        ?><div class='comments-container'>
            <h1 class='comments'>Comments (<?echo $comment_count?>)</h1><?
    } else {
        ?><div class='comments-container empty'><?
    }
    comments_template();
    ?></div><?


}
?>