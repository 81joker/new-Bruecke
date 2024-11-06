<?php
global $childPages;
if ($childPages): ?>
  <div class="properties section mt-0">
    <div class="container">
      <div class="row">
        <?php
        foreach ($childPages as $childPage) {
          $thumbnail_url = get_the_post_thumbnail($childPage->ID);
          if ($thumbnail_url) { ?>

            <div class="col-lg-4 col-md-6">
              <div class="item">
                <a href="<?php echo get_permalink($childPage->ID); ?>" class="child-img">
                  <?php echo $thumbnail_url; ?>
                </a>
                <h4><a href="<?php echo get_permalink($childPage->ID); ?>"><?php echo get_the_title($childPage->ID); ?></a></h4>
              </div>
            </div>
        <?php
          }
        }
        ?>
      </div>
    </div>
  </div>
<?php endif; ?>