<?php
if( !function_exists('init_theme') ):
  function init_theme(){
    //サムネ追加
    add_theme_support( 'post-thumbnails' );
    //custom logo設定
    add_theme_support( 'custom-logo', array(
      'height'      => 52,
      'width'       => 158,
      'flex-width' => true,
      'flex-height' => true
    ) );
    //メニュー
    add_theme_support('register_nav_menus' );
    add_filter('the_content', function($content) {
      global $post;
      $post_type = get_post_type( $post->ID );
      if (!in_array($post_type, array('post'))) {
          remove_filter('the_content', 'wpautop');
          remove_filter('the_excerpt', 'wpautop');
      }
      return $content;
  }, 9);
  }

endif;
register_nav_menu( 'header-navigation', 'Header Navigation' );

add_action( 'after_setup_theme', 'init_theme' );
include 'lib/function-asset.php';
include 'lib/function-customPost.php';
include 'lib/function-disabled-emoji.php';
include 'lib/function-pagination.php';
include 'lib/function-security.php';
include 'lib/function-shortcode.php';

?>
