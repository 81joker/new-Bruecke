<div class="page-heading header-text" style="background-image: url(<?php header_image(); ?>);"  height="<?php echo esc_attr( get_custom_header()->height ); ?>"  width="<?php echo esc_attr( get_custom_header()->width ); ?>">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="<?php echo site_url('/') ?>">Home</a>  /  <?= (($args )?$args:'')?></span>
          <h3><?php the_title() ?></h3>
        </div>
      </div>
    </div>
  </div>