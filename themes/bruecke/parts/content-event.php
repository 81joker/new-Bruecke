<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <span class="breadcrumb"><a href="#">Home</a> / Properties</span>
          <h3>Properties</h3>
        </div>
      </div>
    </div>
  </div>

  <div class="section properties">
    <div class="container">

    <!-- Start Filter -->
      <!-- <ul class="properties-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        <li>
          <a href="#!" data-filter=".adv">Apartment</a>
        </li>
        <li>
          <a href="#!" data-filter=".str">Villa House</a>
        </li>
        <li>
          <a href="#!" data-filter=".rac">Penthouse</a>
        </li>
      </ul> -->

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

          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <?php if (has_post_thumbnail()) : ?>
                          <?php echo the_post_thumbnail(array(470, 215)); ?>
                          <?php else: ?>
                         <img src="<?php echo get_theme_file_uri('assets/images/default-img.jpg') ?>" alt="<?php the_title_attribute(); ?>" height="215" width="370">
                         <?php endif; ?>
            </a>  

            <span class="category"><?php echo the_title() ?></span>
            <h6>$2.264.000</h6>
            <h4><a href="property-details.html">18 Old Street Miami, OR 97219</a></h4>
            <ul>
              <li>Bedrooms: <span>8</span></li>
              <li>Bathrooms: <span>8</span></li>
              <li>Area: <span>545m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>6 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <?php $loop_counter++; ?>
                <?php wp_reset_postdata(); ?>

              <?php } ?>
        <!-- <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-02.jpg" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$1.180.000</h6>
            <h4><a href="property-details.html">54 New Street Florida, OR 27001</a></h4>
            <ul>
              <li>Bedrooms: <span>6</span></li>
              <li>Bathrooms: <span>5</span></li>
              <li>Area: <span>450m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>8 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 adv rac">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-03.jpg" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$1.460.000</h6>
            <h4><a href="property-details.html">26 Mid Street Portland, OR 38540</a></h4>
            <ul>
              <li>Bedrooms: <span>5</span></li>
              <li>Bathrooms: <span>4</span></li>
              <li>Area: <span>225m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>10 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 str">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-04.jpg" alt=""></a>
            <span class="category">Apartment</span>
            <h6>$584.500</h6>
            <h4><a href="property-details.html">12 Hope Street Portland, OR 12650</a></h4>
            <ul>
              <li>Bedrooms: <span>4</span></li>
              <li>Bathrooms: <span>3</span></li>
              <li>Area: <span>125m2</span></li>
              <li>Floor: <span>25th</span></li>
              <li>Parking: <span>2 cars</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-05.jpg" alt=""></a>
            <span class="category">Penthouse</span>
            <h6>$925.600</h6>
            <h4><a href="property-details.html">34 Hope Street Portland, OR 42680</a></h4>
            <ul>
              <li>Bedrooms: <span>4</span></li>
              <li>Bathrooms: <span>4</span></li>
              <li>Area: <span>180m2</span></li>
              <li>Floor: <span>38th</span></li>
              <li>Parking: <span>2 cars</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-06.jpg" alt=""></a>
            <span class="category">Modern Condo</span>
            <h6>$450.000</h6>
            <h4><a href="property-details.html">22 Hope Street Portland, OR 16540</a></h4>
            <ul>
              <li>Bedrooms: <span>3</span></li>
              <li>Bathrooms: <span>2</span></li>
              <li>Area: <span>165m2</span></li>
              <li>Floor: <span>26th</span></li>
              <li>Parking: <span>3 cars</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac str">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-03.jpg" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$980.000</h6>
            <h4><a href="property-details.html">14 Mid Street Miami, OR 36450</a></h4>
            <ul>
              <li>Bedrooms: <span>8</span></li>
              <li>Bathrooms: <span>8</span></li>
              <li>Area: <span>550m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>12 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-02.jpg" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$1.520.000</h6>
            <h4><a href="property-details.html">26 Old Street Miami, OR 12870</a></h4>
            <ul>
              <li>Bedrooms: <span>12</span></li>
              <li>Bathrooms: <span>15</span></li>
              <li>Area: <span>380m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>14 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 properties-items col-md-6 rac adv">
          <div class="item">
            <a href="property-details.html"><img src="assets/images/property-01.jpg" alt=""></a>
            <span class="category">Luxury Villa</span>
            <h6>$3.145.000</h6>
            <h4><a href="property-details.html">34 New Street Miami, OR 24650</a></h4>
            <ul>
              <li>Bedrooms: <span>10</span></li>
              <li>Bathrooms: <span>12</span></li>
              <li>Area: <span>860m2</span></li>
              <li>Floor: <span>3</span></li>
              <li>Parking: <span>10 spots</span></li>
            </ul>
            <div class="main-button">
              <a href="property-details.html">Schedule a visit</a>
            </div>
          </div>
        </div> -->
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a class="is_active" href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">>></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
