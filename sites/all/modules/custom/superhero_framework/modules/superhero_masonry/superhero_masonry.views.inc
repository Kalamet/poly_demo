<?php

/**
 * Implements hook_views_plugins
 */
function superhero_masonry_views_plugins() {
  return array(
      'style' => array(
          'superhero_masonry' => array(
              'title' => t('Superhero Masonry Grid'),
              'help' => t('Display content in a masonry grid.'),
              'handler' => 'superhero_masonry_plugin_style_masonry',
              'uses options' => TRUE,
              'uses row plugin' => TRUE,
              'uses row class' => TRUE,
              'type' => 'normal',
              'theme' => 'views_superhero_masonry',
              'theme path' => drupal_get_path('module', 'superhero_masonry') . '/theme',
              'theme file' => 'superhero_masonry.theme.inc',
          ),
      ),
  );
}