<section class="parallax-wrapper content-absolute-centered" data-image="<?php print $image_src; ?>" data-width="<?php print $image_info['width']; ?>" data-height="<?php print $image_info['height']; ?>" data-cover-ratio="<?php print $cover_ratio; ?>" data-speed="<?php print $speed; ?>">
  <?php if (isset($content)): ?>

    <div class="parallax-content content">
      <div class="inner">
        <div class="vertical-content">
          <div class="l-container">
            <?php print render($content); ?>
          </div>
        </div>
      </div>

    </div>
  <?php endif; ?>
</section>
