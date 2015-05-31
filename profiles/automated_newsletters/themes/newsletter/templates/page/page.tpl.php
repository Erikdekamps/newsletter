<?php
/**
 * @file
 * Newsletters's theme implementation to display a single Drupal page.
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['content']: The main content of the current page.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 * @see html.tpl.php
 */
?>
<div id="page-wrapper">
  <div id="page">

    <div id="header">
      <div class="section clearfix">
        <?php print render($page['header']); ?>
      </div>
    </div>

    <?php if ($messages): ?>
      <div id="messages">
        <div class="section clearfix">
          <?php print $messages; ?>
        </div>
      </div>
    <?php endif; ?>

    <div id="main-wrapper" class="clearfix">
      <div id="main" class="clearfix">
        <div id="content" class="column">
          <div class="section">

            <?php if ($tabs) : print render($tabs); endif; ?>

            <textarea id="newsletter-html" style="width:595px;height:200px;"></textarea>

            <?php print render($page['content']); ?>
          </div>
        </div>
      </div>
    </div>

    <div id="footer-wrapper">
      <div class="section">
        <?php if ($page['footer']): ?>
          <div id="footer" class="clearfix">
            <?php print render($page['footer']); ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
