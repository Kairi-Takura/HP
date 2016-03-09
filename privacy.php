<?php
// Template Name: プライバシー・ポリシー
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
          <span>プライバシー・ポリシー</span>
        </li>
      </ol>
    </div>
  </div>
  <div class='row' id='content_all'>
    <div id='content_main'>
      <section id='content_section'>
        <!-- singleのここは使い回し -->
        <article id='single_article'>
          <div class='single_article-all ~privacy~'>
          <!-- /singleのここは使い回し -->
            <h1 class="page-title">プライバシー・ポリシー</h1>

            <!-- privacy start -->
            <div class="privacy_main">
              <ul class="privacy-list">
                <?php
                $loop = new WP_Query(array("post_type" => "privacy"));
                if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
                ?>
                <li class="privacy-item">
                  <h2 class="privacy-item-title">
                    <?php the_title(); ?>
                  </h2>
                  <?php the_content(); ?>
                </li>
                <?php endwhile;endif; ?>
              </ul>
            </div>
            <!-- /privacy start -->

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
    <?php get_sidebar('other'); ?>
  </div>
</div>
<!-- / content -->
<?php get_footer(); ?>
