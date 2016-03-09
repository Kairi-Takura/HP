<?php
// Template Name: 採用情報
?>
<?php get_header(); ?>
<!-- content -->
<div id='content'>
  <div class="other-bar">
    <div class="other-bar-width">
      <ol class="other-bar-list">
        <li class="other-bar-item">
          <a href="<? echo home_url();?>">
            <i class="fa fa-home"></i>
          </a>
        </li>
        <li class="other-bar-item">
          <i class="fa fa-chevron-right"></i>
          <span>採用情報</span>
        </li>
      </ol>
    </div>
  </div>
  <div class='row' id='content_all'>
    <div id='content_main'>
      <section id='content_section'>
        <!-- singleのここは使い回し -->
        <article id='single_article'>
          <div class='single_article-all ~recruit~'>
          <!-- /singleのここは使い回し -->
            <h1 class="page-title">採用情報</h1>

            <!-- recruit start -->
            <div class="recruit_main">
              <div class="recruit_main-heading row">
                <div class="recruit_main-heading-img col-sm-6 col-xs-12">
                  <a href="http://localhost:8888/wordpress/%E4%B8%AD%E9%80%94%E6%8E%A1%E7%94%A8%E8%81%B7%E7%A8%AE%E4%B8%80%E8%A6%A7/">
                    <img src="http://localhost:8888/wordpress/wp-content/uploads/2016/03/Image11-e1457445248833.jpg"/>
                    <figcaption class="recruit_main-heading-img-caption">
                      <span>中途採用職種一覧</span>
                    </figcaption>
                  </a>
                </div>
                <div class="recruit_main-heading-img col-sm-6 col-xs-12">
                  <a href="#">
                    <img src="http://localhost:8888/wordpress/wp-content/uploads/2016/03/comingsoon-563x353.jpg"/>
                    <figcaption class="recruit_main-heading-img-caption">
                      <span>新卒採用</span>
                    </figcaption>
                  </a>
                </div>
              </div>
              <h1 class="page-title">採用についてよくある質問</h1>
              <h1 class="recruit-main-content_page-title_mini">採用についてよくある質問</h1>
              <div class="recruit-main-content">
                <ul class="recruit-main-content-list">
                  <?php
                  $loop = new WP_Query(array("post_type" => "recruit_ques"));
                  if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
                  ?>
                  <li class="recruit-main-content-item">
                    <a href="#">
                      <i class="fa fa-question"></i>
                      <span><?php the_title(); ?></span>
                    </a>
                  </li>
                  <?php endwhile;endif; ?>
                </ul>
                <div class="btn -ques">
                  <a href="http://localhost:8888/wordpress/%E6%8E%A1%E7%94%A8%E3%81%AB%E3%81%A4%E3%81%84%E3%81%A6%E3%82%88%E3%81%8F%E3%81%82%E3%82%8B%E8%B3%AA%E5%95%8F/">全ての質問と回答を見る</a>
                </div>
              </div>
            </div>
            <!-- /recruit start -->

            <div class="sidebar-page-menu_mini hidden-lg hidden-md">
              <h1 class="sidebar-page-title_mini">採用情報</h1>
              <?php wp_nav_menu(array('theme_location' => 'sidebar-recruit'));?>
            </div>
            <div class="question">
              <div class="question-content">
                <p class="question-content-title">
                  Web制作のご依頼・ご相談・お見積り
                </p>
                <a href="/">
                  <i class="fa fa-question-circle"></i>
                  お問い合わせはこちら
                </a>
              </div>
            </div>
          </div>
        </article>
      </section>
    </div>
    <!-- sidebar-page -->
    <div class='col-md-4 hidden-xs hidden-sm' id='sidebar'>
      <section id='sidebar_section'>
        <!--  sidebar-page -->
        <h1 class='sidebar_article-member_title'>採用情報</h1>
        <?php wp_nav_menu(array('theme_location' => 'sidebar-recruit'));?>

        <!-- / Recommended -->
        <h1 class='sidebar_article-member_title'>おすすめの記事</h1>
        <article class='sidebar_article-recommended'>
          <div id='content'>
            <div class='sidebar_article-content' id='content_main'>
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
                </article>
                <?php endwhile; endif; ?>
              </section>
            </div>
          </div>
        </article>

        <!-- Advertisement (Narrow　300*250) -->
        <article class='sidebar_article-advertisement_narrow'>
          <div class='sidebar_article-advertisement_narrow-all'>
          </div>
          <a href="http://superceo.jp/book/company/i60107/#!3" target="_blank"><img src="http://superceo.jp/book/company/i60107/bnr/i60107.jpg" alt="次世代経営者のCEOスタイルマガジンSUPERCEOで当社特集掲載中" width="1900" height="280" class="content_top-img"/></a>
        </article>
      </section>
    </div>
    <!-- /sidebar-page -->
  </div>
</div>
<!-- / content -->
<!-- footer -->
<?php get_footer(); ?>
