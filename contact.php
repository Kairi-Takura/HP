<?php
// Template Name: お問い合わせ
?>
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
<?php get_header(); ?>

<div id="content">
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
          <span>お問い合わせ</span>
        </li>
      </ol>
    </div>
  </div>
  <div id="content_all">
    <div id="members_main">
      <div class="members-block">
        <?php wp_nav_menu(array(
        'theme_location' => 'contact',
        )); ?>
      </div>
    </div>
  </div>
</div>
<!-- footer -->
<?php get_footer(); ?>
