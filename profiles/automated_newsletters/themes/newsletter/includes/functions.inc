<?php
/**
 * @file
 * Include file for custom functions.
 */

/**
 * Convert special characters.
 *
 * @param string $string
 *   The string.
 *
 * @return mixed
 *   Returns the new string.
 */
function newsletter_convert_special_characters($string) {

  // Characters array.
  $characters = array(
    "…" => "...",
    /*" " => "&nbsp;",*/
    /*"\"" => "&quot;",*/
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

/**
 * Convert links to open in new tab.
 *
 * @param string $string
 *   The string.
 *
 * @return mixed
 *   Returns the new string.
 */
function newsletter_convert_links_to_target_blank(&$string) {

  // Search for links that do not contain href="#.
  $search = "/<(a.*?href=\"[^#])([^>]+)>/";

  //Add target ="_blank".
  $replace = '<\\1\\2 target="_blank">';

  return preg_replace($search, $replace, $string);

}
