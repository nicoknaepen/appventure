<?php
/**
 * @file
 * appventure_portfolio.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function appventure_portfolio_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function appventure_portfolio_node_info() {
  $items = array(
    'portfolio' => array(
      'name' => t('Portfolio'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
