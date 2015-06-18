<?php
/**
 * @file
 * youth_facebook_feed.feeds_tamper_default.inc
 */

/**
 * Implements hook_feeds_tamper_default().
 */
function youth_facebook_feed_feeds_tamper_default() {
  $export = array();

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'facebook_rss_parser-description-find_replace';
  $feeds_tamper->importer = 'facebook_rss_parser';
  $feeds_tamper->source = 'description';
  $feeds_tamper->plugin_id = 'find_replace';
  $feeds_tamper->settings = array(
    'find' => 'href="/USACYC',
    'replace' => 'href="https://facebook.com/USACYC',
    'case_sensitive' => 0,
    'word_boundaries' => 0,
    'whole' => 0,
    'regex' => FALSE,
    'func' => 'str_ireplace',
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Find replace';
  $export['facebook_rss_parser-description-find_replace'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'facebook_rss_parser-description-find_replace_profile_id';
  $feeds_tamper->importer = 'facebook_rss_parser';
  $feeds_tamper->source = 'description';
  $feeds_tamper->plugin_id = 'find_replace';
  $feeds_tamper->settings = array(
    'find' => '/profile.php',
    'replace' => 'https://facebook.com/profile.php',
    'case_sensitive' => 0,
    'word_boundaries' => 0,
    'whole' => 0,
    'regex' => FALSE,
    'func' => 'str_ireplace',
  );
  $feeds_tamper->weight = 1;
  $feeds_tamper->description = 'Find replace';
  $export['facebook_rss_parser-description-find_replace_profile_id'] = $feeds_tamper;

  return $export;
}
