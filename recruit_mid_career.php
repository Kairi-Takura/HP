<?php
// Template Name: 中途採用職種一覧
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
          <a href="http://localhost:8888/wordpress/%E6%8E%A1%E7%94%A8%E6%83%85%E5%A0%B1/">
            <span>採用情報</span>
          </a>
        </li>
        <li class="other-bar-item">
          <i class="fa fa-chevron-right"></i>
          <span>中途募集職種一覧</span>
        </li>
      </ol>
    </div>
  </div>
  <div class='row' id='content_all'>
    <div id='content_main'>
      <section id='content_section'>
        <!-- singleのここは使い回し -->
        <article id='single_article'>
          <div class='single_article-all ~recruit_mid_career~'>
          <!-- /singleのここは使い回し -->
            <h1 class="page-title">中途募集職種一覧</h1>

            <!-- recruit_mid_career start -->
            <ul class="recruit_mid_career-list">
              <?php
              $loop = new WP_Query(array("post_type" => "recruit_mid_career"));
              if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
              ?>
              <li class="recruit_mid_career-item">
                <a href="<?php echo get_permalink(); ?>">
                  <div class="recruit_mid_career-title">
                    <?php the_title(); ?>
                    <i class="fa fa-angle-double-right"></i>
                  </div>
                </a>
              </li>
              <?php endwhile;endif; ?>
            </ul>
            <!-- /recruit_mid_career start -->

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
