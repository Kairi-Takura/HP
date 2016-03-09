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
            <div class="single-table">一緒にこの記事も見られています</div>
            <?php if( $query -> have_posts() ): ?>
            <?php while ($query -> have_posts()) : $query -> the_post(); ?>
              <?php $count++; ?>
              <ul class="single-table-list <?php echo 'number'.$count; ?>
              <?php if(($count % 2)==0) {
              echo ' single-img-left';
              } ?>">
                <a href="<?php echo get_permalink(); ?>">
                  <li class="single-table-item">
                    <div id="single-table-item-main">
                    <?php the_post_thumbnail('lsize') ?>
                  </li>
                </a>
              </ul>
            <?php endwhile; endif; ?>
            <?php endwhile; else: ?>
            <p>記事が見つかりませんでした。</p>
            <?php endif; ?>
            <?php wp_reset_query();?>
          </div>
        </article>
      </section>
    </div>
    <!-- single sidebar -->
    <div class='col-md-4 hidden-xs hidden-sm' id='sidebar'>
      <section id='sidebar_section'>
        <!-- Category -->
        <h1 class='sidebar_article-member_title'>カテゴリー</h1>
        <ul class='cat-list'>
          <?php wp_list_categories('title_li=&depth=1'); ?>
        </ul>
        <!-- Tags -->
        <article class='sidebar-single_frame'>
          <h1 class='sidebar_article-member_title'>タグで見る</h1>
          <ul class='sidebar-single_tag-list'>
            <?php
            $args = array(
            'orderby' => 'count',
            'order' => 'desc',
            'number' => 10
            );
            $tags = get_terms('post_tag', $args);
            foreach($tags as $value) {
            echo '<li><a href="'. get_tag_link($value->term_id) .'" class="sidebar-single_tag-item">'. $value->name .'</a></li>';
            }
            ?>
          </ul>
        </article>
        <!-- / Recommended -->
        <article class='sidebar-single_frame'>
          <h1 class='sidebar_article-member_title'>おすすめの記事</h1>
          <div id='content'>
            <div class='sidebar_article-content sidebar-single_content_main' id='content_main'>
              <section id='content_section'>
                <?php query_posts('posts_per_page=5&orderby=rand') ?>
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <article class='content_article content_article_mini'>
                  <a href="<?php echo get_permalink(); ?>">
                  <div class='content_article-all row content_article-all_mini'>
                    <div class='content_article-img-all content_article-img-all_mini'>
                      <p class='content_article-img-all-in'><?php the_post_thumbnail('ssize'); ?></p>
                    </div>
                    <div class='content_article-content_mini'>
                      <div class='content_article-name_mini'><?php the_modified_author(); ?></div>
                      <p>
                        <time class='content_article-time_mini' datetime='&lt;?php echo get_the_date();?&gt;'><?php echo get_the_date();?></time>
                        <?php
                        $days = 2;
                        $today = date_i18n('U');
                        $entry = get_the_time('U');
                        $elapsed = date('U',($today - $entry)) / 86400;
                        if( $days > $elapsed ){
                        echo '<span class="new new_mini">New</span>';
                        }
                        ?>
                      </p>
                      <h1 class='content_article-title_mini'><?php the_title(); ?></h1>
                    </div>
                  </div>
                  </a>
                </article>
                <?php endwhile; endif; ?>
              </section>
            </div>
          </div>
        </article>
        <!-- / Advertisment -->
        <article class='sidebar_article-advertisement_narrow'>
          <div class='sidebar_article-advertisement_narrow-all'>
          </div>
          <a href="http://superceo.jp/book/company/i60107/#!3" target="_blank"><img src="http://superceo.jp/book/company/i60107/bnr/i60107.jpg" alt="次世代経営者のCEOスタイルマガジンSUPERCEOで当社特集掲載中" width="1900" height="280" class="content_top-img"/></a>
        </article>
      </section>
    </div>
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
