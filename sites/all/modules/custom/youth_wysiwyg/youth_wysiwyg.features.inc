<?php
/**
 * @file
 * youth_wysiwyg.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function youth_wysiwyg_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "linkit" && $api == "linkit_profiles") {
    return array("version" => "1");
  }
}
