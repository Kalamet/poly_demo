<div class="testimonial <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<div class="testimonial-content">
		<?php print render($content['body']); ?>
	</div>
	<div class="testimonial-header clearfix">
		<div class="testimonial-avatar"><?php print render($content['field_testimonial_image']); ?></div>
		<div class="testimonial-name font-heading"><?php print $title; ?></div>
	</div>
</div>