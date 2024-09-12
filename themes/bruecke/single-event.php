<?php
get_header();
while (have_posts()) {
  the_post(); ?>
  <div class="single-property section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-image">
            <!-- <img src="<?php echo get_theme_file_uri('assets/images/single-property.jpg') ?>" alt=""" alt=""> -->

            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="" height="420">
            <?php else: ?>
              <img src="<?php echo get_theme_file_uri('assets/images/default-img.jpg') ?>" alt="<?php the_title_attribute(); ?>">
            <?php endif; ?>

          </div>
          <div class="main-content">
            <span class="category">
              <?php echo get_field('event_type'); ?>
            </span>
            <span class="category ms-2">
              <?php
              if (get_field('event_date')) {
                $eventDate =  get_field('event_date');
                if ($eventDate) {
                  $date = new DateTime($eventDate);
                  echo $date->format('F j, Y');
                }
              }
              ?>
            </span>
            <h4><?php the_title() ?></h4>
            <?php the_content() ?>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Best useful links ?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor kinfolk tonx seitan crucifix 3 wolf moon bicycle rights keffiyeh snackwave wolf same vice, chillwave vexillologist incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How does this work ?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor kinfolk tonx seitan crucifix 3 wolf moon bicycle rights keffiyeh snackwave wolf same vice, chillwave vexillologist incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Why is Villa the best ?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor kinfolk tonx seitan crucifix 3 wolf moon bicycle rights keffiyeh snackwave wolf same vice, chillwave vexillologist incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 py-4">
          <div class="main-button">
            <a href="<?php echo get_post_type_archive_link('event') ?>" class="px-5">Back To Meetings List</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
}
get_footer();

?>