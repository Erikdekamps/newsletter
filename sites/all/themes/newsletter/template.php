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