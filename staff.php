<?php
// Template Name: 役員紹介
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
          <span>役員紹介</span>
        </li>
      </ol>
    </div>
  </div>
  <div class='row' id='content_all'>
    <div id='content_main'>
      <section id='content_section'>
        <!-- singleのここは使い回し -->
        <article id='single_article'>
          <div class='single_article-all ~company~'>
          <!-- /singleのここは使い回し -->
            <h1 class="page-title">役員紹介</h1>

            <!-- staff start -->
            <div id="staff_main">
              <section id="staff_section" class="visible-lg visible-md">
                <?php
                $loop = new WP_Query(array("post_type" => "staff"));
                if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
                ?>
                <article class="staff_article">
                  <div class="staff_article-all">
                    <p class="staff_article-img">
                      <?php the_post_thumbnail('lsize'); ?>
                    </p>
                    <div class="staff_article-content">
                      <header class="staff_article-content_header-frame">
                        <h2 class="staff_article-content_header-name_k"><?php the_title(); ?></h2>
                        <p class="staff_article-content_header-name_l"><?php echo get_post_meta($post->ID, 'kana', true); ?></p>
                        <p class="staff_article-content_header-social">
                          <a href="<?php echo get_post_meta($post->ID, 'twitter', true); ?>" >
                            <i class="fa fa-twitter"></i>
                          </a>
                          <a href="<?php echo get_post_meta($post->ID, 'facebook', true); ?>" >
                            <i class="fa fa-facebook"></i>
                          </a>
                        </p>
                      </header>
                      <ul class="staff_article-content_content-frame">
                        <?php
                        $terms = get_the_terms( get_the_ID(), 'staff_category' );
                        if ( !empty($terms) ) : if ( !is_wp_error($terms) ) :
                        ?>
                        <?php foreach( $terms as $term ) : ?>
                        <li class="staff_article-content_content-officer"><?php echo $term->name; ?></li>
                        <?php endforeach; ?>
                        <?php endif; endif; ?>
                        <li class="staff_article-content_content-birth"><?php echo get_post_meta($post->ID, 'birth', true); ?></li>
                      </ul>
                      <div class="staff_article-content_content-text">
                        <?php the_content(); ?>
                      </div>
                    </div>
                  </div>
                </article>
                <?php endwhile;endif; ?>
              </section>

              <section id="staff_section_mini" class="visible-xs visible-sm">
                <?php
                $loop = new WP_Query(array("post_type" => "staff"));
                if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
                ?>
                <article class="staff_article_mini">
                  <div class="staff_article-all_mini">
                    <div class="staff_article-img_mini">
                      <?php the_post_thumbnail('lsize'); ?>
                      <h2 class="staff_article-content_header-name_k_mini"><?php the_title(); ?></h2>
                      <p class="staff_article-content_header-name_l_mini"><?php echo get_post_meta($post->ID, 'kana', true); ?></p>
                    </div>
                    <div class="staff_article-content_mini">
                      <ul class="staff_article-content_content-frame_mini">
                        <?php
                        $terms = get_the_terms( get_the_ID(), 'staff_category' );
                        if ( !empty($terms) ) : if ( !is_wp_error($terms) ) :
                        ?>
                        <?php foreach( $terms as $term ) : ?>
                        <li class="staff_article-content_content-officer_mini"><?php echo $term->name; ?></li>
                        <?php endforeach; ?>
                        <?php endif; endif; ?>
                        <li class="staff_article-content_content-birth_mini"><?php echo get_post_meta($post->ID, 'birth', true); ?></li>
                      </ul>
                      <header class="staff_article-content_header-frame_mini">
                        <p class="staff_article-content_header-social_mini">
                          <a href="<?php echo get_post_meta($post->ID, 'twitter', true); ?>" >
                            <i class="fa fa-twitter"></i>
                          </a>
                          <a href="<?php echo get_post_meta($post->ID, 'facebook', true); ?>" >
                            <i class="fa fa-facebook"></i>
                          </a>
                        </p>
                      </header>
                      <div class="staff_article-content_content-text_mini">
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
<!-- footer -->
<?php get_footer(); ?>
