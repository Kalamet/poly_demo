<div id="node-<?php print $node->nid; ?>" class="blog-detail <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<div class="blog-header">
		<?php print render($title_prefix); ?>
		<h2 class="blog-content-tile" <?php print $title_attributes; ?>><?php print $title; ?></h2>
		<?php print render($title_suffix); ?>
		
		<div class="blog-meta">
			<?php print $submitted; ?>
			<span class="comments"><?php print t('with') . ' ' .$comment_count . ' ' . t('comment');?></span>
		</div>
    </div>
	<div class="blog-image clearfix">
        <?php print render($content['field_article_image']);?>
    </div>
	
    <div class="blog-content content"<?php print $content_attributes; ?>>
        <?php print render($content['body']);?>
    </div>
    <div class="blog-footer">
		<i class="fa fa-file"></i> <?php print render($content['field_article_category']); ?>
		<i class="fa fa-tag"></i> <?php print render($content['field_tags']); ?>
	</div>
	<div class="entry-author clearfix">
	<?php $uid = user_load($node->uid); ?>
		<div class="entry-author-avatar">
			<?php print $user_picture; ?>
		</div>
		<div class="entry-author-byline"><?php print t('Written by'); ?> <a href="<?php print drupal_get_path_alias('users/'.$node->uid); ?>"><?php print $name;?></a></div>
		<div class="entry-author-bio">
			<?php 
			if (module_exists('profile2')) {  
			  $profile = profile2_load_by_user($uid, 'main');
			  if (isset($profile->field_bio[$node->language][0]['value'])) {
				print ($profile->field_bio[$node->language][0]['value']);
			  }
			}
			?> 
		</div>
	</div>
    <?php print render($content['comments']); ?>
</div>