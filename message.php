<?php
// Template Name: 代表挨拶
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
          <span>代表挨拶</span>
        </li>
      </ol>
    </div>
  </div>
  <div class='row' id='content_all'>
    <div id='content_main'>
      <section id='content_section'>
        <!-- singleのここは使い回し -->
        <article id='single_article'>
          <div class='single_article-all ~message~'>
          <!-- /singleのここは使い回し -->
            <h1 class="page-title">代表挨拶</h1>

            <!-- message start -->
            <div id="staff_main">
              <section id="staff_section" class="visible-lg visible-md">
                <?php
                $loop = new WP_Query(array("post_type" => "message"));
                if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
                ?>
                <article class="message_article">
                  <div class="message_article-all">
                    <p class="message_article-img">
                      <?php the_post_thumbnail('lsize'); ?>
                    </p>
                    <div class="message_article_content">
                      <div class="message_article_content-title">
                        <?php the_title(); ?>
                      </div>
                      <div class="message_article_content-text">
                        <?php the_content(); ?>
                      </div>
                      <ul class="message_article-info">
                        <li class="message_article-info-officer"><?php echo get_post_meta($post->ID, 'officer', true); ?></li>
                        <li class="message_article-name"><?php echo get_post_meta($post->ID, 'name', true); ?></li>
                      </ul>
                    </div>
                  </div>
                </article>
                <?php endwhile;endif; ?>
              </section>

              <section id="staff_section" class="visible-sm visible-xs">
                <?php
                $loop = new WP_Query(array("post_type" => "message"));
                if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
                ?>
                <article class="message_article">
                  <div class="message_article-all">
                    <p class="message_article-img">
                      <?php the_post_thumbnail('lsize'); ?>
                    </p>
                    <ul class="message_article-info">
                      <li class="message_article-info-officer"><?php echo get_post_meta($post->ID, 'officer', true); ?></li>
                      <li class="message_article-name"><?php echo get_post_meta($post->ID, 'name', true); ?></li>
                    </ul>
                    <div class="message_article_content">
                      <div class="message_article_content-title">
                        <?php the_title(); ?>
                      </div>
                      <div class="message_article_content-text">
                        <?php the_content(); ?>
                      </div>
                    </div>
                  </div>
                </article>
                <?php endwhile;endif; ?>
              </section>
            </div>
            <!-- /works start -->

            <div class="sidebar-page-menu_mini hidden-lg hidden-md">
              <h1 class="sidebar-page-title_mini">会社案内</h1>
              <?php wp_nav_menu(array('theme_location' => 'sidebar-page'));?>
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
    <?php get_sidebar('company'); ?>
  </div>
</div>
<!-- / content -->
<?php get_footer(); ?>
