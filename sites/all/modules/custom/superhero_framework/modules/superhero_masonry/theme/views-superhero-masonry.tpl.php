<?php if ($options['grid_filter']): ?>
  <?php if (isset($categories)): ?>
    <div class="portfolio-filters">
      <ul id="<?php print $filter_id;?>" class="superhero-masonry-filter clearfix" data-option-key="filter">
        <li><a class="active" href="#" data-filter="*"><span><?php print t('Show All') ?></span></a></li>
        <?php foreach ($categories as $key => $c): ?>
          <li>
            <a href="#" class="<?php echo $key; ?>" data-filter="<?php echo $key; ?>"><span><?php echo $c; ?></span></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  <?php endif; ?>
<?php endif; ?>
<div class="superhero-masonry" id="<?php print $view_id; ?>">
  <?php foreach ($rows as $k => $row): ?>
    <?php
    $size = superhero_masonry_size($view_id, $k);
    ?>
    <div class="superhero-masonry-item item-w<?php print $size['width']; ?> item-h<?php print $size['height']; ?>" data-index="<?php print $k ?>">
      <?php print $row; ?>
    </div>
  <?php endforeach; ?>
  <div class="shuffle__sizer"></div>
</div>