<?php
/**
 * @file
 * youth_members_forum.rules_defaults.inc
 */

/**
 * Implements hook_default_rules_configuration().
 */
function youth_members_forum_default_rules_configuration() {
  $items = array();
  $items['rules_create_user_for_new_member'] = entity_import('rules_config', '{ "rules_create_user_for_new_member" : {
      "LABEL" : "Create user for new member",
      "PLUGIN" : "reaction rule",
      "OWNER" : "rules",
      "REQUIRES" : [ "civicrm", "rules" ],
      "ON" : { "civicrm_membership_create" : [] },
      "DO" : [
        { "civicrm_entity_action_load_create_user" : {
            "USING" : {
              "civicrm_contact" : [ "civicrm-membership:contact-id-contact" ],
              "is_active" : "1",
              "notify" : "1"
            },
            "PROVIDE" : { "civicrm_user" : { "civicrm_user" : "Created or Loaded Drupal User" } }
          }
        },
        { "user_add_role" : { "account" : [ "civicrm-user" ], "roles" : { "value" : { "5" : "5" } } } }
      ]
    }
  }');
  return $items;
}
