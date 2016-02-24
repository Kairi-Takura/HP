<!-- main -->
<!DOCTYPE html>
<html lang='ja'>
  <head>
    <!-- Language Choice -->
    <meta charset='utf-8'>
    <!-- Responsive -->
    <meta content='width=device-width' name='viewport'>
    <!-- Keywords -->
    <meta content='' name='keywords'>
    <!-- Description -->
    <meta content='' name='discription'>
    <!-- Css -->
    <link href='<?php echo get_stylesheet_uri(); ?>' media='screen' rel='stylesheet'>
    <!-- Font Awesome -->
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' rel='stylesheet'>
    <!-- jQuery -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
    <!-- Bootstrap -->
    <script src='<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js'></script>
    <!-- Jquey -->
    <script src='<?php echo get_template_directory_uri(); ?>/js/slide_menu.js'></script>
    <script src='<?php echo get_template_directory_uri(); ?>/js/page-top.js'></script>
    <!-- Title -->
    <title>プログラミングスクールを運営する会社のブログ| LOGZ,inc.</title>
    <body <?php body_class(); ?>>
  </head>
</html>
<!-- Header -->
<!-- Memo !important -->
<!-- header,footerなどの一番の親要素のクラス名を振っていないのは、Bootstrapを使用しているための設計上の問題です。 -->
<!-- / header -->
<header>
  <h1 class='header_description'><?php bloginfo('description'); ?></h1>
  <nav class='navbar-default header_navbar'>
    <div class='container-fluid'>
      <div class='navbar-header header_navbar-main'>
        <button class='navbar-toggle collapsed' data-target='#menu-header' data-toggle='collapse' type='button'>
          <p>
            <i class='fa fa-bars'></i>
          </p>
        </button>
        <div id='sidebar_phone-size'></div>
        <div class='sidebar_phone-size_slide'>
          <div class='sidebar_phone-size_btn-menu'>
            <a href='/'>
              <i class='fa fa-meh-o sidebar_phone-size_btn-icon'></i>
            </a>
          </div>
        </div>
        <section></section>
        <nav class='sidebar_phone-size_slide-menu'>
          <div class='sidebar_phone-size_slide-title'>Member</div>
          <div class='sidebar_phone-size_slide-member'>
            <ul class='sidebar_phone-size_slide-member-list row'>
              <li class='sidebar_phone-size_slide-member-item col-xs-4'>
                <a href='/'>
                  <p class='sidebar_phone-size_slide-member-img-frame'>
                    <img class='sidebar_phone-size_slide-member-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5094-1.jpg'>
                  </p>
                  <h1 class='sidebar_phone-size_slide-member-manager'>代表取締役</h1>
                  <h2 class='sidebar_phone-size_slide-member-name'>ああああああああああ</h2>
                </a>
              </li>
              <li class='sidebar_phone-size_slide-member-item col-xs-4'>
                <a href='/'>
                  <p class='sidebar_phone-size_slide-member-img-frame'>
                    <img class='sidebar_phone-size_slide-member-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5094-1.jpg'>
                  </p>
                  <h1 class='sidebar_phone-size_slide-member-manager'>代表取締役</h1>
                  <h2 class='sidebar_phone-size_slide-member-name'>ああああああああああ</h2>
                </a>
              </li>
              <li class='sidebar_phone-size_slide-member-item col-xs-4'>
                <a href='/'>
                  <p class='sidebar_phone-size_slide-member-img-frame'>
                    <img class='sidebar_phone-size_slide-member-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5094-1.jpg'>
                  </p>
                  <h1 class='sidebar_phone-size_slide-member-manager'>代表取締役</h1>
                  <h2 class='sidebar_phone-size_slide-member-name'>ああああああああああ</h2>
                </a>
              </li>
              <li class='sidebar_phone-size_slide-member-item col-xs-4'>
                <a href='/'>
                  <p class='sidebar_phone-size_slide-member-img-frame'>
                    <img class='sidebar_phone-size_slide-member-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5094-1.jpg'>
                  </p>
                  <h1 class='sidebar_phone-size_slide-member-manager'>代表取締役</h1>
                  <h2 class='sidebar_phone-size_slide-member-name'>ああああああああああ</h2>
                </a>
              </li>
              <li class='sidebar_phone-size_slide-member-item col-xs-4'>
                <a href='/'>
                  <p class='sidebar_phone-size_slide-member-img-frame'>
                    <img class='sidebar_phone-size_slide-member-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5094-1.jpg'>
                  </p>
                  <h1 class='sidebar_phone-size_slide-member-manager'>代表取締役</h1>
                  <h2 class='sidebar_phone-size_slide-member-name'>ああああああああああ</h2>
                </a>
              </li>
              <li class='sidebar_phone-size_slide-member-item col-xs-4'>
                <a href='/'>
                  <p class='sidebar_phone-size_slide-member-img-frame'>
                    <img class='sidebar_phone-size_slide-member-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5094-1.jpg'>
                  </p>
                  <h1 class='sidebar_phone-size_slide-member-manager'>代表取締役</h1>
                  <h2 class='sidebar_phone-size_slide-member-name'>ああああああああああ</h2>
                </a>
              </li>
              <div class='sidebar_phone-size_slide-member-show'>
                <a href='/'>
                  <span class='sidebar_phone-size_slide-member-show-content'>すべてのLOGZメンバーを見る</span>
                  <i class='fa fa-angle-right'></i>
                </a>
              </div>
            </ul>
          </div>
          <div class='sidebar_phone-size_slide-title'>Category</div>
          <?php wp_nav_menu(array('theme_location' => 'sidebar-category'));?>
          <div class='sidebar_phone-size_slide-title'>Advertisment</div>
          <ul class='sidebar_phone-size_slide-advertisment_wide'>
            <li class='sidebar_phone-size_slide-advertisment-all'>
              <a href='/'>
                <img src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5129.jpg'>
              </a>
            </li>
          </ul>
          <div class='sidebar_phone-size_slide-title'>Other</div>
          <div class='sidebar_phone-size_slide-other'>
            <?php wp_nav_menu(array('theme_location' => 'sidebar-other'));?>
          </div>
          <div class='sidebar_phone-size_slide-dummy'>
            <!-- CloseBtn -->
            <li class='sidebar_phone-size_slide-item'>
              <a class='btnClose' href='/'>CLOSE</a>
            </li>
          </div>
        </nav>
        <a class='navbar-brand' href='&lt;? echo home_url();?&gt;'>
          <img class='header_navbar-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/logz_inc.png'>
        </a>
      </div>
      <div class='collapse navbar-collapse' id='menu-header'>
        <?php wp_nav_menu(array('theme_location' => 'header'));?>
      </div>
    </div>
  </nav>
</header>
<!-- content -->
<!-- / content -->
<div id='content'>
  <p id='page-top'>
    <a href='#wrap'>
      <i class='fa fa-arrow-up'></i>
    </a>
  </p>
  <img class='content_top-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_4010.jpg'>
  <div id='content_category-bar'>
    <!-- / 施工中 -->
  </div>
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
          <h1 class='sidebar_article-member_title'>Members</h1>
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
            <a href='/'>
              <img src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/IMG_5129.jpg'>
            </a>
          </div>
        </article>
      </section>
    </div>
  </div>
</div>
<!-- footer -->
<!-- / footer -->
<footer class='row'>
  <div class='footer_main col-md-8 visible-lg visible-md'>
    <ul class='row'>
      <li class='col-md-4'>
        <p class='footer_title'>title</p>
        <?php wp_nav_menu(array(
        'theme_location' => 'footer-left',
        )); ?>
      </li>
      <li class='col-md-4'>
        <p class='footer_title'>　</p>
        <?php wp_nav_menu(array(
        'theme_location' => 'footer-center',
        )); ?>
      </li>
      <li class='col-md-4'>
        <p class='footer_title'>　</p>
        <?php wp_nav_menu(array(
        'theme_location' => 'footer-right',
        )); ?>
      </li>
    </ul>
  </div>
  <div class='footer_sub col-md4 visible-lg visible-lg visible-md'></div>
  <div class='footer_bottom row visible-lg visible-md'>
    <div class='footer_bottom-center'>
      <div class='footer_bottom-left col-lg-6'>
        <a class='footer_bottom-link' href='/'>
          <!-- company name img -->
          <img class='footer_bottom-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/logz_inc-white.png'>
        </a>
        <!-- address -->
        <div class='footer_bottom-address'>
          <p class='footer_bottom-address-contents'>株式会社LOGZ　　TEL03-6233-8955</p>
          <p class='footer_bottom-address-contents'>〒160-0008　新宿区三栄町29-6 Fビル 5階</p>
        </div>
      </div>
      <!-- buttom -->
      <div class='footer_bottom-right col-lg-6'>
        <ul class='footer_bottom-right-list visible-lg visible-md'>
          <li class='footer_bottom-right-item'>
            <a href='/'>プライバシーポリシー</a>
          </li>
          <li class='footer_bottom-right-item'>
            <a href='/'>メディア・広告掲載について</a>
          </li>
          <li class='footer_bottom-right-item'>
            <a href='/'>サイトマップ</a>
          </li>
        </ul>
        <copyright class='footer_bottom-right-copyright'>&copy 2015-2016 LOGZ,Inc.</copyright>
      </div>
    </div>
  </div>
  <div class='footer_bottom-address_mini hidden-lg hidden-md'>
    <p class='footer_bottom-address-contents_mini'>株式会社LOGZ</p>
    <p class='footer_bottom-address-contents_mini'>〒160-0008</p>
    <p class='footer_bottom-address-contents_mini'>TEL03-6233-8955</p>
    <p class='footer_bottom-address-contents_mini'>新宿区三栄町29-6 Fビル 5階</p>
    <img class='footer_bottom-address-img_mini' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/rooton.png'>
  </div>
  <div class='footer_bottom_mini hidden-lg hidden-md'>
    <copyright class='footer_bottom-right-copyright_mini'>&copy 2015-2016 LOGZ,Inc.</copyright>
  </div>
</footer>
