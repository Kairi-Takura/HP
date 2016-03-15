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
                  <a href="">
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
    <?php get_sidebar('recruit'); ?>
  </div>
</div>
<!-- / content -->
<?php get_footer(); ?>
