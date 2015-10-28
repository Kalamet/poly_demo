<div class="service-teaser <?php print $classes; ?>">

	<div class="image">
		<?php print render($content['field_service_images'][0]);?>
	</div>
	<h3 class="title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h3>

	<?php print render($content['body']); ?>

	<a class="read-more" href="<?php print $node_url; ?>" title="<?php print $title; ?>">View Service Detail</a>

</div>