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
      $variables['title'] = newsletter_convert_characters($variables['field_shared_title'][0]['safe_value']);
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
      $variables['title'] = newsletter_convert_characters($variables['field_shared_title'][0]['safe_value']);
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
    $variables['text'] = newsletter_convert_characters($variables['field_shared_text'][0]['safe_value']);
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
      $variables['title'] = newsletter_convert_characters($variables['field_shared_title'][0]['safe_value']);
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
    $variables['text'] = newsletter_convert_characters($variables['field_shared_text'][0]['safe_value']);
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
      $variables['title'] = newsletter_convert_characters($variables['field_shared_title'][0]['value']);
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
    $variables['text'] = newsletter_convert_characters($variables['field_shared_text'][0]['safe_value']);
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
      $variables['title'] = newsletter_convert_characters($variables['field_shared_title'][0]['safe_value']);
    }
  }

  // Check if the text is set.
  if (isset($variables['field_shared_text'][0]['safe_value'])) {
    $variables['text'] = newsletter_convert_characters($variables['field_shared_text'][0]['safe_value']);
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

/**
 * Function to convert special characters.
 *
 * @param $string
 *   The string of text to check.
 *
 * @return mixed
 *   Returns the new string.
 */
function newsletter_convert_characters(&$string) {

  // Characters array.
  $characters = array(
    "…" => "...",
    " " => "&nbsp;",
    "\"" => "&quot;",
    "'" => "&apos;",
    "“" => "&ldquo;",
    "”" => "&rdquo;",
    "’" => "&lsquo;",
    "‘" => "&rsquo;",
    "&" => "&amp;",
    "&nbsp;" => " ",
    "À" => "&Agrave;",
    "Á" => "&Aacute;",
    "Â" => "&Acirc;",
    "Ã" => "&Atilde;",
    "Ä" => "&Auml;",
    "Å" => "&Aring;",
    "Æ" => "&AElig;",
    "Ç" => "&Ccedil;",
    "È" => "&Egrave;",
    "É" => "&Eacute;",
    "Ê" => "&Ecirc;",
    "Ë" => "&Euml;",
    "Ì" => "&Igrave;",
    "Í" => "&Iacute;",
    "Î" => "&Icirc;",
    "Ï" => "&Iuml;",
    "Ð" => "&ETH;",
    "Ñ" => "&Ntilde;",
    "Ò" => "&Ograve;",
    "Ó" => "&Oacute;",
    "Ô" => "&Ocirc;",
    "Õ" => "&Otilde;",
    "Ö" => "&Ouml;",
    "Ø" => "&Oslash;",
    "Ù" => "&Ugrave;",
    "Ú" => "&Uacute;",
    "Û" => "&Ucirc;",
    "Ü" => "&Uuml;",
    "Ý" => "&Yacute;",
    "Þ" => "&THORN;",
    "ß" => "&szlig;",
    "à" => "&agrave;",
    "á" => "&aacute;",
    "â" => "&acirc;",
    "ã" => "&atilde;",
    "ä" => "&auml;",
    "å" => "&aring;",
    "æ" => "&aelig;",
    "ç" => "&ccedil;",
    "è" => "&egrave;",
    "é" => "&eacute;",
    "ê" => "&ecirc;",
    "ë" => "&euml;",
    "ì" => "&igrave;",
    "í" => "&iacute;",
    "î" => "&icirc;",
    "ï" => "&iuml;",
    "ð" => "&eth;",
    "ñ" => "&ntilde;",
    "ò" => "&ograve;",
    "ó" => "&oacute;",
    "ô" => "&ocirc;",
    "õ" => "&otilde;",
    "ö" => "&ouml;",
    "ø" => "&oslash;",
    "ù" => "&ugrave;",
    "ú" => "&uacute;",
    "û" => "&ucirc;",
    "ü" => "&uuml;",
    "ý" => "&yacute;",
    "þ" => "&thorn;",
    "ÿ" => "&yuml;",
    "–" => "-",
    "€" => "&euro;",
  );

  $output = str_replace(array_keys($characters), array_values($characters), $string);

  return $output;
}
