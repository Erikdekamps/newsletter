<!--Image left wrapper-->
<tr>
  <td colspan="3">
    <table width="600" align="center" cellpadding="0" cellspacing="0">
      <tbody>
      <?php if (render($content['field_shared_title']) != ''): ?>
      <tr>
        <td width="14" height="12"></td>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="160" bgcolor="#ffffff"></td>
        <td width="16" bgcolor="#ffffff"></td>
        <td bgcolor="#ffffff"></td>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="14"></td>
      </tr>
      <?php endif; ?>
      <tr>
        <td width="14"></td>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="160" bgcolor="#ffffff" valign="top">
          <?php print render($content['field_shared_image']); ?>
        </td>
        <td width="16" bgcolor="#ffffff"></td>
        <td bgcolor="#ffffff" valign="top">
          <table align="center" cellpadding="0" cellspacing="0">
            <tbody>
            <?php if (render($content['field_shared_title']) != ''): ?>
              <tr>
                <td height="4"></td>
              </tr>
              <tr>
                <td>
                  <b style="font-size: 16px; line-height: 26px; font-family: Arial, Helvetica, sans-serif; ">
                    <?php print render($content['field_shared_title']); ?>
                  </b>
                </td>
              </tr>
              <tr>
                <td height="5"></td>
              </tr>
            <?php endif; ?>
            <tr>
              <td style="color: #000001; font-size: 12px; line-height: 23px; font-weight: normal; font-family: Arial, Helvetica, sans-serif;">
                <?php print render($content['field_shared_text']); ?>
              </td>
            </tr>
            </tbody></table>
        </td>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="14"></td>
      </tr>
      <tr>
        <td width="14" height="9"></td>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="160" bgcolor="#ffffff"></td>
        <td width="16" bgcolor="#ffffff"></td>
        <td bgcolor="#ffffff"></td>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="14"></td>
      </tr>
      </tbody></table>
  </td>
</tr>
<?php if ($content['field_shared_bottom_border']['#items'][0]['value'] == 1): ?>
  <tr>
    <td colspan="3" height="23"></td>
  </tr>
<?php endif; ?>