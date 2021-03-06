<?php
/**
 * @file
 * bc_product_feature.features.fe_block_settings.inc
 */

/**
 * Implements hook_default_fe_block_settings().
 */
function bc_product_feature_default_fe_block_settings() {
  $export = array();

  $export['version'] = '2.0';

  $export['views-product_frontpage-balas_block'] = array(
    'cache' => -1,
    'css_class' => '',
    'custom' => 0,
    'delta' => 'product_frontpage-balas_block',
    'module' => 'views',
    'node_types' => array(),
    'pages' => '',
    'roles' => array(),
    'themes' => array(
      'bc_theme' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'bc_theme',
        'weight' => 0,
      ),
      'rubik' => array(
        'region' => '',
        'status' => 0,
        'theme' => 'rubik',
        'weight' => 0,
      ),
    ),
    'title' => '',
    'visibility' => 0,
  );

  return $export;
}
