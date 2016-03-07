<?php get_header(); ?>

<div id="content" class="single-members-all">
  <?php if(have_posts()): while(have_posts()): the_post(); ?>
  <div class="members-main-img">
    <ul class="members-main-img-list">
      <li class="members-main-img-item"><img src="<?php echo get_post_meta($post->ID, 'img1', true); ?>" /></li>
      <li class="members-main-img-item"><img src="<?php echo get_post_meta($post->ID, 'img2', true); ?>" /></li>
      <li class="members-main-img-item"><img src="<?php echo get_post_meta($post->ID, 'img3', true); ?>" /></li>
      <li class="members-main-img-item"><img src="<?php echo get_post_meta($post->ID, 'img4', true); ?>" /></li>
    </ul>
  </div>
    <ul id="members-main-img-mini">
      <li class="members-main-img-item"><img src="<?php echo get_post_meta($post->ID, 'img1', true); ?>" /></li>
      <li class="members-main-img-item"><img src="<?php echo get_post_meta($post->ID, 'img2', true); ?>" /></li>
      <li class="members-main-img-item"><img src="<?php echo get_post_meta($post->ID, 'img3', true); ?>" /></li>
      <li class="members-main-img-item"><img src="<?php echo get_post_meta($post->ID, 'img4', true); ?>" /></li>
    </ul>
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
            <a href="http://localhost:8888/wordpress/%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC-2/">
            <span>メンバー</span>
          </a>
        </li>
        <li class="other-bar-item">
          <i class="fa fa-chevron-right"></i>
          <span><?php the_title(); ?></span>
        </li>
      </ol>
    </div>
  </div>
  <div id="content_all">
    <div id="members_main">
      <div class="pagenation">
			<span class="prev">
				<?php
				$previous_post = get_previous_post();
				$pre_post_title = $previous_post->post_title;
				if ( mb_strlen( $pre_post_title ) > 18 ) { $pre_post_title = mb_substr( $pre_post_title, 0, 18).'...'; }
				if ( !empty( $previous_post ) ): ?>
					<a href="<?php echo esc_url( get_permalink( $previous_post->ID ) ); ?>" title="<?php echo $previous_post->post_title; ?>"><i class="fa fa-chevron-left"></i> <?php echo $pre_post_title; ?></a>
				<?php endif; ?>
			</span>
      <span class="member-home">
        <a href="http://localhost:8888/wordpress/%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC-2/">
          <i class="fa fa-history"></i>
          一覧に戻る
        </a>
      </span>
			<span class="next">
				<?php
				$next_post = get_next_post();
				$next_post_title = $next_post->post_title;
				if ( mb_strlen( $next_post_title ) > 18 ) { $next_post_title = mb_substr( $next_post_title, 0, 18).'...'; }
				if ( !empty( $next_post ) ): ?>
					<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" title="<?php echo $next_post->post_title; ?>"><?php echo $next_post_title; ?> <i class="fa fa-chevron-right"></i></a>
				<?php endif; ?>
			</span>
		</div>
      <div class="single-members-main row">
        <div class="single-members-heading col-sm-5">
          <p class="single-members-heading-name">
            <?php the_title(); ?>
          </p>
          <p class="single-members-heading-name-kana">
            <?php echo get_post_meta($post->ID, 'kana', true); ?>
          </p>
          <?php
          $terms = get_the_terms( get_the_ID(), 'members_category' );
          if ( !empty($terms) ) : if ( !is_wp_error($terms) ) :
          ?>
          <?php foreach( $terms as $term ) : ?>
          <p class="single-members-heading-officer"><?php echo $term->name; ?>
          </p>
          <?php endforeach; ?>
          <?php endif; endif; ?>
          <div class="single-members-heading-social">
            <ul class="single-members-heading-social-list">
              <li class="single-members-heading-social-item">
                <a href="<?php echo get_post_meta($post->ID, 'twitter', true); ?>" >
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="single-members-heading-social-item">
                <a href="<?php echo get_post_meta($post->ID, 'facebook', true); ?>">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="single-members-heading-likes">
            <h2 class="single-members-heading-likes-heading">好きなこと</h2>
            <?php echo get_post_meta($post->ID, 'likes', true); ?>
          </div>
        </div>
        <div class="single-members-all col-sm-7">
          <p class="single-members-main-img">
            <img src="<?php echo get_post_meta($post->ID, 'img', true); ?>">
          </p>
          <div class="single-members-content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="pagenation">
    <span class="prev">
      <?php
      $previous_post = get_previous_post();
      $pre_post_title = $previous_post->post_title;
      if ( mb_strlen( $pre_post_title ) > 18 ) { $pre_post_title = mb_substr( $pre_post_title, 0, 18).'...'; }
      if ( !empty( $previous_post ) ): ?>
        <a href="<?php echo esc_url( get_permalink( $previous_post->ID ) ); ?>" title="<?php echo $previous_post->post_title; ?>"><i class="fa fa-chevron-left"></i> <?php echo $pre_post_title; ?></a>
      <?php endif; ?>
    </span>
    <span class="member-home">
      <a href="http://localhost:8888/wordpress/%E3%83%A1%E3%83%B3%E3%83%90%E3%83%BC-2/">
        <i class="fa fa-history"></i>
        一覧に戻る
      </a>
    </span>
    <span class="next">
      <?php
      $next_post = get_next_post();
      $next_post_title = $next_post->post_title;
      if ( mb_strlen( $next_post_title ) > 18 ) { $next_post_title = mb_substr( $next_post_title, 0, 18).'...'; }
      if ( !empty( $next_post ) ): ?>
        <a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" title="<?php echo $next_post->post_title; ?>"><?php echo $next_post_title; ?> <i class="fa fa-chevron-right"></i></a>
      <?php endif; ?>
    </span>
  </div><!-- .pagenav -->
  </div>
  <?php endwhile;endif; ?>
</div>

<!-- footer -->
<?php get_footer(); ?>
