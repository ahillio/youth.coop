<?php
/**
 * @file
 * youth_facebook_feed.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function youth_facebook_feed_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create facebook_post content'.
  $permissions['create facebook_post content'] = array(
    'name' => 'create facebook_post content',
    'roles' => array(
      'manager' => 'manager',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any facebook_post content'.
  $permissions['delete any facebook_post content'] = array(
    'name' => 'delete any facebook_post content',
    'roles' => array(
      'manager' => 'manager',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit any facebook_post content'.
  $permissions['edit any facebook_post content'] = array(
    'name' => 'edit any facebook_post content',
    'roles' => array(
      'manager' => 'manager',
    ),
    'module' => 'node',
  );

  return $permissions;
}
