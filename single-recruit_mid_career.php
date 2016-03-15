<?php get_header(); ?>
<!-- content -->
<div id='content'>
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
          <a href="http://localhost:8888/wordpress/%E6%8E%A1%E7%94%A8%E6%83%85%E5%A0%B1/">
            <span>採用情報</span>
          </a>
        </li>
        <li class="other-bar-item">
          <i class="fa fa-chevron-right"></i>
          <a href="http://localhost:8888/wordpress/%E4%B8%AD%E9%80%94%E6%8E%A1%E7%94%A8%E8%81%B7%E7%A8%AE%E4%B8%80%E8%A6%A7/">
          <span>中途募集職種一覧</span>
          </a>
        </li>
        <li class="other-bar-item">
            <i class="fa fa-chevron-right"></i>
            <span><?php the_title(); ?></span>
        </li>
      </ol>
    </div>
  </div>
  <div class='row' id='content_all'>
    <div id='content_main'>
      <section id='content_section'>
        <!-- singleのここは使い回し -->
        <article id='single_article'>
          <div class='single_article-all ~recruit_mid_career~'>
          <!-- /singleのここは使い回し -->
            <!-- recruit_mid_career start -->
            <div class="recruit-ques_main">
              <ul class="recruit-ques-main-list">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <li class="recruit-ques-main-item">
                  <dl class="recruit-ques-main-item-frame">
                    <dt class="recruit-ques-main-item-q">
                      <div class="recruit-ques-main-item-th">
                        <span class="recruit-ques-main-item-th-icon"><i class="fa fa-briefcase"></i></span>
                      </div>
                      <div class="recruit-ques-main-item-td">
                        <p class="recruit-ques-main-item-td-content"><?php the_title(); ?></p>
                      </div>
                    </dt>
                    <dd class="recruit-ques-main-item-a">
                      <div class="recruit-ques-main-item-th">
                        <span class="recruit-ques-main-item-th-icon"><i class="fa fa-commenting-o"></i></span>
                      </div>
                      <div class="recruit-ques-main-item-td">
                        <div class="recruit-ques-main-item-td-content">
                          <table>
                            <tr>
                              <th>
                                仕事内容
                              </th>
                              <td>
                                <?php echo get_post_meta($post->ID, 'work', true); ?>
                              </td>
                            </tr>
                            <tr>
                              <th>
                                応募資格
                              </th>
                              <td>
                                <?php echo get_post_meta($post->ID, 'competence', true); ?>
                              </td>
                            </tr>
                            <tr>
                              <th>
                                求める人物像
                              </th>
                              <td>
                                <?php echo get_post_meta($post->ID, 'person', true); ?>
                              </td>
                            </tr>
                            <tr>
                              <th>
                                給与
                              </th>
                              <td>
                                <?php echo get_post_meta($post->ID, 'payroll', true); ?>
                              </td>
                            </tr>
                            <tr>
                              <th>
                                勤務地
                              </th>
                              <td>
                                <?php echo get_post_meta($post->ID, 'place', true); ?>
                              </td>
                            </tr>
                            <tr>
                              <th>
                                応募方法
                              </th>
                              <td>
                                <?php echo get_post_meta($post->ID, 'method', true); ?>
                              </td>
                            </tr>
                            <tr>
                              <th>
                                採用基準
                              </th>
                              <td>
                                <?php echo get_post_meta($post->ID, 'criteria', true); ?>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </dd>
                  </dl>
                </li>
                <?php endwhile;endif; ?>
              </ul>
            </div>
            <!-- /recruit_mid_career start -->

            <div class="sidebar-page-menu_mini hidden-lg hidden-md">
              <h1 class="sidebar-page-title_mini">採用情報</h1>
              <?php wp_nav_menu(array('theme_location' => 'sidebar-recruit'));?>
            </div>
            <div class="question">
              <div class="question-content">
                <p class="question-content-title">
                  Web制作のご依頼・ご相談・お見積り
                </p>
                <a href="/">
                  <i class="fa fa-question-circle"></i>
                  お問い合わせはこちら
                </a>
              </div>
            </div>
          </div>
        </article>
      </section>
    </div>
    <?php get_sidebar('recruit'); ?>
  </div>
</div>
<!-- / content -->
<?php get_footer(); ?>
