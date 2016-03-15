<div class='col-md-4 hidden-xs hidden-sm' id='sidebar'>
  <section id='sidebar_section'>
    <!--  sidebar-page -->

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
            </a>
            </article>
            <?php endwhile; endif; ?>
          </section>
        </div>
      </div>
    </article>

    <!-- Advertisement-->
    <article class='sidebar_article-advertisement_narrow'>
      <div class='sidebar_article-advertisement_narrow-all'>
        <?php
        $loop = new WP_Query(array("post_type" => "advertisement"));
        if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
        ?>
        <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" target="_blank"><?php the_content();?></a>
        <?php endwhile; endif; ?>
      </div>
    </article>
  </section>
</div>
