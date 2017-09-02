<?php
/**
 * @var $slides - an array of slide content. Each element in this array will be
 * either a string of content to be printed - or a renderable array
 * which will be `rendered` and then printed.
 *
 * @var $attributes - an array of attributes including classes. Implement
 * hook_preprocess_HOOK() to and change this to do things like adding custom
 * animations.
 *
 * @var $id - an id for the slideshow calculated in
 * wallop_preprocess_wallop_slideshow().
 *
 * @var $show_controls - boolean flag indicating whether to show prev/next
 *
 * @var $settings - JSON encoded slideshow settings.
 */
?>
<div id="<?php print $id; ?>" class="<?php print drupal_attributes($attributes) ?>">
  <div class="Wallop-list">
    <?php foreach($slides as $slide) : ?>
      <div class="Wallop-item">
        <?php
        is_array($slide)
          ? print drupal_render($slide)
          : print $slide;
        ?>
      </div>
    <?php endforeach; ?>
  </div>
  <?php if($show_controls) : ?>
    <button class="Wallop-buttonPrevious">Previous</button>
    <button class="Wallop-buttonNext">Next</button>
  <?php endif; ?>
</div>