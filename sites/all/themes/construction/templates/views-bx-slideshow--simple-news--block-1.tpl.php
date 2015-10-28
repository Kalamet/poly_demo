<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="simple_neww_wrapper">
	<div class="simple_news">
		<span>新闻快讯</span>
	</div>
	<div id="<?php print $view_id; ?>" class="views-bx-slideshow">
		<?php for($i = 0; $i < count($rows); $i+=$sliderows):?>
			<div class="slide <?php if ($classes_array[$i]) { print $classes_array[$i];  } ?>">
				<?php for($j=$i; $j<$i+$sliderows; $j++):?>
				<?php if($rows[$j]) print $rows[$j];?>
				<?php endfor;?>
			</div>
		<?php endfor;?>
	</div>
</div>