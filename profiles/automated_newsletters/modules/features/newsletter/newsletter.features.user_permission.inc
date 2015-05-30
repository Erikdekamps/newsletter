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

  // Exported permission: 'access administration menu'.
  $permissions['access administration menu'] = array(
    'name' => 'access administration menu',
    'roles' => array(
      'Content Manager' => 'Content Manager',
      'administrator' => 'administrator',
    ),
    'module' => 'admin_menu',
  );

  // Exported permission: 'access content'.
  $permissions['access content'] = array(
    'name' => 'access content',
    'roles' => array(
      'Content Manager' => 'Content Manager',
      'administrator' => 'administrator',
      'anonymous user' => 'anonymous user',
    ),
    'module' => 'node',
  );

  // Exported permission: 'administer nodes'.
  $permissions['administer nodes'] = array(
    'name' => 'administer nodes',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'create newsletter content'.
  $permissions['create newsletter content'] = array(
    'name' => 'create newsletter content',
    'roles' => array(
      'Content Manager' => 'Content Manager',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete any newsletter content'.
  $permissions['delete any newsletter content'] = array(
    'name' => 'delete any newsletter content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'delete own newsletter content'.
  $permissions['delete own newsletter content'] = array(
    'name' => 'delete own newsletter content',
    'roles' => array(
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit any newsletter content'.
  $permissions['edit any newsletter content'] = array(
    'name' => 'edit any newsletter content',
    'roles' => array(
      'Content Manager' => 'Content Manager',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'edit own newsletter content'.
  $permissions['edit own newsletter content'] = array(
    'name' => 'edit own newsletter content',
    'roles' => array(
      'Content Manager' => 'Content Manager',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'flush caches'.
  $permissions['flush caches'] = array(
    'name' => 'flush caches',
    'roles' => array(
      'Content Manager' => 'Content Manager',
      'administrator' => 'administrator',
    ),
    'module' => 'admin_menu',
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

  // Exported permission: 'view own unpublished content'.
  $permissions['view own unpublished content'] = array(
    'name' => 'view own unpublished content',
    'roles' => array(
      'Content Manager' => 'Content Manager',
      'administrator' => 'administrator',
    ),
    'module' => 'node',
  );

  // Exported permission: 'view the administration theme'.
  $permissions['view the administration theme'] = array(
    'name' => 'view the administration theme',
    'roles' => array(
      'Content Manager' => 'Content Manager',
      'administrator' => 'administrator',
    ),
    'module' => 'system',
  );

  return $permissions;
}
