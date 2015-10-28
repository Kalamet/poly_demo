<?php

/**
 * Definition of title Shortcode
 */

/**
 * Implements hook_shortcode_info
 */
function _title_shortcode_info(&$shortcodes) {
	$shortcodes['title'] = array(
		'title' => t('Title'),
		'description' => t('Create title shortcode'),
		'process callback' => 'superhero_shortcode_title',
		'tips callback' => 'superhero_shortcode_title_tip',
	);
	return $shortcodes;
}

/**
 * title Content
 */
function superhero_shortcode_title($attrs, $text) {
	$attrs = shortcode_attrs(array(
			'class' => ''
		),
		$attrs
	);
	
	return theme('title',array('class' => $attrs['class'], 'content' => $text));
}

/**
 * title theme
 */
function _title_theme(&$themes) {
	$path = drupal_get_path('module', 'superhero_shortcode');
	$themes['title'] = array(
		'template' => 'title',
		'path' => $path . '/theme',
		'pattern' => 'shortcode__',
		'variables' => array(
			'class' => '',
			'content' => ''
		),
		'preprocess functions' => array(
          'template_preprocess',
          '_preprocess_shortcode_title',
      ),
	);
	
	return $themes;
}
function _preprocess_shortcode_title(&$vars) {
  $vars['theme_hook_suggestions'][] = 'shortcode__title';
}
