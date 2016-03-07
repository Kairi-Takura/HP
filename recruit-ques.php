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
                        <span class="recruit-ques-main-item-th-icon">Q</span>
                      </div>
                      <div class="recruit-ques-main-item-td">
                        <p class="recruit-ques-main-item-td-content"><?php the_title(); ?></p>
                      </div>
                    </dt>
                    <dd class="recruit-ques-main-item-a">
                      <div class="recruit-ques-main-item-th">
                        <span class="recruit-ques-main-item-th-icon"><i class="fa fa-adn"></i></span>
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
