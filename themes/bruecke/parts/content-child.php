<?php
global $childPages;
if ($childPages): ?>
  <div class="properties section mt-0">
    <div class="container">
      <div class="row">
        <?php
        foreach ($childPages as $childPage) {
          $thumbnail_url = get_the_post_thumbnail($childPage->ID);
          $post = get_post($childPage->ID);

          if ($thumbnail_url) { ?>

            <div class="col-lg-4 col-md-6">
              <div class="item child-item">
                <a href="<?php echo get_permalink($childPage->ID); ?>" class="child-img">
                  <div class="hover-overlay">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="icon bi bi-plus" viewBox="0 0 16 16">
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                    </svg>
                  </div>
                  <div class="taxonomy-term__content">
                  <?php echo apply_filters('the_content', $post->post_content); ?>
                  </div>
                  <div class="taxonomy-term__image">
                    <?php echo $thumbnail_url; ?>
                  </div>
                </a>
                <h4 class="taxonomy-term__title"><a href="<?php echo get_permalink($childPage->ID); ?>"><?php echo get_the_title($childPage->ID); ?></a></h4>
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