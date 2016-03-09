<?php
// Template Name: 採用についてよくある質問
?>
<?php get_header(); ?>
<!-- content -->
<div id='content'>
  <div class="other-bar">
    <div class="other-bar-width">
      <ol class="other-bar-list">
        <li class="other-bar-item">
          <a href="<? echo home_url();?>" class="other-bar-item_home">
            <i class="fa fa-home"></i>
          </a>
        </li>
        <li class="other-bar-item">
          <i class="fa fa-chevron-right"></i>
          <a href="http://localhost:8888/wordpress/%E6%8E%A1%E7%94%A8%E6%83%85%E5%A0%B1/">
            <span>採用情報</span>
          </a>
        </li>
        <li class="other-bar-item">
          <i class="fa fa-chevron-right"></i>
          <span>採用についてよくある質問</span>
        </li>
      </ol>
    </div>
  </div>
  <div class='row' id='content_all'>
    <div id='content_main'>
      <section id='content_section'>
        <!-- singleのここは使い回し -->
        <article id='single_article'>
          <div class='single_article-all ~recruit-ques~'>
          <!-- /singleのここは使い回し -->
            <h1 class="page-title">採用についてよくある質問</h1>

            <!-- recruit-ques start -->
            <div class="recruit-ques_main">
              <ul class="recruit-ques-main-list">
                <?php
                $loop = new WP_Query(array("post_type" => "recruit_ques"));
                if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
                ?>
                <li class="recruit-ques-main-item">
                  <dl class="recruit-ques-main-item-frame">
                    <dt class="recruit-ques-main-item-q">
                      <div class="recruit-ques-main-item-th">
                        <span class="recruit-ques-main-item-th-icon">Q.</span>
                      </div>
                      <div class="recruit-ques-main-item-td">
                        <p class="recruit-ques-main-item-td-content"><?php the_title(); ?></p>
                      </div>
                    </dt>
                    <dd class="recruit-ques-main-item-a">
                      <div class="recruit-ques-main-item-th">
                        <span class="recruit-ques-main-item-th-icon"><i class="fa fa-adn"></i>.</span>
                      </div>
                      <div class="recruit-ques-main-item-td">
                        <div class="recruit-ques-main-item-td-content"><?php the_content(); ?></div>
                      </div>
                    </dd>
                  </dl>
                </li>
                <?php endwhile;endif; ?>
              </ul>
            </div>
            <!-- /recruit-ques start -->

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
