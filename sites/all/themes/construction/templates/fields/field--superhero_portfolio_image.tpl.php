<?php
/**
* @file field.tpl.php
* Default template implementation to display the value of a field.
*
* This file is not used and is here as a starting point for customization only.
* @see theme_field()
*
* Available variables:
* - $items: An array of field values. Use render() to output them.
* - $label: The item label.
* - $label_hidden: Whether the label display is set to 'hidden'.
* - $classes: String of classes that can be used to style contextually through
* CSS. It can be manipulated through the variable $classes_array from
* preprocess functions. The default values can be one or more of the
* following:
* - field: The current template type, i.e., "theming hook".
* - field-name-[field_name]: The current field name. For example, if the
* field name is "field_description" it would result in
* "field-name-field-description".
* - field-type-[field_type]: The current field type. For example, if the
* field type is "text" it would result in "field-type-text".
* - field-label-[label_display]: The current label position. For example, if
* the label position is "above" it would result in "field-label-above".
*
* Other variables:
* - $element['#object']: The entity to which the field is attached.
* - $element['#view_mode']: View mode, e.g. 'full', 'teaser'...
* - $element['#field_name']: The field name.
* - $element['#field_type']: The field type.
* - $element['#field_language']: The field language.
* - $element['#field_translatable']: Whether the field is translatable or not.
* - $element['#label_display']: Position of label display, inline, above, or
* hidden.
* - $field_name_css: The css-compatible field name.
* - $field_type_css: The css-compatible field type.
* - $classes_array: Array of html class attribute values. It is flattened
* into a string within the variable $classes.
*
* @see template_preprocess_field()
* @see theme_field()
*
* @ingroup themeable
*/

$layout = isset($element['#object']->field_portfolio_layout) ? $element['#object']->field_portfolio_layout['und'][0]['value'] : 'wide';
$gid = drupal_html_id('gallery');
?>
<div class="layout-<?php print $layout; ?> <?php print $classes; ?>"<?php print $attributes; ?>>
	<?php if (!$label_hidden): ?>
	<div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
	<?php endif; ?>
<?php if($layout == 'wide') : ?>
	<div class="big-image">
		<?php $path = file_create_url($items[0]['#item']['uri']); ?>
		<img src="<?php print $path; ?>" alt="" title="" /> 
	</div>

	<?php $count = count($items); ?>
	<div class="field-items image-thumbnails"<?php print $content_attributes; ?>>
		<ul id="<?php print $gid; ?>" class="gallery list-unstyled list-inline">
		<?php foreach ($items as $delta => $item): ?>
			<?php $path = file_create_url($item['#item']['uri']); ?>
			<li class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?> style="width: calc(100% / <?php print $count; ?>);"><a href="<?php print $path; ?>" rel="lightbox[<?php print $gid; ?>]"><?php print render($item); ?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>
<?php else : ?>
	<div class="big-image">
		<?php $path = file_create_url($items[0]['#item']['uri']); ?>
		<img class="first" src="<?php print $path; ?>" alt="" title="" /> 
		<?php if(isset($items[1])) :
			$path2 = file_create_url($items[1]['#item']['uri']); ?>
			<img class="second" src="<?php print $path2; ?>" alt="" title="" /> 
		<?php endif; ?>
	</div>
	
	<?php $count = count($items)-2; ?>
	<div class="field-items image-thumbnails"<?php print $content_attributes; ?>>
		<ul id="<?php print $gid; ?>" class="gallery list-unstyled list-inline">
		<?php foreach ($items as $delta => $item): ?>
			<?php if($delta > 1) : ?>
				<?php $path = file_create_url($item['#item']['uri']); ?>
				<li class="field-item <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?> style="width: calc(100% / <?php print $count; ?>);"><a href="<?php print $path; ?>" rel="lightbox[<?php print $gid; ?>]"><?php print render($item); ?></a></li>
			<?php endif; ?>
		<?php endforeach; ?>
		</ul>
	</div>
<?php endif; ?>
</div> 
