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

  $title = $variables['field_shared_title'][0]['safe_value'];
  $border = $variables['field_shared_bottom_border'][0]['value'];

  // Check if the title is set.
  if (isset($title)) {
    // Set a new variable for the title.
    $variables['title'] = newsletter_convert_special_characters($title);
  }

  // Check if the border is set.
  if (!empty($border) && $border) {
    $variables['border'] = TRUE;
  }
}

function newsletter_preprocess_paragraphs_item__image_left(&$variables) {

  $title = $variables['field_shared_title'][0]['safe_value'];
  $text = $variables['field_shared_text'][0]['safe_value'];
  $image = $variables['field_shared_image'][0];
  $border = $variables['field_shared_bottom_border'][0]['value'];

  // Check if the title is set.
  if (isset($title)) {
    // Set a new variable for the title.
    $variables['title'] = newsletter_convert_special_characters($title);
  }

  // Check if the image is set.
  if (isset($image)) {

    // Get the image uri and title.
    $image_uri = $image['uri'];
    $image_title = $image['title'];

    // Check the image uri.
    if (isset($image_uri) && !empty($image_uri)) {
      // Set a variable for the image.
      $image = theme('image_style', array(
        'style_name' => 'w250',
        'path' => $image_uri,
      ));

      $variables['image'] = $image;

      // Check the title.
      if (!empty($title)) {
        $variables['image_title'] = $image_title;
      }
    }
  }

  // Check if the text is set.
  if (isset($text)) {

    // Store the variable.
    $variables['text'] = _newsletter_reformat_text($text);
  }

  // Check if the border is set.
  if (!empty($border) && $border) {
    $variables['border'] = TRUE;
  }
}

/**
 * Todo - Remove me.
 */
function newsletter_preprocess_paragraphs_item__image_middle(&$variables) {

  $title = $variables['field_shared_title'][0]['safe_value'];
  $text = $variables['field_shared_text'][0]['safe_value'];
  $image = $variables['field_shared_image'][0];
  $border = $variables['field_shared_bottom_border'][0]['value'];

  // Check if the title is set.
  if (isset($title)) {
    // Set a new variable for the title.
    $variables['title'] = newsletter_convert_special_characters($title);
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
  if (!empty($border) && $border) {
    $variables['border'] = TRUE;
  }
}

function newsletter_preprocess_paragraphs_item__image_middle_above(&$variables) {

  $title = $variables['field_shared_title'][0]['safe_value'];
  $text = $variables['field_shared_text'][0]['safe_value'];
  $image = $variables['field_shared_image'][0];
  $border = $variables['field_shared_bottom_border'][0]['value'];

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
  if (!empty($border) && $border) {
    $variables['border'] = TRUE;
  }
}

function newsletter_preprocess_paragraphs_item__image_middle_below(&$variables) {

  $title = $variables['field_shared_title'][0]['safe_value'];
  $text = $variables['field_shared_text'][0]['safe_value'];
  $image = $variables['field_shared_image'][0];
  $border = $variables['field_shared_bottom_border'][0]['value'];

  // Check if the title is set.
  if (isset($title)) {

    // Set a new variable for the title.
    $variables['title'] = newsletter_convert_special_characters($title);
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
  if (!empty($border) && $border) {
    $variables['border'] = TRUE;
  }
}

function newsletter_preprocess_paragraphs_item__image_right(&$variables) {

  $title = $variables['field_shared_title'][0]['safe_value'];
  $text = $variables['field_shared_text'][0]['safe_value'];
  $image = $variables['field_shared_image'][0];
  $border = $variables['field_shared_bottom_border'][0]['value'];

  // Check if the title is set.
  if (isset($title)) {
    if (isset($title)) {
      // Set a new variable for the title.
      $variables['title'] = newsletter_convert_special_characters($title);
    }
  }

  // Check if the image is set.
  if (isset($image)) {

    // Get the image uri and title.
    $image_uri = $image['uri'];
    $image_title = $image['title'];

    // Check the image uri.
    if (isset($image_uri) && !empty($image_uri)) {
      // Set a variable for the image.
      $image = theme('image_style', array(
        'style_name' => 'w250',
        'path' => $image_uri,
      ));

      $variables['image'] = $image;

      // Check the title.
      if (!empty($title)) {
        $variables['image_title'] = $image_title;
      }
    }
  }

  // Check if the text is set.
  if (isset($text)) {

    // Store the variable.
    $variables['text'] = _newsletter_reformat_text($text);
  }

  // Check if the border is set.
  if (!empty($border) && $border) {
    $variables['border'] = TRUE;
  }
}

function newsletter_preprocess_paragraphs_item__regular(&$variables) {

  $title = $variables['field_shared_title'][0]['safe_value'];
  $text = $variables['field_shared_text'][0]['safe_value'];
  $border = $variables['field_shared_bottom_border'][0]['value'];

  // Check if the title is set.
  if (isset($title)) {

    // Set a new variable for the title.
    $variables['title'] = newsletter_convert_special_characters($title);
  }

  // Check if the text is set.
  if (isset($text)) {

    // Store the variable.
    $variables['text'] = _newsletter_reformat_text($text);
  }

  // Check if the border is set.
  if (!empty($border) && $border) {
    $variables['border'] = TRUE;
  }
}

function newsletter_preprocess_paragraphs_item__two_images(&$variables) {

  $border = $variables['field_shared_bottom_border'][0]['value'];

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
  if (!empty($border) && $border) {
    $variables['border'] = TRUE;
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
  return str_replace("</p>", "<br /><br />", $content);
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