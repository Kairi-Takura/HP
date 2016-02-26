<!-- / content -->
<div id='content'>
  <p id='page-top'>
    <a href='#wrap'>
      <i class='fa fa-arrow-up'></i>
    </a>
  </p>
  <div class='row' id='content_all'>
    <div class='col-md-8 col-sm-12' id='content_main'>
      <section class='visible-lg visible-md' id='content_section'>
        <?php query_posts('posts_per_page=1') ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article class='content_article content_article-first'>
          <a href="<?php echo get_permalink(); ?>">
          <div class='content_article-all content_article-all-first'>
            <?php the_post_thumbnail('lsize'); ?>
            <?php
            $cats = get_the_category();
            $cats = $cats[0];
            ?>
            <p class="content_article-category <?php echo $cats->category_nicename; ?>"> <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
            <div class='content_article-content'>
              <div class='content_article-name'><?php the_modified_author(); ?></div>
              <p class='content_article-date'>
                <?php
                $days = 2;
                $today = date_i18n('U');
                $entry = get_the_time('U');
                $elapsed = date('U',($today - $entry)) / 86400;
                if( $days > $elapsed ){
                echo '<span class="new">New</span>';
                }
                ?>
                <time class='content_article-time' datetime='&lt;?php echo get_the_date();?&gt;'><?php echo get_the_date();?></time>
              </p>
              <h1 class='content_article-title'><?php the_title(); ?></h1>
              <div class='content_article-warp'></div>
            </div>
            <figcaption class='content_article-overlay'>
              <!-- / Maybe... -->
            </figcaption>
          </div>
          </a>
        </article>
        <?php endwhile; endif; ?>
      </section>
    </div>
    <!-- sidebar -->
    <div class='col-md-4 hidden-xs hidden-sm' id='sidebar'>
      <section id='sidebar_section'>
        <!-- / Members -->
        <h1 class='sidebar_article-member_title'>Members</h1>
        <article class='sidebar_article-member'>
          <div class='sidebar_article-member_main'></div>
          <div class='sidebar_article-member_other row'>
            <div class='member_other-all col-md-4'>
              <a href='/'>
                <p class='member_other-all-img-frame'>
                  <img class='member_other-all-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5094-1.jpg'>
                </p>
                <h1 class='member_other-all-manager'>代表取締役</h1>
                <h2 class='member_other-all-name'>ああああああああああ</h2>
              </a>
            </div>
            <div class='member_other-all col-md-4'>
              <a href='/'>
                <p class='member_other-all-img-frame'>
                  <img class='member_other-all-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5094-1.jpg'>
                </p>
                <h1 class='member_other-all-manager'>代表取締役</h1>
                <h2 class='member_other-all-name'>ああああああああああ</h2>
              </a>
            </div>
            <div class='member_other-all col-md-4'>
              <a href='/'>
                <p class='member_other-all-img-frame'>
                  <img class='member_other-all-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5094-1.jpg'>
                </p>
                <h1 class='member_other-all-manager'>代表取締役</h1>
                <h2 class='member_other-all-name'>ああああああああああ</h2>
              </a>
            </div>
            <div class='member_other-all col-md-4'>
              <a href='/'>
                <p class='member_other-all-img-frame'>
                  <img class='member_other-all-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5094-1.jpg'>
                </p>
                <h1 class='member_other-all-manager'>代表取締役</h1>
                <h2 class='member_other-all-name'>ああああああああああ</h2>
              </a>
            </div>
            <div class='member_other-all col-md-4'>
              <a href='/'>
                <p class='member_other-all-img-frame'>
                  <img class='member_other-all-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5094-1.jpg'>
                </p>
                <h1 class='member_other-all-manager'>代表取締役</h1>
                <h2 class='member_other-all-name'>ああああああああああ</h2>
              </a>
            </div>
            <div class='member_other-all col-md-4'>
              <a href='/'>
                <p class='member_other-all-img-frame'>
                  <img class='member_other-all-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5094-1.jpg'>
                </p>
                <h1 class='member_other-all-manager'>代表取締役</h1>
                <h2 class='member_other-all-name'>ああああああああああ</h2>
              </a>
            </div>
          </div>
        </article>
        <!-- / Recommended -->
        <article class='sidebar_article-recommended'>
          <h1 class='sidebar_article-member_title'>Recommended</h1>
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
        <!-- Advertisement (Wide) -->
        <!-- Advertisement (Narrow　300*250) -->
        <article class='sidebar_article-advertisement_narrow'>
          <div class='sidebar_article-advertisement_narrow-all'>
          </div>
          <a href="http://superceo.jp/book/company/i60107/#!3" target="_blank"><img src="http://superceo.jp/book/company/i60107/bnr/i60107.jpg" alt="次世代経営者のCEOスタイルマガジンSUPERCEOで当社特集掲載中" width="1900" height="280" class="content_top-img"/></a>
        </article>
      </section>
    </div>
  </div>
</div>
