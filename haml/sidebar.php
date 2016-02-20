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
      <h1 class='sidebar_article-member_title'>Members</h1>
      <div id='content'>
        <div class='sidebar_article-content' id='content_main'>
          <section id='content_section'>
            <?php query_posts('posts_per_page=5&orderby=rand') ?>
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <article class='content_article content_article_mini'>
              <a href='/'>
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
    <!-- Advertisement (Wide) -->
    <article class='sidebar_article-advertisement_wide'></article>
    <!-- Advertisement (Narrow　300*250) -->
    <article class='sidebar_article-advertisement_narrow'>
      <div class='sidebar_article-advertisement_narrow-all'>
        <a href='/'>
          <img src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5129.jpg'>
        </a>
      </div>
    </article>
  </section>
</div>
