<!-- Header -->
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
    <script src='<?php echo get_template_directory_uri(); ?>/js/slick.min.js'></script>
    <!-- Title -->
    <title>プログラミングスクールを運営する会社のブログ| LOGZ,inc.</title>
    <body <?php body_class(); ?>>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.5&appId=851721568286826";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
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
                  <?php
                  $loop = new WP_Query(array("post_type" => "members", 'orderby' => 'rand'));
                  if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
                  ?>
                  <li class='sidebar_phone-size_slide-member-item col-xs-4'>
                    <a href='<?php echo get_permalink(); ?>'>
                    <p class='sidebar_phone-size_slide-member-img-frame'>
                      <?php the_post_thumbnail('thumbnail', array( 'class' => 'sidebar_phone-size_slide-member-img' )); ?>
                    </p>
                    <?php
                    $terms = get_the_terms( get_the_ID(), 'members_category' );
                    if ( !empty($terms) ) : if ( !is_wp_error($terms) ) :
                    ?>
                    <?php foreach( $terms as $term ) : ?>
                    <h1 class='sidebar_phone-size_slide-member-manager'><?php echo $term->name; ?></h1>
                    <?php endforeach; ?>
                    <?php endif; endif; ?>
                    <h2 class='sidebar_phone-size_slide-member-name'><?php the_title(); ?></h2>
                    </a>
                  </li>
                  <?php endwhile;endif; ?>
                  <div class='sidebar_phone-size_slide-member-show'>
                    <a href='http://localhost:8888/wordpress/%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC/'>
                      <span class='sidebar_phone-size_slide-member-show-content'>すべてのLOGZメンバーを見る</span>
                      <i class='fa fa-angle-right'></i>
                    </a>
                  </div>
                </ul>
              </div>
              <div class='sidebar_phone-size_slide-title'>Category</div>
              <?php wp_nav_menu(array('theme_location' => 'sidebar-category'));?>
              <div class='sidebar_phone-size_slide-title'>Other</div>
              <div class='sidebar_phone-size_slide-other'>
                <?php wp_nav_menu(array('theme_location' => 'sidebar-other'));?>
              </div>
              <div class='sidebar_phone-size_slide-title-advertisment'>
                <ul class='sidebar_phone-size_slide-advertisment_wide'>
                  <li class='sidebar_phone-size_slide-advertisment-all'>
                    <?php
                    $loop = new WP_Query(array("post_type" => "advertisement"));
                    if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
                    ?>
                    <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>" target="_blank"><?php the_content();?></a>
                    <?php endwhile; endif; ?>
                  </li>
                </ul>
              </div>
              <a href="<? echo home_url();?>">
              <img class='sidebar_phone-size_slide-mini-rooton' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/rooton-1.png'>
              <img class='sidebar_phone-size_slide-mini-text' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/CANo38AUwAEQ8o9.png'>
              </a>
              <div class='sidebar_phone-size_slide-dummy'>
                <!-- CloseBtn -->
                <li class='sidebar_phone-size_slide-item'>
                  <a class='btnClose' href='/'>CLOSE</a>
                </li>
              </div>
            </nav>
            <a href="<? echo home_url();?>" class="navbar-brand">
            <img class='header_navbar-img' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/logz_inc.png'>
            </a>
          </div>
          <div class='collapse navbar-collapse' id='menu-header'>
            <?php wp_nav_menu(array('theme_location' => 'header'));?>
          </div>
        </div>
      </nav>
      <?php
      $loop = new WP_Query(array("post_type" => "header"));
      if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
      ?>
      <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>"><?php the_content();?></a>
      <?php endwhile; endif; ?>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php if(is_first()): ?>
      <?php
      $cats = get_the_category();
      $cats = $cats[0];
      ?>
      <div id="content_category-bar" class="content_category-bar<?php echo $cats->category_nicename; ?> content_category-bar<?php if ( is_home() ) { echo 'current'; } ?>">
      <?php wp_nav_menu(array('theme_location' => 'top-category'));?>
      </div>
      <?php endif; ?>
      <?php endwhile; endif; ?>
    </header>
  </head>
</html>
<!-- content -->
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
<!-- footer -->
<!-- / footer -->
<footer class='row'>
  <div class='footer_main col-md-8 visible-lg visible-md'>
    <ul class='row'>
      <li class='col-md-4'>
        <p class='footer_title'>ABOUT US</p>
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
  <div class='footer_sub col-md-4 visible-lg visible-lg visible-md'>
    <?php echo do_shortcode( '[contact-form-7 id="313" title="投函"]' ); ?>
  </div>
  <div class='footer_bottom row visible-lg visible-md'>
    <div class='footer_bottom-center'>
      <div class='footer_bottom-left col-lg-6'>
        <a href="<? echo home_url();?>" class="footer_bottom-link">
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
        <?php wp_nav_menu(array('theme_location' => 'sidebar-other'));?>
        <copyright class='footer_bottom-right-copyright'>&copy 2015-2016 LOGZ,Inc.</copyright>
      </div>
    </div>
  </div>
  <div class='footer_bottom-address_mini hidden-lg hidden-md'>
    <p class='footer_bottom-address-contents_mini'>株式会社LOGZ</p>
    <p class='footer_bottom-address-contents_mini'>〒160-0008</p>
    <p class='footer_bottom-address-contents_mini'>TEL03-6233-8955</p>
    <p class='footer_bottom-address-contents_mini'>新宿区三栄町29-6 Fビル 5階</p>
    <img class='footer_bottom-address-img_mini' src='http://localhost:8888/wordpress/wp-content/uploads/2016/02/rooton-1.png'>
  </div>
  <div class='footer_bottom_mini hidden-lg hidden-md'>
    <copyright class='footer_bottom-right-copyright_mini'>&copy 2015-2016 LOGZ,Inc.</copyright>
  </div>
</footer>
<script>
  $(function() {
  $('#menu-home-top-category').slick({
  infinite: false,
  dots:false,
  slidesToShow: 6,
  slidesToScroll: 4,
  responsive: [{
  breakpoint: 768,
  settings: {
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  }
  },{
  breakpoint: 480,
  settings: {
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  }
  }
  ]
  });
  });
</script>
<script>
  $(function() {
  $('#members-main-img-mini').slick({
  infinite: true,
  dots:false,
  slidesToShow: 6,
  slidesToScroll: 4,
  responsive: [{
  breakpoint: 768,
  settings: {
  arrows: false,
  slidesToShow: 3,
  slidesToScroll: 1,
  }
  },{
  breakpoint: 480,
  settings: {
  arrows: false,
  slidesToShow: 2,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  }
  }
  ]
  });
  });
</script>
