<tr>
  <td colspan="3">
    <table width="600" align="center" cellpadding="0" cellspacing="0">
      <tbody>
      <tr>
        <td width="14" height="16"></td>
        <td width="16" bgcolor="#ffffff"></td>
        <td bgcolor="#ffffff" valign="top">
          <table align="center" cellpadding="0" cellspacing="0">
            <tbody>
            <tr>
              <td height="5"></td>
            </tr>
            <tr>
              <td height="5"
                  style="color: #000001; font-size: 12px; line-height: 23px; font-weight: normal; font-family: Arial, Helvetica, sans-serif;">
                <table align="center" cellpadding="0" cellspacing="0">
                  <tbody>
                  <tr>
                    <td width="250">
                      <?php print theme('image', array(
                        'path' => $variables['content']['field_shared_image_left']['#items'][0]['uri']
                      )); ?>
                      <?php //print render($content['field_shared_image_left']); ?>
                    </td>
                    <td width="25"></td>
                    <td width="250">
                      <?php print theme('image', array(
                        'path' => $variables['content']['field_shared_image_right']['#items'][0]['uri']
                      )); ?>
                      <?php //print render($content['field_shared_image_right']); ?>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </td>
            </tr>
            </tbody>
          </table>
        </td>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="" bgcolor="#ffffff">
        </td>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="14"></td>
      </tr>
      </tbody>
    </table>
  </td>
</tr>
<?php if ($content['field_shared_bottom_border']['#items'][0]['value'] == 1): ?>
  <tr>
    <td colspan="3" height="23"></td>
  </tr>
<?php endif; ?>