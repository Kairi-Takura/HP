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
                  $loop = new WP_Query(array("post_type" => "members"));
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
                    <a href="http://superceo.jp/book/company/i60107/#!3" target="_blank"><img src="http://superceo.jp/book/company/i60107/bnr/i60107.jpg" alt="次世代経営者のCEOスタイルマガジンSUPERCEOで当社特集掲載中" width="1900" height="280"/></a>
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
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <?php if(is_first()): ?>
      <a href="http://superceo.jp/book/company/i60107/#!3" target="_blank"><img src="http://superceo.jp/book/company/i60107/bnr/i60107.jpg" alt="次世代経営者のCEOスタイルマガジンSUPERCEOで当社特集掲載中" width="1900" height="280" class="content_top-img"/></a>
      <?php
      $cats = get_the_category();
      $cats = $cats[0];
      ?>
      <div id="content_category-bar" class="content_category-bar<?php echo $cats->category_nicename; ?> <?php if ( is_home() ) { echo 'current'; } ?>">
      <?php wp_nav_menu(array('theme_location' => 'top-category'));?>
      </div>
      <?php endif; ?>
      <?php endwhile; endif; ?>
    </header>
  </head>
</html>
