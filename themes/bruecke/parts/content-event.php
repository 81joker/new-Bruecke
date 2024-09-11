<div class="section properties">
  <div class="container">
    <ul class="properties-filter">
      <li>
        <a class="is_active" href="#!" data-filter="*">All Meetings</a>
      </li>
      <?php
      $today = date('Ymd');
      $homepageEvents = new WP_Query(array(
        'posts_per_page' => 10,
        'post_type' => 'event',
        'meta_key' => 'event_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC'
      ));
      $loop_counter = 1;
      $lastEventType = '';
      while ($homepageEvents->have_posts()) {
        $homepageEvents->the_post(); ?>
        <?php
        $eventType  = get_field('event_type');
        if ($eventType) {
          $eventType = str_replace(' ', '-', $eventType);
        }

        ?>
        <?php if ($eventType !== $lastEventType): ?>
          <li>
            <a href="#!" data-filter=".<?php echo  $eventType; ?>"><?php echo  get_field('event_type') ?></a>
          </li>
          <?php $lastEventType = $eventType; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      <?php } ?>
    </ul>
    <!-- End Filter -->
    <div class="row properties-box">
      <?php
      $today = date('Ymd');
      $homepageEvents = new WP_Query(array(
        'posts_per_page' => 10,
        'post_type' => 'event',
        'meta_key' => 'event_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'meta_query' => array(
          array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric'
          )
        )
      ));
      $loop_counter = 1;
      while ($homepageEvents->have_posts()) {
        $homepageEvents->the_post(); ?>
        <?php
        $eventType  = get_field('event_type');
        if ($eventType) {
          $eventType = str_replace(' ', '-', $eventType);
        }
        ?>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6  <?php echo $eventType  ?>">
          <div class="item">

            <a href="<?php  echo esc_url(the_permalink());?>" title="<?php the_title_attribute(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <?php echo the_post_thumbnail(array(470, 215)); ?>
              <?php else: ?>
                <img src="<?php echo get_theme_file_uri('assets/images/default-img.jpg') ?>" alt="<?php the_title_attribute(); ?>" height="215" width="370">
              <?php endif; ?>
            </a>

            <span class="category"><?php echo the_title() ?></span>


            <?php $eventDate = new DateTime(get_field('event_date')); ?>
            <h6><?php echo $eventDate->format('M'); ?> <span><?php echo $eventDate->format('d') ?></span></h6>
            <!-- <h4><a href="property-details.html">18 Old Street Miami, OR 97219</a></h4> -->
            <p class="py-3 lh-base">
              <?php if (has_excerpt()) {
                echo get_the_excerpt();
              } else {
                echo wp_trim_words(get_the_content(), 25);
              } ?> <a href="<?php  echo esc_url(the_permalink());?>" class="text-primary">Weiter Lessen</a>
            </p>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <?php $loop_counter++; ?>
        <?php wp_reset_postdata(); ?>

      <?php } ?>
    </div>
    <!-- <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">>></a></li>
          </ul>
        </div>
      </div> -->
    <?php
    if (is_front_page()) : ?>
      <div class="main-button pb-5 text-center">
        <a href="<?php echo get_post_type_archive_link('event') ?>">All Upcoming Meetings</a>
      </div>
    <?php endif; ?>
  </div>
</div>