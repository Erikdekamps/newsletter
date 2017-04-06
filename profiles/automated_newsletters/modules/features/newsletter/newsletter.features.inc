<?php
/**
 * @file
 * newsletter.features.inc
 */

/**
 * Implements hook_image_default_styles().
 */
function newsletter_image_default_styles() {
  $styles = array();

  // Exported image style: w250.
  $styles['w250'] = array(
    'label' => 'w250',
    'effects' => array(
      2 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 250,
          'height' => '',
          'upscale' => 0,
        ),
        'weight' => 1,
      ),
    ),
  );

  // Exported image style: w540.
  $styles['w540'] = array(
    'label' => 'w540',
    'effects' => array(
      1 => array(
        'name' => 'image_scale',
        'data' => array(
          'width' => 540,
          'height' => '',
          'upscale' => 0,
        ),
        'weight' => 1,
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function newsletter_node_info() {
  $items = array(
    'newsletter' => array(
      'name' => t('Newsletter'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}

/**
 * Implements hook_paragraphs_info().
 */
function newsletter_paragraphs_info() {
  $items = array(
    'header' => array(
      'name' => 'Header',
      'bundle' => 'header',
      'locked' => '1',
    ),
    'image_left' => array(
      'name' => 'Image left',
      'bundle' => 'image_left',
      'locked' => '1',
    ),
    'image_middle' => array(
      'name' => 'Image middle',
      'bundle' => 'image_middle',
      'locked' => '1',
    ),
    'image_right' => array(
      'name' => 'Image right',
      'bundle' => 'image_right',
      'locked' => '1',
    ),
    'regular' => array(
      'name' => 'Regular',
      'bundle' => 'regular',
      'locked' => '1',
    ),
    'two_images' => array(
      'name' => 'Two images',
      'bundle' => 'two_images',
      'locked' => '1',
    ),
  );
  return $items;
}
