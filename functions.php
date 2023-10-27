<?php
/**
 * テーマのセットアップ
 * 参考：https://wpdocs.osdn.jp/%E9%96%A2%E6%95%B0%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/add_theme_support#HTML5
 **/
function my_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
  add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
  add_theme_support('title-tag'); // タイトルタグ自動生成
  add_theme_support(
    'html5',
    array( //HTML5でマークアップ
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}

add_action('after_setup_theme', 'my_setup');

function post_has_archive($args, $post_type){
    if('post'== $post_type){
      $args['rewrite']=true;
      $args ["label"] = '過去の投稿'; /*「投稿」のラベル名 */
      $args['has_archive']='archive'; /* アーカイブにつけるスラッグ名 */
    }
    return $args;
  }
  
  add_filter('register_post_type_args', 'post_has_archive', 10, 2);
  
  /*パーマリンクで変更の保存を忘れずに*/

?>
