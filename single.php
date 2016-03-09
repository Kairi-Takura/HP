<!-- Header -->
<?php get_header(); ?>
<!-- Single -->
<div id='content'>
  <div class='row' id='content_all'>
    <div id='content_main'>
      <section id='content_section'>
        <article id='single_article'>
          <div class='single_article-all'>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class='single_article-info'>
              <time class='single_article-date-text' datetime="&lt;?php echo get_the_date('Y-m-d');?&gt;"><?php echo get_the_date('Y-m-d');?></time>
            </div>
            <?php the_title('<h1 class="single_article-title-text">', '</h1>' ); ?>
            <div class='single_article-content'>
              <?php the_content(); ?>
            </div>
            <?php $count=0; ?>
            <?php
            //カテゴリ情報から関連記事を6個ランダムに呼び出す
            $categories = get_the_category($post->ID);
            $category_ID = array();
            foreach($categories as $category):
              array_push( $category_ID, $category -> cat_ID);
            endforeach ;
            $args = array(
              'post__not_in' => array($post -> ID),
              'posts_per_page'=> 6,
              'category__in' => $category_ID,
              'orderby' => 'rand',
            );
            $query = new WP_Query($args); ?>
            <div class="single_table-title visible-lg">一緒にこの記事も見られています</div>
            <ul class="single_table-list row visible-lg">
              <?php if( $query -> have_posts() ): ?>
              <?php while ($query -> have_posts()) : $query -> the_post(); ?>
                <?php $count++; ?>
                <li class="single_table-item col-md-6 <?php echo 'number'.$count; ?>
                <?php if(($count % 2)==0) {
                echo ' single_table-item-left';
                } ?>">
                  <a href="<?php echo get_permalink(); ?>">
                    <div class="single_table-item-all row">
                      <p class="single_table-item-img col-xs-5">
                        <?php the_post_thumbnail('lsize') ?>
                      </p>
                      <div class="single_table-item-content col-xs-7">
                        <time datetime="<?php echo get_the_date('Y-m-d');?>"><?php echo get_the_date('Y-m-d');?></time>
                        <p class="single_table-item-content-text"><?php echo mb_substr(strip_tags($post-> post_title),0,62); ?></p>
                      </div>
                    </div>
                  </a>
                </li>
            <?php endwhile; endif; ?>
            <?php endwhile; else: ?>
            </ul>
            <p>記事が見つかりませんでした。</p>
            <?php endif; ?>
            <?php wp_reset_query();?>
            <!--sample-->
            <?php
           $wpp = array (
           'range' => 'daily', /*集計期間の設定（daily,weekly,monthly）*/
           'limit' => 5, /*表示数はmax5記事*/
           'post_type' => 'post', /*投稿のみ指定（固定ページを除外）*/
           'title_length' => '35', /*タイトル文字数上限*/
           'stats_comments' => '0', /*コメント数は非表示*/
           'stats_views' => '1', /*閲覧数を表示させる*/
           'thumbnail_width' => '50', /*画像のwidth（px）*/
           'thumbnail_height' => '50', /*画像のheight（px）*/
           'post_html' => '<li>{thumb}<span>{title}</span></li>', /*表示されるhtmlの設定（サムネイル、記事タイトル、の順で表示）*/
          ); ?>
          <?php wpp_get_mostpopular($wpp); ?>
          <!--/sample-->
          </div>
        </article>
      </section>
    </div>
    <?php get_sidebar('single'); ?>
  </div>
</div>
<!-- footer -->
<?php get_footer(); ?>
<script>
  $(function() {
  $('#menu-home-top-category').slick({
  infinite: false,
  dots:false,
  slidesToShow: 6,
  slidesToScroll: 4,
  responsive: [{
  breakpoint: 768,
  settings: {
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  }
  },{
  breakpoint: 480,
  settings: {
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  }
  }
  ]
  });
  });
</script>
<script>
  $(function() {
  $('#members-main-img-mini').slick({
  infinite: false,
  dots:false,
  slidesToShow: 6,
  slidesToScroll: 4,
  responsive: [{
  breakpoint: 768,
  settings: {
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  }
  },{
  breakpoint: 480,
  settings: {
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  }
  }
  ]
  });
  });
</script>
