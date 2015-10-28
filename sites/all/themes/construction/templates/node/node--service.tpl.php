<div id="node-<?php print $node->nid; ?>" class="service <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<div class="clearfix">
		<?php print render($content['field_service_images']); ?>
	</div>
	<div class="row">
		<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
			<div class="service-item">
				<?php print render($content['field_service_project']); ?>
			</div>
			<div class="service-item">
				<?php print render($content['field_coordination_process']); ?>
			</div>
		</div>
		<div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
			<div class="service-item">
				<?php print render($content['field_reporting_control']); ?>
			</div>
			<div class="service-item">
				<?php print render($content['field_commissioning_project']); ?>
			</div>
			<div class="service-item">
				<?php print render($content['field_service_brochure']); ?>
				<?php print render($content['field_service_attach_file']); ?>
			</div>
		</div>
	</div>
	
</div>