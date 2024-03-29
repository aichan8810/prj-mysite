<?php
/* ---------- カスタム投稿の追加 ---------- */
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( // カスタム投稿タイプの追加関数
    'works', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => '制作実績', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions', // リビジョンの保存
        'category'
      ),
    )
  );
  register_taxonomy(
		'tag',
		'works',
		array(
			'label' => '実績カテゴリ',
			'rewrite' => array( 'slug' => 'works/works_cat' ),
			'hierarchical' => false,
		)
	);
  register_post_type( // カスタム投稿タイプの追加関数
    'news', //カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => 'お知らせ', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'show_in_rest' => true, // Gutenbergの有効化
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions', // リビジョンの保存
      ),
    )
  );
}

?>
