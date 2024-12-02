<?php 

add_theme_support( 'title-tag' );
function wp_document_title_separator( $separator ) {
    $separator = '|';
    return $separator;
  }
  add_filter( 'document_title_separator', 'wp_document_title_separator' );
  
//スタイルシートの有効化
function twpp_enqueue_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_styles' );

//管理バーの削除.
add_filter( 'show_admin_bar', '__return_false' );

//絵文字入力の削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');


function base_url(){
  return '/fukami_ganka/';
}