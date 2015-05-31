<?php
/**
 * File for theming.
 */

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
    if(isset($variables['field_shared_title'][0]['safe_value'])) {
      // Set a new variable for the title.
      $variables['title'] = $variables['field_shared_title'][0]['safe_value'];
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
    if(isset($variables['field_shared_title'][0]['safe_value'])) {
      // Set a new variable for the title.
      $variables['title'] = $variables['field_shared_title'][0]['safe_value'];
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
    $variables['text'] = $variables['field_shared_text'][0]['safe_value'];
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

  // Check if the title is set.
  if (isset($variables['field_shared_title'])) {
    if(isset($variables['field_shared_title'][0]['safe_value'])) {
      // Set a new variable for the title.
      $variables['title'] = $variables['field_shared_title'][0]['safe_value'];
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
    $variables['text'] = $variables['field_shared_text'][0]['safe_value'];
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
    if(isset($variables['field_shared_title'][0]['safe_value'])) {
      // Set a new variable for the title.
      $variables['title'] = $variables['field_shared_title'][0]['safe_value'];
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
    $variables['text'] = $variables['field_shared_text'][0]['safe_value'];
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
    if(isset($variables['field_shared_title'][0]['safe_value'])) {
      // Set a new variable for the title.
      $variables['title'] = $variables['field_shared_title'][0]['safe_value'];
    }
  }

  // Check if the text is set.
  if (isset($variables['field_shared_text'][0]['safe_value'])) {
    $variables['text'] = $variables['field_shared_text'][0]['safe_value'];
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
      $image = theme('image', array('path' => $uri));
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
      $image = theme('image', array('path' => $uri));
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