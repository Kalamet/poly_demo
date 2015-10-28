<div id="node-<?php print $node->nid; ?>" class="sh-blog <?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="blog-image clearfix">
        <?php print render($content['field_article_image']);?>
    </div>
   
	<?php print render($title_prefix); ?>
    <?php if (!$page): ?>
        <h2 class="blog-content-tile" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
     
    <div class="blog-meta">
		<span class="post-date"><i class="fa fa-file-text-o"></i> <span class="entry-date published updated"><?php print format_date($created,'custom','M d, Y');?></span></span>
		<span class="comments-link"><i class="fa fa-comments-o"></i> <a href="<?php print $node_url; ?>#comments"><?php print $comment_count > 0 ? $comment_count : 'No'; ?> Comments</a></span>
	</div>
	
    <div class="blog-content content"<?php print $content_attributes; ?>>
        <?php print render($content['body']);?>
    </div>
    <?php print l('Read more','node/'.$nid,array('attributes'=>array('class'=>array('btn','btn-light','btn-small','left'  ))));?>

</div>