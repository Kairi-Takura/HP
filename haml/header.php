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
          <div class='sidebar_phone-size_slide-title'>Category</div>
          <ul class='sidebar_phone-size_slide-list'>
            <!-- Category -->
            <li class='sidebar_phone-size_slide-category'>
              <a class='sidebar_phone-size_slide-category-link fun' href='/'>おもしろ</a>
            </li>
            <li class='sidebar_phone-size_slide-category'>
              <a class='sidebar_phone-size_slide-category-link education' href='/'>教育</a>
            </li>
            <li class='sidebar_phone-size_slide-category'>
              <a class='sidebar_phone-size_slide-category-link welfare' href='/'>福祉</a>
            </li>
          </ul>
          <!--  -->
          <div class='sidebar_phone-size_slide-title'>迷ったら読む！</div>
          <!-- / content -->
          <div id='content'>
            <div id='content_all'>
              <div class='col-sm-12' id='content_main'>
                <section id='content_section'>
                  <?php query_posts('posts_per_page=2') ?>
                  <?php if(have_posts()): while(have_posts()): the_post(); ?>
                  <article class='content_article content_article_mini'>
                    <a href='/'>
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
                </section>
              </div>
            </div>
            <li>item, 0</li>
            <li>item, 1</li>
            <li>item, 2</li>
            <li>item, 3</li>
            <li>item, 4</li>
            <li>item, 5</li>
            <li>item, 6</li>
            <li>item, 7</li>
            <li>item, 8</li>
            <li>item, 9</li>
            <li>item, 10</li>
            <li>item, 11</li>
            <li>item, 12</li>
            <li>item, 13</li>
            <li>item, 14</li>
            <li>item, 15</li>
            <li>item, 16</li>
            <li>item, 17</li>
            <li>item, 18</li>
            <li>item, 19</li>
            <li>item, 20</li>
            <li>item, 21</li>
            <li>item, 22</li>
            <li>item, 23</li>
            <li>item, 24</li>
            <li>item, 25</li>
            <li>item, 26</li>
            <li>item, 27</li>
            <li>item, 28</li>
            <li>item, 29</li>
            <li>item, 30</li>
            <li>item, 31</li>
            <li>item, 32</li>
            <li>item, 33</li>
            <li>item, 34</li>
            <li>item, 35</li>
            <li>item, 36</li>
            <li>item, 37</li>
            <li>item, 38</li>
            <li>item, 39</li>
            <li>item, 40</li>
            <li>item, 41</li>
            <li>item, 42</li>
            <li>item, 43</li>
            <li>item, 44</li>
            <li>item, 45</li>
            <li>item, 46</li>
            <li>item, 47</li>
            <li>item, 48</li>
            <li>item, 49</li>
            <li>item, 50</li>
            <li>item, 51</li>
            <li>item, 52</li>
            <li>item, 53</li>
            <li>item, 54</li>
            <li>item, 55</li>
            <li>item, 56</li>
            <li>item, 57</li>
            <li>item, 58</li>
            <li>item, 59</li>
            <li>item, 60</li>
            <li>item, 61</li>
            <li>item, 62</li>
            <li>item, 63</li>
            <li>item, 64</li>
            <li>item, 65</li>
            <li>item, 66</li>
            <li>item, 67</li>
            <li>item, 68</li>
            <li>item, 69</li>
            <li>item, 70</li>
            <li>item, 71</li>
            <li>item, 72</li>
            <li>item, 73</li>
            <li>item, 74</li>
            <li>item, 75</li>
            <li>item, 76</li>
            <li>item, 77</li>
            <li>item, 78</li>
            <li>item, 79</li>
            <li>item, 80</li>
            <li>item, 81</li>
            <li>item, 82</li>
            <li>item, 83</li>
            <li>item, 84</li>
            <li>item, 85</li>
            <li>item, 86</li>
            <li>item, 87</li>
            <li>item, 88</li>
            <li>item, 89</li>
            <li>item, 90</li>
            <li>item, 91</li>
            <li>item, 92</li>
            <li>item, 93</li>
            <li>item, 94</li>
            <li>item, 95</li>
            <li>item, 96</li>
            <li>item, 97</li>
            <li>item, 98</li>
            <li>item, 99</li>
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
        <?php wp_nav_menu( $args ); ?>
      </div>
    </div>
  </nav>
</header>
