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
  <div class='footer_sub col-md4 visible-lg visible-lg visible-md'></div>
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
