<?php
/**
 * 静的リソースの読み込み
 */
// スタイルの省略可能属性を削除
add_filter('style_loader_tag', function($src) {
    return str_replace("type='text/css'", '', $src);
});
// リソースの読み込み
add_action('wp_enqueue_scripts', function() {
    // wp標準のjqueryを差し替える
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), null);
    // フォント
    wp_enqueue_style('fontawesome',  '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), null);
    // wp_enqueue_style('notosans',  '//fonts.googleapis.com/earlyaccess/notosansjp.css', array(), null);
    wp_enqueue_style('style',  get_template_directory_uri(). '/style.css', array(), null);
    // JSの読み込み
    // hoge： 拡張子を除いた名称  hoge.js: CSSディレクトリ内のファイル名
    $js_list = array(
        //'hoge' => 'hoge.js',
        'header' => 'header.js',
    );
    foreach($js_list as $key => $file) {
        wp_enqueue_script("js-{$key}",  get_template_directory_uri(). "/js/{$file}", array(), null);
    }

    // CSSの読み込み
    // hoge： 拡張子を除いた名称  hoge.css: CSSディレクトリ内のファイル名
    $css = array(
        //'hoge' => 'hoge.css',
        'home' => 'home.css',
        'single' => 'single.css',
        'archive' => 'archive.css',
        'page' => 'page.css',
        'archive-news' => 'archive-news.css',
        'single-news' => 'single-news.css',
        'single-works' => 'single-works.css'
    );
    foreach($css as $key => $file) {
        wp_enqueue_style("css-{$key}",  get_template_directory_uri(). "/css/{$file}", array(), null);
    }
}, 1);
