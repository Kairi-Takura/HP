<?php
// Template Name: 企業研修
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
          <a href="http://localhost:8888/wordpress/%E3%81%8A%E5%95%8F%E3%81%84%E5%90%88%E3%82%8F%E3%81%9B/">
            <i class="fa fa-chevron-right"></i>
            <span>お問い合わせ</span>
          </a>
        </li>
        <li class="other-bar-item">
          <i class="fa fa-chevron-right"></i>
          <span>企業研修</span>
        </li>
      </ol>
    </div>
  </div>
  <div id="content_all" class="contact-other_all">
    <div id="members_main">
      <div class="collect-all">
        <?php echo do_shortcode( '[contact-form-7 id="301" title="企業研修"]' ); ?>
      </div>
    </div>
  </div>
</div>
<!-- footer -->
<?php get_footer(); ?>
