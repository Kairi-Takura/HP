<?php

// ヘッダー
add_action('init', 'add_header_post_type');
function add_header_post_type() {
    $params = array(
            'labels' => array(
                    'name' => 'ヘッダー',
                    'singular_name' => 'ヘッダー',
                    'add_new' => 'ヘッダー追加',
                    'add_new_item' => 'ヘッダーを新規追加',
                    'edit_item' => 'ヘッダー内容を編集する',
                    'new_item' => '新規サイト',
                    'all_items' => 'ヘッダー一覧',
                    'view_item' => 'ヘッダーの説明を見る',
                    'search_items' => '検索する',
                    'not_found' => 'ヘッダーが見つかりませんでした。',
                    'not_found_in_trash' => 'ゴミ箱内にヘッダーが見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'excerpt',
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
										'thumbnail', // アイキャッチ画像
            ),
    );
    register_post_type('header', $params);
}

// 中途採用職種一覧
add_action('init', 'add_recruit_mid_career_post_type');
function add_recruit_mid_career_post_type() {
    $params = array(
            'labels' => array(
                    'name' => '中途採用職種一覧',
                    'singular_name' => '中途採用職種一覧',
                    'add_new' => '中途採用職種一覧追加',
                    'add_new_item' => '中途採用職種一覧を新規追加',
                    'edit_item' => '中途採用職種一覧内容を編集する',
                    'new_item' => '新規サイト',
                    'all_items' => '中途採用職種一覧一覧',
                    'view_item' => '中途採用職種一覧の説明を見る',
                    'search_items' => '検索する',
                    'not_found' => '中途採用職種一覧が見つかりませんでした。',
                    'not_found_in_trash' => 'ゴミ箱内に中途採用職種一覧が見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'excerpt',
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
										'thumbnail', // アイキャッチ画像
            ),
    );
    register_post_type('recruit_mid_career', $params);
}

// advertisement
add_action('init', 'add_advertisement_post_type');
function add_advertisement_post_type() {
    $params = array(
            'labels' => array(
                    'name' => '広告',
                    'singular_name' => '広告',
                    'add_new' => '広告追加',
                    'add_new_item' => '広告を新規追加',
                    'edit_item' => '広告内容を編集する',
                    'new_item' => '新規サイト',
                    'all_items' => '広告一覧',
                    'view_item' => '広告の説明を見る',
                    'search_items' => '検索する',
                    'not_found' => '広告が見つかりませんでした。',
                    'not_found_in_trash' => 'ゴミ箱内に広告が見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
										'thumbnail', // アイキャッチ画像
            ),
    );
    register_post_type('advertisement', $params);
}

// privacy
add_action('init', 'add_privacy_post_type');
function add_privacy_post_type() {
    $params = array(
            'labels' => array(
                    'name' => 'プライバシーポリシー',
                    'singular_name' => 'プライバシーポリシー',
                    'add_new' => 'プライバシーポリシー追加',
                    'add_new_item' => 'プライバシーポリシーを新規追加',
                    'edit_item' => 'プライバシーポリシー内容を編集する',
                    'new_item' => '新規サイト',
                    'all_items' => 'プライバシーポリシー一覧',
                    'view_item' => 'プライバシーポリシーの説明を見る',
                    'search_items' => '検索する',
                    'not_found' => 'プライバシーポリシーが見つかりませんでした。',
                    'not_found_in_trash' => 'ゴミ箱内にプライバシーポリシーが見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
										'thumbnail', // アイキャッチ画像
            ),
    );
    register_post_type('privacy', $params);
}

// recruit ques
add_action('init', 'add_recruit_ques_post_type');
function add_recruit_ques_post_type() {
    $params = array(
            'labels' => array(
                    'name' => '採用についてよくある質問',
                    'singular_name' => '採用についてよくある質問',
                    'add_new' => '採用についてよくある質問追加',
                    'add_new_item' => '採用についてよくある質問を新規追加',
                    'edit_item' => '採用についてよくある質問内容を編集する',
                    'new_item' => '新規サイト',
                    'all_items' => '採用についてよくある質問一覧',
                    'view_item' => '採用についてよくある質問の説明を見る',
                    'search_items' => '検索する',
                    'not_found' => '採用についてよくある質問が見つかりませんでした。',
                    'not_found_in_trash' => 'ゴミ箱内に採用についてよくある質問が見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
										'thumbnail', // アイキャッチ画像
            ),
    );
    register_post_type('recruit_ques', $params);
}

// message
add_action('init', 'add_message_post_type');
function add_message_post_type() {
    $params = array(
            'labels' => array(
                    'name' => '代表挨拶',
                    'singular_name' => '代表挨拶',
                    'add_new' => '代表挨拶追加',
                    'add_new_item' => '代表挨拶を新規追加',
                    'edit_item' => '代表挨拶内容を編集する',
                    'new_item' => '新規サイト',
                    'all_items' => '代表挨拶一覧',
                    'view_item' => '代表挨拶の説明を見る',
                    'search_items' => '検索する',
                    'not_found' => '代表挨拶が見つかりませんでした。',
                    'not_found_in_trash' => 'ゴミ箱内に代表挨拶が見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
										'thumbnail', // アイキャッチ画像
            ),
    );
    register_post_type('message', $params);
}

// staff
add_action('init', 'add_staff_post_type');
function add_staff_post_type() {
    $params = array(
            'labels' => array(
                    'name' => 'スタッフ',
                    'singular_name' => 'スタッフ',
                    'add_new' => 'スタッフ追加',
                    'add_new_item' => 'スタッフを新規追加',
                    'edit_item' => 'スタッフ内容を編集する',
                    'new_item' => '新規サイト',
                    'all_items' => 'スタッフ一覧',
                    'view_item' => 'スタッフの説明を見る',
                    'search_items' => '検索する',
                    'not_found' => 'スタッフが見つかりませんでした。',
                    'not_found_in_trash' => 'ゴミ箱内にスタッフが見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
										'thumbnail', // アイキャッチ画像
            ),
            'taxonomies' => array('staff_category')
            // 'taxonomies' => array('members_category','members_tag')
    );
    register_post_type('staff', $params);
}

add_action('init', 'create_staff_taxonomies');
function create_staff_taxonomies() {
    // カテゴリを作成
    $labels = array(
            'name'                => 'スタッフカテゴリー',        //複数系のときのカテゴリ名
            'singular_name'       => 'スタッフカテゴリー',        //単数系のときのカテゴリ名
            'search_items'        => 'スタッフカテゴリーを検索',
            'all_items'           => '全てのスタッフカテゴリー',
            'parent_item'         => '親カテゴリー',
            'parent_item_colon'   => '親カテゴリー:',
            'edit_item'           => 'スタッフカテゴリを編集',
            'update_item'         => 'スタッフカテゴリを更新',
            'add_new_item'        => '新規スタッフカテゴリを追加',
            'new_item_name'       => '新規スタッフカテゴリ',
            'menu_name'           => 'スタッフカテゴリ'        //ダッシュボードのサイドバーメニュー名
    );
    $args = array(
            'hierarchical'        => true,
            'labels'              => $labels,
            'rewrite'             => array( 'slug' => 'staff_cat' )
    );

    register_taxonomy( 'staff_category', 'staff', $args );

    // // タグを作成
    // $labels = array(
    //         'name'                => 'Webタグ',        //複数系のときのタグ名
    //         'singular_name'       => 'Webタグ',        //単数系のときのタグ名
    //         'search_items'        => 'Webタグを検索',
    //         'all_items'           => '全てのWebタグ',
    //         'parent_item'         => null,
    //         'parent_item_colon'   => null,
    //         'edit_item'           => 'Webタグを編集',
    //         'update_item'         => 'Webタグを更新',
    //         'add_new_item'        => '新規Webタグを追加',
    //         'new_item_name'       => '新規Webタグ',
    //         'separate_items_with_commas'   => 'Webタグをコンマで区切る',
    //         'add_or_remove_items'          => 'Webタグを追加or削除する',
    //         'choose_from_most_used'        => 'よく使われているWebタグから選択',
    //         'not_found'                    => 'アイテムは見つかりませんでした',
    //         'menu_name'                    => 'Webタグ'        //ダッシュボードのサイドバーメニュー名
    // );
    // $args = array(
    //         'hierarchical'            => false,
    //         'labels'                  => $labels,
    //         'update_count_callback'   => '_update_post_term_count',    //タグの動作に必要なCallback設定
    //         'rewrite'                 => array( 'slug' => 'members_tag' )
    // );
    //
    // register_taxonomy( 'members_tag', 'members', $args );
}

// members
add_action('init', 'add_members_post_type');
function add_members_post_type() {
    $params = array(
            'labels' => array(
                    'name' => 'メンバー',
                    'singular_name' => 'メンバー',
                    'add_new' => 'メンバー追加',
                    'add_new_item' => 'メンバーを新規追加',
                    'edit_item' => 'メンバー内容を編集する',
                    'new_item' => '新規サイト',
                    'all_items' => 'メンバー一覧',
                    'view_item' => 'メンバーの説明を見る',
                    'search_items' => '検索する',
                    'not_found' => 'メンバーが見つかりませんでした。',
                    'not_found_in_trash' => 'ゴミ箱内にメンバーが見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
										'thumbnail', // アイキャッチ画像
            ),
            'taxonomies' => array('members_category')
            // 'taxonomies' => array('members_category','members_tag')
    );
    register_post_type('members', $params);
}
// カスタム投稿タイプ（websites）用のカテゴリ＆タグを作成する
add_action('init', 'create_members_taxonomies');
function create_members_taxonomies() {
    // カテゴリを作成
    $labels = array(
            'name'                => 'メンバーカテゴリー',        //複数系のときのカテゴリ名
            'singular_name'       => 'メンバーカテゴリー',        //単数系のときのカテゴリ名
            'search_items'        => 'メンバーカテゴリーを検索',
            'all_items'           => '全てのメンバーカテゴリー',
            'parent_item'         => '親カテゴリー',
            'parent_item_colon'   => '親カテゴリー:',
            'edit_item'           => 'メンバーカテゴリを編集',
            'update_item'         => 'メンバーカテゴリを更新',
            'add_new_item'        => '新規メンバーカテゴリを追加',
            'new_item_name'       => '新規メンバーカテゴリ',
            'menu_name'           => 'メンバーカテゴリ'        //ダッシュボードのサイドバーメニュー名
    );
    $args = array(
            'hierarchical'        => true,
            'labels'              => $labels,
            'rewrite'             => array( 'slug' => 'members_cat' )
    );

    register_taxonomy( 'members_category', 'members', $args );

    // // タグを作成
    // $labels = array(
    //         'name'                => 'Webタグ',        //複数系のときのタグ名
    //         'singular_name'       => 'Webタグ',        //単数系のときのタグ名
    //         'search_items'        => 'Webタグを検索',
    //         'all_items'           => '全てのWebタグ',
    //         'parent_item'         => null,
    //         'parent_item_colon'   => null,
    //         'edit_item'           => 'Webタグを編集',
    //         'update_item'         => 'Webタグを更新',
    //         'add_new_item'        => '新規Webタグを追加',
    //         'new_item_name'       => '新規Webタグ',
    //         'separate_items_with_commas'   => 'Webタグをコンマで区切る',
    //         'add_or_remove_items'          => 'Webタグを追加or削除する',
    //         'choose_from_most_used'        => 'よく使われているWebタグから選択',
    //         'not_found'                    => 'アイテムは見つかりませんでした',
    //         'menu_name'                    => 'Webタグ'        //ダッシュボードのサイドバーメニュー名
    // );
    // $args = array(
    //         'hierarchical'            => false,
    //         'labels'                  => $labels,
    //         'update_count_callback'   => '_update_post_term_count',    //タグの動作に必要なCallback設定
    //         'rewrite'                 => array( 'slug' => 'members_tag' )
    // );
    //
    // register_taxonomy( 'members_tag', 'members', $args );
}

// company
// カスタム投稿タイプを作成する
add_action('init', 'add_company_post_type');
function add_company_post_type() {
    $params = array(
            'labels' => array(
                    'name' => '会社概要',
                    'singular_name' => '会社概要',
                    'add_new' => '会社概要追加',
                    'add_new_item' => '会社概要を新規追加',
                    'edit_item' => '会社概要内容を編集する',
                    'new_item' => '会社概要サイト',
                    'all_items' => '会社概要一覧',
                    'view_item' => '会社概要の説明を見る',
                    'search_items' => '検索する',
                    'not_found' => '会社概要が見つかりませんでした。',
                    'not_found_in_trash' => 'ゴミ箱内に会社概要が見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
										'thumbnail', // アイキャッチ画像
            ),
    );
    register_post_type('company', $params);
}

// works
add_action('init', 'add_works_post_type');
function add_works_post_type() {
    $params = array(
            'labels' => array(
                    'name' => '制作実績',
                    'singular_name' => '制作実績',
                    'add_new' => '制作実績追加',
                    'add_new_item' => '制作実績を新規追加',
                    'edit_item' => '制作実績内容を編集する',
                    'new_item' => '新規サイト',
                    'all_items' => '制作実績一覧',
                    'view_item' => '制作実績の説明を見る',
                    'search_items' => '検索する',
                    'not_found' => '制作実績が見つかりませんでした。',
                    'not_found_in_trash' => 'ゴミ箱内に制作実績が見つかりませんでした。'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                    'title',
                    'editor',
                    'author',
                    'custom-fields',
										'thumbnail', // アイキャッチ画像
            ),
            'taxonomies' => array('works_category')
            // 'taxonomies' => array('members_category','members_tag')
    );
    register_post_type('works', $params);
}

add_action('init', 'create_works_taxonomies');
function create_works_taxonomies() {
    // カテゴリを作成
    $labels = array(
            'name'                => '制作実績カテゴリー',        //複数系のときのカテゴリ名
            'singular_name'       => '制作実績カテゴリー',        //単数系のときのカテゴリ名
            'search_items'        => '制作実績カテゴリーを検索',
            'all_items'           => '全ての制作実績カテゴリー',
            'parent_item'         => '親カテゴリー',
            'parent_item_colon'   => '親カテゴリー:',
            'edit_item'           => '制作実績カテゴリを編集',
            'update_item'         => '制作実績カテゴリを更新',
            'add_new_item'        => '新規制作実績カテゴリを追加',
            'new_item_name'       => '新規制作実績カテゴリ',
            'menu_name'           => '制作実績カテゴリ'        //ダッシュボードのサイドバーメニュー名
    );
    $args = array(
            'hierarchical'        => true,
            'labels'              => $labels,
            'rewrite'             => array( 'slug' => 'works_category' )
    );

    register_taxonomy( 'works_category', 'works', $args );

    // // タグを作成
    // $labels = array(
    //         'name'                => 'Webタグ',        //複数系のときのタグ名
    //         'singular_name'       => 'Webタグ',        //単数系のときのタグ名
    //         'search_items'        => 'Webタグを検索',
    //         'all_items'           => '全てのWebタグ',
    //         'parent_item'         => null,
    //         'parent_item_colon'   => null,
    //         'edit_item'           => 'Webタグを編集',
    //         'update_item'         => 'Webタグを更新',
    //         'add_new_item'        => '新規Webタグを追加',
    //         'new_item_name'       => '新規Webタグ',
    //         'separate_items_with_commas'   => 'Webタグをコンマで区切る',
    //         'add_or_remove_items'          => 'Webタグを追加or削除する',
    //         'choose_from_most_used'        => 'よく使われているWebタグから選択',
    //         'not_found'                    => 'アイテムは見つかりませんでした',
    //         'menu_name'                    => 'Webタグ'        //ダッシュボードのサイドバーメニュー名
    // );
    // $args = array(
    //         'hierarchical'            => false,
    //         'labels'                  => $labels,
    //         'update_count_callback'   => '_update_post_term_count',    //タグの動作に必要なCallback設定
    //         'rewrite'                 => array( 'slug' => 'members_tag' )
    // );
    //
    // register_taxonomy( 'members_tag', 'members', $args );
}

// カスタムヘッダー画像を設置する
$custom_header_defaults = array(
		'default-image'          => get_bloginfo('template_url').'/img/wordpress-logo-hoz-rgb_small.png',
		'header-text'            => false,	//ヘッダー画像上にテキストをかぶせる
);
add_theme_support( 'custom-header', $custom_header_defaults );

add_theme_support( 'post-thumbnails' );

register_nav_menus(array(
	'header' => 'ヘッダーのコンテンツ'
));

register_nav_menus(array(
  'footer-left' => 'フッターの左のコンテンツ'
));

register_nav_menus(array(
  'footer-center' => 'フッターの真ん中のコンテンツ'
));

register_nav_menus(array(
  'footer-right' => 'フッターの右のコンテンツ'
));

register_nav_menus(array(
  'sidebar-other' => 'サイドバーの広告表示'
));

register_nav_menus(array(
  'sidebar-category' => 'サイドバーのカテゴリー表示'
));

register_nav_menus(array(
  'sidebar-page' => '会社案内コンテンツのメニュー'
));

register_nav_menus(array(
  'contact' => 'お問い合わせ'
));

register_nav_menus(array(
  'works_category' => '制作実績のメニュー'
));

register_nav_menus(array(
  'top-category' => 'トップページのカテゴリーメニュー'
));

register_nav_menus(array(
  'sidebar-recruit' => 'サイドバーの採用情報メニュー'
));

add_theme_support('custom-background');

// アイキャッチ画像
add_theme_support('post-thumbnails');


// 基本サイズ
set_post_thumbnail_size(210, 210);

// Mサイズ
add_image_size('msize', 400, 400);
// Sサイズ
add_image_size('ssize', 300, 200, true);

add_image_size('lsize', 788, 565);

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches [1] [0];

    if(empty($first_img)){
        $first_img = "/images/default.jpg";
    }
    return $first_img;
}

add_action( 'admin_print_footer_scripts', 'limit_category_select' );
function limit_category_select() {
	?>
	<script type="text/javascript">
		jQuery(function($) {
			// 投稿画面のカテゴリー選択を制限
			var cat_checklist = $('.categorychecklist input[type=checkbox]');
			cat_checklist.click( function() {
				$(this).parents('.categorychecklist').find('input[type=checkbox]').attr('checked', false);
				$(this).attr('checked', true);
			});

			// クイック編集のカテゴリー選択を制限
			var quickedit_cat_checklist = $('.cat-checklist input[type=checkbox]');
			quickedit_cat_checklist.click( function() {
				$(this).parents('.cat-checklist').find('input[type=checkbox]').attr('checked', false);
				$(this).attr('checked', true);
			});

			$('.categorychecklist>li:first-child, .cat-checklist>li:first-child').before('<p style="padding-top:5px;">カテゴリーは1つしか選択できません</p>');
		});
	</script>
	<?php
}

if ( ! function_exists( 'pietergoosen_pagination' ) ) :

    function pietergoosen_pagination($pages = '', $range = 2) {
       $showitems = ($range * 2)+1;

      global $paged;
      if(empty($paged)) $paged = 1;

          if($pages == '')
          {
             global $wp_query;
             $pages = $wp_query->max_num_pages;
                if(!$pages)
                {
                $pages = 1;
                }
            }

           if(1 != $pages)
          {
            $string = _x( );
            echo "<div class='pagination'>";
              if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>" . __( '&laquo; First', 'pietergoosen' ) . "</a>";
             if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>" . __( '&lsaquo; Previous', 'pietergoosen' ) . "</a>";

                for ($i=1; $i <= $pages; $i++)
                {
                   if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
                   {
                        echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
                   }
               }

               if ($paged < $pages && $showitems < $pages) echo "<a href='" . get_pagenum_link($paged + 1)."'>" . __( '次へ &rsaquo;', 'pietergoosen' ) . "</a>";
               if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>" . __( '最後 &raquo;', 'pietergoosen' ) . "</a>";
               echo "</div>\n";
         }
        } //  pietergoosen_pagination

endif;

function is_first(){
  global $wp_query;
  return ($wp_query->current_post === 0);
}

 ?>
