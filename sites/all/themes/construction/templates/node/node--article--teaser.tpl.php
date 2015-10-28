<div id="node-<?php print $node->nid; ?>" class="blog-teaser <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="blog-image clearfix">
        <?php print render($content['field_article_image']);?>
    </div>
   
	<?php print render($title_prefix); ?>
    <?php if (!$page): ?>
        <h2 class="blog-content-tile" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    
    <div class="blog-meta">
		<?php print $submitted; ?>
		<span class="comments"><?php print t('with') . ' ' .$comment_count . ' ' . t('comment');?></span>
	</div>
	
    <div class="blog-content content"<?php print $content_attributes; ?>>
        <?php print render($content['body']);?>
    </div>
    <?php print l('Continue Reading','node/'.$nid,array('attributes'=>array('class'=>array('more-link', 'left'  ))));?>

</div>