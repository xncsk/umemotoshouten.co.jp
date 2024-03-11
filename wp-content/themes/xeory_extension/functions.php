<?php

// ファンクション
require_once('lib/admin/init.php');
require_once('lib/admin/manual.php');
require_once('lib/functions/asset.php');
require_once('lib/functions/head.php');
// require_once('lib/functions/custom-header.php');
// require_once('lib/functions/custom-post.php');
require_once('lib/functions/bzb-functions.php');
require_once('lib/functions/setting.php');
require_once('lib/functions/custom-fields.php');
require_once('lib/functions/category-custom-fields.php');
require_once('lib/functions/widget.php');
require_once('lib/functions/postviews.php');
require_once('lib/admin/extension.php');
require_once('lib/functions/shortcodes.php');
require_once('lib/functions/social_btn.php');
require_once('lib/functions/show_avatar.php');
require_once('lib/functions/rss.php');
require_once('lib/functions/category-custom-fields-ex.php');

///author/**/をトップにリダイレクト
function disable_author_archive_query() {
	if( preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING']) ){
		wp_redirect( home_url() );
		exit;
	}
}
add_action('init', 'disable_author_archive_query');

//オリジナル画像サイズをmax w1024に
function otocon_resize_at_upload( $file ) {
	if ( $file['type'] == 'image/jpeg' OR $file['type'] == 'image/gif' OR $file['type'] == 'image/png') {
		$w = 1024;
		$h = 0;
		$image = wp_get_image_editor( $file['file'] );
		if ( ! is_wp_error( $image ) ){
			$size = getimagesize( $file['file'] );
			if ( $size[0] > $w || $size[1] > $h ){
				$image->resize( $w, $h, false );
				$final_image = $image->save( $file['file'] );
			}
		}
	}
	return $file;
}
add_action( 'wp_handle_upload', 'otocon_resize_at_upload' );

//画像回転修正
function my_photo_upload($file) { 
	if ($file['type'] == 'image/jpeg') { 
		$image = wp_get_image_editor($file['file']);
        // var_dump($image)
		if (!is_wp_error($image)) { 
			$exif = exif_read_data($file['file']); 
			$orientation = $exif['Orientation']; 
			if (!empty($orientation)) { 
				switch ($orientation) { 
					case 8: 
					$image->rotate(90); 
					break; 
					case 3: 
					$image->rotate(180); 
					break; 
					case 6: 
					$image->rotate(-90); 
					break; 
				} 
			} 
			$image->save($file['file']); 
		} 
	} 
	return $file; 
} 
add_action('wp_handle_upload', 'my_photo_upload');

//pタグ消す
remove_filter('the_excerpt', 'wpautop');
remove_filter('the_content', 'wpautop');

//ダッシュボードロゴ
function custom_login_logo() {
	?>
	<style type="text/css">
		#login h1 a {
			display: block;
			background-repeat: no-repeat;
			background-size: cover;
			background-image: url(/img/logo-yoko-posi.svg);
			width: 100%;
			height: 55px;
		}
	</style>
	<?php
}
add_action( 'login_head', 'custom_login_logo' );

//絵文字を消す
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles', 10 );
remove_action('wp_head', 'wp_generator');
//ユーザーがログインしたらマイページにリダイレクト
// add_filter( 'wpmem_login_redirect', 'my_login_redirect', 10, 2 );
// function my_login_redirect( $redirect_to, $user_id ) {
// 	return '/mypage/';
// }

//wp-includes/css/dist/block-library/style.min.cssを削除
function dequeue_plugins_style() {
	wp_dequeue_style('wp-block-library');
}
add_action( 'wp_enqueue_scripts', 'dequeue_plugins_style', 9999);

//WordPressのすべての画像自動生成を停止する
//下記を設定しても画像生成されてしまう場合はset_post_thumbnail_sizeでファイル全体検索してみるとよい
function disable_image_sizes($new_sizes) {
	// unset($new_sizes['thumbnail']);
	unset($new_sizes['medium']);
	unset($new_sizes['large']);
	unset($new_sizes['medium_large']);
	// unset($new_sizes['1536x1536']);
	// unset($new_sizes['2048x2048']);
	return $new_sizes;
}
add_filter('intermediate_image_sizes_advanced', 'disable_image_sizes');
add_filter('big_image_size_threshold', '__return_false');

// バリデーションメッセージ
function my_exam_validation_rule( $Validation, $data, $Data ) {
	$Validation->set_rule( 'name1', 'noEmpty', array( 'message' => '名字をご入力ください。' ) );
	$Validation->set_rule( 'name2', 'noEmpty', array( 'message' => 'お名前をご入力ください。' ) );
	$Validation->set_rule( 'year', 'noEmpty', array( 'message' => '生年を西暦でご入力ください' ));
	$Validation->set_rule( 'year', 'numeric', array( 'message' => '半角数字でご入力ください' ));
	$Validation->set_rule( 'zipcode', 'noEmpty', array( 'message' => '郵便番号をご入力ください' ));
	$Validation->set_rule( 'address', 'noEmpty', array( 'message' => '住所をご入力ください' ));
	$Validation->set_rule( 'email', 'noEmpty', array( 'message' => 'メールアドレスをご入力ください。' ) );
	$Validation->set_rule( 'email', 'mail', array( 'message' => '正しいメールアドレス形式でご入力ください。' ) );
	return $Validation;
}
add_filter( 'mwform_validation_mw-wp-form-20', 'my_exam_validation_rule', 10, 3 );


// RSSフィードのリンクを除去
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

//タイトルを必須に
function my_title_required() {
	?>
	<script type="text/javascript">
		jQuery(document).ready(function($){
			if('post' || 'page' == $('#post_type').val()){
				$("#post").submit(function(e){
					if('' == $('#title').val()) {
						alert('タイトルを入力してください。');
						$('#ajax-loading').css('visibility', 'hidden');
						$('#publish').removeClass('button-primary-disabled');
						$('#title').focus();
						return false;
					}
				});
			}
		});
	</script>
	<?php
}
add_action( 'admin_head-post-new.php', 'my_title_required' );


//パーマリンクからタクソノミー名を削除
// function my_custom_post_type_permalinks_set($termlink, $term, $taxonomy){
// 	return str_replace('/'.$taxonomy.'/', '/', $termlink);
// }
// add_filter('term_link', 'my_custom_post_type_permalinks_set',11,3);

//カスタムタクソノミーアーカイブ用のリライトルールを追加 ページ送り時もリライト
//★それぞれownersblogはカスタム投稿タイプ名、ownersblog-catはカスタムタクソノミー名を挿入

//↓親ターム一覧ページ
// add_rewrite_rule('hall/([^/]+)/?$', 'index.php?pref=$matches[1]', 'top');
// add_rewrite_rule('hall/([^/]+)/page/([0-9]+)/?$', 'index.php?pref=$matches[1]&paged=$matches[2]', 'top');
// add_rewrite_rule('partner/([^/]+)/?$', 'index.php?region=$matches[1]', 'top');
// add_rewrite_rule('partner/([^/]+)/page/([0-9]+)/?$', 'index.php?region=$matches[1]&paged=$matches[2]', 'top');
// add_rewrite_rule('funeral/([^/]+)/?$', 'index.php?area=$matches[1]', 'top');
// add_rewrite_rule('funeral/([^/]+)/page/([0-9]+)/?$', 'index.php?area=$matches[1]&paged=$matches[2]', 'top');
//↓子ターム一覧ページ

// add_rewrite_rule('funeral/([^/]+)/([^/]+)/?$', 'index.php?area=$matches[2]', 'top');
// add_rewrite_rule('funeral/([^/]+)/([^/]+)/page/([0-9]+)/?$', 'index.php?area=$matches[1]&paged=$matches[2]', 'top');

// global-styles-inline-cssとclassic-theme-styles-inline-cssを削除
add_action( 'wp_enqueue_scripts', 'remove_global_styles' );
function remove_global_styles(){
	wp_dequeue_style( 'global-styles' );
	wp_dequeue_style( 'classic-theme-styles' );
}
// ショートリンクURLの削除
remove_action('wp_head', 'wp_shortlink_wp_head');
//https://api.w.org/削除
remove_action('wp_head','rest_output_link_wp_head');
// rel="alternate" type="application/json+oembed削除
remove_action('wp_head','wp_oembed_add_discovery_links');
//wp-embed.min.jsの削除
// remove_action('wp_head','wp_oembed_add_host_js');
//rel="EditURI" type="application/rsd+xml"削除
remove_action( 'wp_head', 'rsd_link' );
//canonical削除
remove_action('wp_head', 'rel_canonical');