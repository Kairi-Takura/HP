<?php
// Template Name: お問い合わせ
?>
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
