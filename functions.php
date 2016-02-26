<?php

// カスタムヘッダー画像を設置する
$custom_header_defaults = array(
		'default-image'          => get_bloginfo('template_url').'/img/wordpress-logo-hoz-rgb_small.png',
		'width'                  => 220,
		'height'                 => 50,
		'header-text'            => false,	//ヘッダー画像上にテキストをかぶせる
);
add_theme_support( 'custom-header', $custom_header_defaults );

register_nav_menus(array(
	'header' => 'header'
));

register_nav_menus(array(
  'footer-left' => 'footer-left'
));

register_nav_menus(array(
  'footer-center' => 'footer-center'
));

register_nav_menus(array(
  'footer-right' => 'footer-right'
));

register_nav_menus(array(
  'sidebar-other' => 'sidebar-other'
));

register_nav_menus(array(
  'sidebar-category' => 'sidebar-category'
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

 ?>
