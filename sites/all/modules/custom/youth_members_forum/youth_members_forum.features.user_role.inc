<?php
/**
 * @file
 * youth_members_forum.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function youth_members_forum_user_default_roles() {
  $roles = array();

  // Exported role: member.
  $roles['member'] = array(
    'name' => 'member',
    'weight' => 2,
  );

  return $roles;
}
