/**
 * @file
 * This file contains all jQuery for the newsletter.
 */
(function ($) {
    Drupal.behaviors.newsletter = {
        attach: function (context, settings) {
          var content = document.getElementById("newsletter-content");
          var block = document.getElementById("newsletter-html");
          var start = '<table width="600" align="center" cellpadding="0" cellspacing="0" bgcolor="#dcdcdc" id="newsletter-content">';
          var end = '</table>';

          block.innerHTML = start + content.innerHTML + end;
        }
    };
})(jQuery);
