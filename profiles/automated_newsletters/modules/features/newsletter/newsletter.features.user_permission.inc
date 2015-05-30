<?php
/**
 * @file
 * newsletter.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function newsletter_user_default_permissions() {
  $permissions = array();

  // Exported permission: 'create newsletter content'.
  $permissions['create newsletter content'] = array(
    'name' => 'create newsletter content',
    'roles' => array(
      'Content Manager' => 'Content Manager',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any newsletter content'.
  $permissions['delete any newsletter content'] = array(
    'name' => 'delete any newsletter content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'delete own newsletter content'.
  $permissions['delete own newsletter content'] = array(
    'name' => 'delete own newsletter content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'edit any newsletter content'.
  $permissions['edit any newsletter content'] = array(
    'name' => 'edit any newsletter content',
    'roles' => array(),
    'module' => 'node',
  );

  // Exported permission: 'edit own newsletter content'.
  $permissions['edit own newsletter content'] = array(
    'name' => 'edit own newsletter content',
    'roles' => array(
      'Content Manager' => 'Content Manager',
    ),
    'module' => 'node',
  );

  // Exported permission: 'use text format filtered_html'.
  $permissions['use text format filtered_html'] = array(
    'name' => 'use text format filtered_html',
    'roles' => array(
      'Content Manager' => 'Content Manager',
      'administrator' => 'administrator',
      'anonymous user' => 'anonymous user',
      'authenticated user' => 'authenticated user',
    ),
    'module' => 'filter',
  );

  return $permissions;
}
