<div id="node-<?php print $node->nid; ?>" class="team team-teaser <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<div class="team-image clearfix">
		<?php print render($content['field_team_image']); ?>
	</div>
	<div class="team-desc-warp">
		<div class="team-title clearfix">
			<h3 class="block-title header"><?php print $title; ?></h3>
			<span class="position"><?php print render($content['field_team_job']); ?></span>
		</div>
		<div class="team-desc">
			<?php print render($content['body']); ?>
		</div>
	</div>
</div>