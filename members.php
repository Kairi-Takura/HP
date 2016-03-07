<?php
// Template Name: メンバー
?>
<?php get_header(); ?>

<div id="content">
  <div class="members-main-img">
    <ul class="members-main-img-list">
      <li class="members-main-img-item"><img src="<?php echo get_post_meta($post->ID, 'img1', true); ?>" /></li>
      <li class="members-main-img-item"><img src="<?php echo get_post_meta($post->ID, 'img2', true); ?>" /></li>
      <li class="members-main-img-item"><img src="<?php echo get_post_meta($post->ID, 'img3', true); ?>" /></li>
      <li class="members-main-img-item"><img src="<?php echo get_post_meta($post->ID, 'img4', true); ?>" /></li>
    </ul>
  </div>
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
          <span>メンバー</span>
        </li>
      </ol>
    </div>
  </div>
  <div id="content_all">
    <div id="members_main">
      <div class="members-block">
        <ul class="members-block-list">
          <?php
          $loop = new WP_Query(array("post_type" => "members"));
          if ( $loop->have_posts() ) : while($loop->have_posts()): $loop->the_post();
          ?>
          <li class="members-block-item">
            <article class="members-block_article">
              <a href="<?php echo get_permalink(); ?>">
                <div class="members-block_article-all">
                  <p class="members-block_article-info">
                    <img src="<?php echo catch_that_image(); ?>" class="members-block_article-img" height="150" width="150"/>
                  </p>
                  <p class="members-block_article-frame">
                    <?php the_post_thumbnail('thumbnail', array( 'class' => 'members-block_article-thumb' )); ?>
                  </p>
                </div>
                <div class="members-block_article-content">
                  <?php
                  $terms = get_the_terms( get_the_ID(), 'members_category' );
                  if ( !empty($terms) ) : if ( !is_wp_error($terms) ) :
                  ?>
                  <?php foreach( $terms as $term ) : ?>
                  <h1 class="members-block_article-content-officer"><?php echo $term->name; ?></h1>
                  <?php endforeach; ?>
                  <?php endif; endif; ?>
                  <h2 class="members-block_article-content-name"><?php the_title(); ?></h2>
                </div>
              </a>
            </article>
          </li>
        <?php endwhile;endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- footer -->
<?php get_footer(); ?>
