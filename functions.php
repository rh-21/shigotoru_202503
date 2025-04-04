
<?php 

/*----------------------------------------------------------*/
/* 投稿アーカイブページの表示設定 */
/*----------------------------------------------------------*/

function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog'; //URLとして使いたい文字列
  }
  return $args;
}
add_theme_support('post-thumbnails');
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

//画像アップロード時の画質設定を変更する
add_filter('wp_editor_set_quality', function () {
  return 90;
});

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 

add_filter('acf/settings/remove_wp_meta_box', '__return_false');

?>