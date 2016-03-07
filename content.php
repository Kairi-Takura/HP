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
        <?php query_posts('posts_per_page=18&offset=1');?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article class='content_article content_article-other'>
          <a href="<?php echo get_permalink(); ?>">
          <div class='content_article-all content_article-all-half'>
            <?php the_post_thumbnail('lsize'); ?>
            <?php
            $cats = get_the_category();
            $cats = $cats[0];
            ?>
            <p class="content_article-category content_article-category-half <?php echo $cats->category_nicename; ?>"> <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
            <div class='content_article-content content_article-content-other'>
              <div class='content_article-name content_article-name-half'><?php the_modified_author(); ?></div>
              <p class='content_article-date content_article-date-half'>
                <?php
                $days = 2;
                $today = date_i18n('U');
                $entry = get_the_time('U');
                $elapsed = date('U',($today - $entry)) / 86400;
                if( $days > $elapsed ){
                echo '<span class="new new-half">New</span>';
                }
                ?>
                <time class='content_article-time content_article-time-half' datetime='&lt;?php echo get_the_date();?&gt;'><?php echo get_the_date();?></time>
              </p>
              <h1 class='content_article-title content_article-title-half'><?php the_title(); ?></h1>
              <div class='content_article-warp'></div>
            </div>
            <figcaption class='content_article-overlay content_article-overlay-half'></figcaption>
          </div>
          </a>
        </article>
        <?php endwhile; endif; ?>
      </section>
      <section class='visible-xs visible-sm' id='content_section'>
        <?php query_posts('posts_per_page=18') ?>
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <article class='content_article content_article_mini'>
          <a href="<?php echo get_permalink(); ?>">
          <div class='content_article-all row content_article-all_mini'>
            <div class='content_article-img-all content_article-img-all_mini'>
              <p class='content_article-img-all-in'><?php the_post_thumbnail('ssize'); ?></p>
              <?php
              $cats = get_the_category();
              $cats = $cats[0];
              ?>
            </div>
            <p class=" content_article-category content_article-category-half <?php echo $cats->category_nicename; ?>"> <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
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
          </a>
        </article>
        <?php endwhile; endif; ?>
      </section>
    </div>
    <!-- sidebar -->
    <div class='col-md-4 hidden-xs hidden-sm' id='sidebar'>
      <section id='sidebar_section'>
        <!-- / Members -->
        <h1 class='sidebar_article-member_title'>メンバー</h1>
        <article class='sidebar_article-member'>
          <div class='sidebar_article-member_main'></div>
          <div class='sidebar_article-member_other row'>
            <?php
            $loop = new WP_Query(array("post_type" => "members"));
            if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
            ?>
            <div class='member_other-all col-md-4'>
              <a href="<?php echo get_permalink(); ?>">
              <p class='member_other-all-img-frame'>
                <?php the_post_thumbnail('thumbnail', array( 'class' => 'member_other-all-img' )); ?>
              </p>
              <?php
              $terms = get_the_terms( get_the_ID(), 'members_category' );
              if ( !empty($terms) ) : if ( !is_wp_error($terms) ) :
              ?>
              <?php foreach( $terms as $term ) : ?>
              <h1 class='member_other-all-manager'><?php echo $term->name; ?></h1>
              <?php endforeach; ?>
              <?php endif; endif; ?>
              <h2 class='member_other-all-name'><?php the_title(); ?></h2>
              </a>
            </div>
            <?php endwhile;endif; ?>
            <div class='member_other-all-show'>
              <a href='http://localhost:8888/wordpress/%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC/'>
                <span class='member_other-all-show-content'>すべてのLOGZメンバーを見る</span>
                <i class='fa fa-angle-right'></i>
              </a>
            </div>
          </div>
        </article>
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
