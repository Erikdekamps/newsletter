<?php
/**
 * @file
 * newsletter.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function newsletter_user_default_roles() {
  $roles = array();

  // Exported role: Content Manager.
  $roles['Content Manager'] = array(
    'name' => 'Content Manager',
    'weight' => 3,
  );

  return $roles;
}
