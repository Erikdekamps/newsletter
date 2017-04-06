<?php
/**
 * @file
 * File for theming.
 */

// The includes.
include_once 'includes/functions.inc';

function newsletter_preprocess_entity(&$variables, $hook) {
  $function = 'newsletter_preprocess_' . $variables['entity_type'];
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}

function newsletter_preprocess_paragraphs_item(&$variables, $hook) {
  $elements = $variables['elements'];

  $function = 'newsletter_preprocess_paragraphs_item__' . $elements['#bundle'];
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}

function newsletter_preprocess_paragraphs_item__header(&$variables) {

  // Check if the title is set.
  if (isset($variables['field_shared_title'])) {
    if (isset($variables['field_shared_title'][0]['safe_value'])) {
      // Set a new variable for the title.
      $variables['title'] = newsletter_convert_special_characters($variables['field_shared_title'][0]['safe_value']);
    }
  }

  // Check if the border is set.
  if (isset($variables['field_shared_bottom_border'][0]['value'])) {
    // Check if there needs to be a border.
    if ($variables['field_shared_bottom_border'][0]['value'] == 1) {
      // Set a variable for the border.
      $variables['border'] = '<tr><td colspan="3" height="23"></td></tr>';
    }
  }
}

function newsletter_preprocess_paragraphs_item__image_left(&$variables) {

  // Check if the title is set.
  if (isset($variables['field_shared_title'])) {
    if (isset($variables['field_shared_title'][0]['safe_value'])) {
      // Set a new variable for the title.
      $variables['title'] = newsletter_convert_special_characters($variables['field_shared_title'][0]['safe_value']);
    }
  }

  // Check if the image is set.
  if (isset($variables['field_shared_image'])) {
    // Get the image uri.
    $uri = $variables['field_shared_image'][0]['uri'];
    // Check the image uri.
    if (isset($uri) && !empty($uri)) {
      // Set a variable for the image.
      $image = theme('image', array('path' => $uri));
      $variables['image'] = $image;
    }
  }

  // Check if the text is set.
  if (isset($variables['field_shared_text'][0]['safe_value'])) {

    // Convert special characters.
    $variables['text'] = newsletter_convert_special_characters($variables['field_shared_text'][0]['safe_value']);

    // Change the anchors to become target blank.
    $variables['text'] = newsletter_convert_links_to_target_blank($variables['text']);
  }

  // Check if the border is set.
  if (isset($variables['field_shared_bottom_border'][0]['value'])) {
    // Check if there needs to be a border.
    if ($variables['field_shared_bottom_border'][0]['value'] == 1) {
      // Set a variable for the border.
      $variables['border'] = '<tr><td colspan="3" height="23"></td></tr>';
    }
  }
}

function newsletter_preprocess_paragraphs_item__image_middle(&$variables) {

  $title = $variables['field_shared_title'][0]['safe_value'];
  $text = $variables['field_shared_text'][0]['safe_value'];
  $image = $variables['field_shared_image'][0];

  // Check if the title is set.
  if (isset($title)) {
    if (isset($title)) {
      // Set a new variable for the title.
      $variables['title'] = newsletter_convert_special_characters($title);
    }
  }

  // Check if the image is set.
  if (isset($image)) {
    // Get the image uri.
    $uri = $image['uri'];
    // Check the image uri.
    if (isset($uri) && !empty($uri)) {
      // Set a variable for the image.
      $image = theme('image_style', array(
        'style_name' => 'w540',
        'path' => $uri,
      ));
      $variables['image'] = $image;
    }
  }

  // Check if the text is set.
  if (isset($text)) {

    // Store the variable.
    $variables['text'] = _newsletter_reformat_text($text);
  }

  // Check if the border is set.
  if (isset($variables['field_shared_bottom_border'][0]['value'])) {
    // Check if there needs to be a border.
    if ($variables['field_shared_bottom_border'][0]['value'] == 1) {
      // Set a variable for the border.
      $variables['border'] = '<tr><td colspan="3" height="23"></td></tr>';
    }
  }
}

function newsletter_preprocess_paragraphs_item__image_right(&$variables) {

  // Check if the title is set.
  if (isset($variables['field_shared_title'])) {
    if (isset($variables['field_shared_title'][0]['safe_value'])) {
      // Set a new variable for the title.
      $variables['title'] = newsletter_convert_special_characters($variables['field_shared_title'][0]['value']);
    }
  }

  // Check if the image is set.
  if (isset($variables['field_shared_image'])) {
    // Get the image uri.
    $uri = $variables['field_shared_image'][0]['uri'];
    // Check the image uri.
    if (isset($uri) && !empty($uri)) {
      // Set a variable for the image.
      $image = theme('image_style', array(
        'style_name' => 'w250',
        'path' => $uri,
      ));
      $variables['image'] = $image;
    }
  }

  // Check if the text is set.
  if (isset($variables['field_shared_text'][0]['safe_value'])) {

    // Convert special characters.
    $variables['text'] = newsletter_convert_special_characters($variables['field_shared_text'][0]['safe_value']);

    // Change the anchors to become target blank.
    $variables['text'] = newsletter_convert_links_to_target_blank($variables['text']);
  }

  // Check if the border is set.
  if (isset($variables['field_shared_bottom_border'][0]['value'])) {
    // Check if there needs to be a border.
    if ($variables['field_shared_bottom_border'][0]['value'] == 1) {
      // Set a variable for the border.
      $variables['border'] = '<tr><td colspan="3" height="23"></td></tr>';
    }
  }
}

function newsletter_preprocess_paragraphs_item__regular(&$variables) {

  // Check if the title is set.
  if (isset($variables['field_shared_title'])) {
    if (isset($variables['field_shared_title'][0]['safe_value'])) {
      // Set a new variable for the title.
      $variables['title'] = newsletter_convert_special_characters($variables['field_shared_title'][0]['safe_value']);
    }
  }

  // Check if the text is set.
  if (isset($variables['field_shared_text'][0]['safe_value'])) {

    // Convert special characters.
    $variables['text'] = newsletter_convert_special_characters($variables['field_shared_text'][0]['safe_value']);

    // Change the anchors to become target blank.
    $variables['text'] = newsletter_convert_links_to_target_blank($variables['text']);
  }

  // Check if the border is set.
  if (isset($variables['field_shared_bottom_border'][0]['value'])) {
    // Check if there needs to be a border.
    if ($variables['field_shared_bottom_border'][0]['value'] == 1) {
      // Set a variable for the border.
      $variables['border'] = '<tr><td colspan="3" height="23"></td></tr>';
    }
  }
}

function newsletter_preprocess_paragraphs_item__two_images(&$variables) {

  // Check if the left image is set.
  if (isset($variables['field_shared_image_left'])) {
    // Get the image uri.
    $uri = $variables['field_shared_image_left'][0]['uri'];
    // Check the image uri.
    if (isset($uri) && !empty($uri)) {
      // Set a variable for the image.
      $image = theme('image_style', array(
        'style_name' => 'w250',
        'path' => $uri,
      ));
      $variables['left_image'] = $image;
    }
  }

  // Check if the right image is set.
  if (isset($variables['field_shared_image_right'])) {
    // Get the image uri.
    $uri = $variables['field_shared_image_right'][0]['uri'];
    // Check the image uri.
    if (isset($uri) && !empty($uri)) {
      // Set a variable for the image.
      $image = theme('image_style', array(
        'style_name' => 'w250',
        'path' => $uri,
      ));
      $variables['right_image'] = $image;
    }
  }

  // Check if the border is set.
  if (isset($variables['field_shared_bottom_border'][0]['value'])) {
    // Check if there needs to be a border.
    if ($variables['field_shared_bottom_border'][0]['value'] == 1) {
      // Set a variable for the border.
      $variables['border'] = '<tr><td colspan="3" height="23"></td></tr>';
    }
  }
}

/**
 * Convert paragraphs to breaks.
 *
 * @param string $string
 *   The string text to convert.
 *
 * @return mixed
 *   Returns the converted text.
 */
function _newsletter_convert_paragraphs_to_breaks($string) {
  $content = preg_replace("/<p[^>]*?>/", "", $string);
  return str_replace("</p>", "<br />", $content);
}

/**
 * Reformat text converting all kinds of stuff.
 *
 * @param string $text
 *   The text to reformat.
 * @return mixed
 *   Returns the string of text.
 */
function _newsletter_reformat_text($text) {

  // Convert special characters.
  $text = newsletter_convert_special_characters($text);

  // Convert the paragraphs to breaks.
  $text = _newsletter_convert_paragraphs_to_breaks($text);

  // Change the anchors to become target blank.
  $text = newsletter_convert_links_to_target_blank($text);

  // Return the text.
  return $text;
}