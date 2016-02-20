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
          <ul class='sidebar_phone-size_slide-list'>
            <!-- CloseBtn -->
            <li class='sidebar_phone-size_slide-item'>
              <a class='btnClose' href='/'>CLOSE</a>
            </li>
          </ul>
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
