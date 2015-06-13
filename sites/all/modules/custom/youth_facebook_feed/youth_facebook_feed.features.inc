<?php
/**
 * @file
 * youth_facebook_feed.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function youth_facebook_feed_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "feeds" && $api == "feeds_importer_default") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function youth_facebook_feed_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function youth_facebook_feed_node_info() {
  $items = array(
    'facebook_post' => array(
      'name' => t('Facebook Post'),
      'base' => 'node_content',
      'description' => t('These get aggregated from Facebook to your website (and not the other way around).'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
