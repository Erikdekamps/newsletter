/**
 * @file
 * This file contains all jQuery for the newsletter.
 */
(function ($) {
    Drupal.behaviors.newsletter = {
        attach: function (context, settings) {

          if (document.getElementById("newsletter-content")) {
            var content = document.getElementById("newsletter-content");
          }

          if (document.getElementById("newsletter-html")) {
            var block = document.getElementById("newsletter-html");
          }
          var start = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\n<html xmlns="http://www.w3.org/1999/xhtml">\n<head>\n<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/\n><title>Veiligverkeer</title>\n</head>\n<body style="margin:0; padding:0;" bgcolor="#ffffff"><table width="600" align="center" cellpadding="0" cellspacing="0" bgcolor="#dcdcdc" id="newsletter-content">';
          var end = '</table></body></html>';

          if (content && block) {
            block.innerHTML = start + content.innerHTML + end;
          }
        }
    };
})(jQuery);
