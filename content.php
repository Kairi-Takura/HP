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
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php if (is_first()) :?>
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
        <?php else: ?>
        <?php query_posts($query_string .'offset=1');?>
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
        <?php wp_reset_query(); ?>
        <?php endif; ?>
        <?php endwhile; endif; ?>
        <div class='next-page'>
          <?php posts_nav_link( '', '', '<span>次の記事一覧を見る</span><i class="fa fa-angle-right"></i>' ); ?>
        </div>
        <?php if(function_exists('wp_pagenavi')) {
        wp_pagenavi();
        } ?>
      </section>
      <section class='visible-xs visible-sm' id='content_section'>
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
        <?php if(function_exists('wp_pagenavi')) {
        wp_pagenavi();
        } ?>
      </section>
      <div id="content-social" class="row">
      <div id="twitter" class="col-md-6 col-xs-12">
      <a class="twitter-timeline" href="https://twitter.com/progroot" data-widget-id="709282795131052032">@progrootさんのツイート</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      </div>
      <div id="facebook" class="col-md-6 col-xs-12">
      <div class="fb-page" data-href="https://www.facebook.com/root0901/" data-tabs="timeline" data-width="400" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/root0901/"><a href="https://www.facebook.com/root0901/">実践型プログラミングスクールroot</a></blockquote></div></div>
      </div>
      </div>
    </div>
    <!-- sidebar -->
    <?php get_sidebar(); ?>
  </div>
</div>
