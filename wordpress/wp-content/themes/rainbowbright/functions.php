<?php
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; //リライトを有効に
        $args['has_archive'] = 'news' ;//スラッグを「ニュース」に
    }
    return $args;
    //argsを返す
}
add_filter(
    'register_post_type_args',//投稿タイプをフィルターする
    'post_has_archive',//post_has_archiveを実行
    10,//フィルターの優先順位
    2//引数の数
    )
?>
