<div class="main-banner">
    <div class="owl-carousel owl-banner">
    <?php for ($i = 1; $i < 4; $i++) : ?>

      <div class="item <?php if ($i == 1) echo 'active'; ?>" style="background-image: url('<?php echo get_theme_mod('slide_image_' . $i) ?>');">
        <div class="header-text">
        <?php
          $string = get_theme_mod('slide_subtitle_' . $i);
          $words = explode(' ', $string);
          $formattedSubtitl = '<em>' . $words[0] . '</em> ' . implode(' ', array_slice($words, 1));
          ?>
          <span class="category"><?php echo $formattedSubtitl; ?></span>
          <h2><?php echo get_theme_mod('slide_title_'. $i); ?></h2>
        </div>
      </div>


      <?php endfor; ?>

    </div>
  </div>