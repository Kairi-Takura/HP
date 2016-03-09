<?php
// Template Name: 会社概要
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
          <span>会社概要</span>
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
            <h1 class="page-title">会社概要</h1>

            <table class="table table_default l_frame-main small-content">
              <tbody>
                <?php
                $loop = new WP_Query(array("post_type" => "company"));
                if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
                ?>
                <tr>
                  <th class="table_default-heading"><?php the_title(); ?></th>
                  <td class="table_default-content"><?php the_content(); ?></td>
                </tr>
                <?php endwhile;endif; ?>
              </tbody>
            </table>

            <table class="table table_default l_frame-main large-content">
              <tbody>
                <?php
                $loop = new WP_Query(array("post_type" => "company"));
                if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
                ?>
                <tr>
                  <th class="table_default-heading_mini"><?php the_title(); ?></th>
                </tr>
                <tr>
                  <td class="table_default-content_mini"><?php the_content(); ?></td>
                </tr>
                <?php endwhile;endif; ?>
              </tbody>
            </table>
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
  <!-- /content -->
</div>
<!-- footer -->
<?php get_footer(); ?>
