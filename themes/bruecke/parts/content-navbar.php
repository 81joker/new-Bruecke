<!-- ***** Preloader Start ***** -->
<!-- <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
    </div>
  </div> -->
<!-- ***** Preloader End ***** -->

<div class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <ul class="info">
          <li><i class="fa fa-envelope"></i> info@company.com</li>
          <li><i class="fa fa-map"></i> Sunny Isles Beach, FL 33160</li>
        </ul>
      </div>
      <div class="col-lg-4 col-md-4">
        <ul class="social-links">
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="https://x.com/minthu" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="<?php echo esc_url(home_url()); ?>" class="logo">
          <?php
            if(function_exists('the_custom_logo')){
              $custom_logo_id     = get_theme_mod( 'custom_logo' );
              $logo = wp_get_attachment_image_src($custom_logo_id, 'full' );
            }
          ?>
          <img src="<?php echo $logo[0] ?>" class="img-fluid" alt="">
            </a>
          <!-- ***** Logo End ***** -->
          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li>
              <a href="<?php echo esc_url(home_url()); ?>" <?php if (is_front_page()) echo 'class="active"'; ?>>Home</a>
            </li>
            <li><a href="<?php echo site_url('/uber-uns') ?>" <?php if (is_page('uber-uns') or wp_get_post_parent_id(0) == 16) echo 'class="active"' ?>>Über Uns</a></li>
            <li class="scroll-to-section"><a href="#courses">Services</a></li>
            <li class="scroll-to-section"><a href="<?php echo get_post_type_archive_link('event'); ?>" <?php if (get_post_type() == 'event') echo 'class="active"' ?>>Events</a></li>
            <li class="scroll-to-section"><a href="<?php echo site_url('/kontakt') ?>" <?php if (is_page('kontakt') or wp_get_post_parent_id(0) == 86) echo 'class="active"' ?>>kontakt</a></li>
            <li><a href="#"><i class="fa fa-calendar"></i> Schedule a visit</a></li>
          </ul>
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>
<!-- ***** Header Area End ***** -->