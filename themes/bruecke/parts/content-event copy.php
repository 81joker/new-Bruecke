<section class="meetings-page" id="meetings">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading text-center pt-5">
          <h2>Upcoming Meetings</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="filters">
              <ul>
                <li data-filter="*" class="active">All Meetings</li>
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
                    <li data-filter=".<?php echo  $eventType; ?>" class="my-2"><?php echo  get_field('event_type') ?></li>
                    <?php $lastEventType = $eventType; ?>
                  <?php endif; ?>
                  <?php wp_reset_postdata(); ?>

                <?php } ?>
              </ul>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="row grid">
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

                <div class="col-lg-4 templatemo-item-col all <?php echo $eventType  ?>">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <?php if (has_post_thumbnail()) : ?>
                          <?php echo the_post_thumbnail(array(470, 215)); ?>
                          <?php else: ?>
                         <img src="<?php echo get_theme_file_uri('assets/images/default-img.jpg') ?>" alt="<?php the_title_attribute(); ?>" height="215" width="370">
                         <?php endif; ?>
                        </a>                  
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <?php $eventDate = new DateTime(get_field('event_date')); ?>
                        <h6><?php echo $eventDate->format('M'); ?> <span><?php echo $eventDate->format('d') ?></span></h6>
                      </div>
                      <a href="meeting-details.html">
                        <h4><?php echo the_title() ?></h4>
                      </a>
                      <p>
                        <?php if (has_excerpt()) {
                          echo get_the_excerpt();
                        } else {
                          echo wp_trim_words(get_the_content(), 9);
                        } ?> <a href="<?php the_permalink(); ?>" class="">Lessen weiter</a>
                      </p>
                    </div>
                  </div>
                </div>
                <?php $loop_counter++; ?>
                <?php wp_reset_postdata(); ?>

              <?php } ?>
            </div>
            <?php
            if (is_front_page()) : ?>
              <div class="main-button-red pb-5">
                <a href="<?php echo get_post_type_archive_link('event') ?>">All Upcoming Meetings</a>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>