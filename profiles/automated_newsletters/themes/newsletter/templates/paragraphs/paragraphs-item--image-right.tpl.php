<tr>
  <td colspan="3">
    <?php if (!empty($title)): ?>
      <table width="600" align="center" cellpadding="0" cellspacing="0">
        <tbody>
        <tr>
          <td width="14" height="16"></td>
          <td width="16" bgcolor="#ffffff"></td>
          <td bgcolor="#ffffff"></td>
          <td width="16" bgcolor="#ffffff"></td>
          <td width="14"></td>
        </tr>
        <tr>
          <td width="14" height="16"></td>
          <td width="16" height="16" bgcolor="#ffffff"></td>
          <td height="16" bgcolor="#ffffff">
            <b style="font-size: 16px; line-height: 23px; font-family: Arial, Helvetica, sans-serif; ">
              <?php print $title; ?>
            </b>
          </td>
          <td width="16" height="16" bgcolor="#ffffff"></td>
          <td width="14" height="16"></td>
        </tr>
        <tr>
          <td width="14" height="16"></td>
          <td width="16" bgcolor="#ffffff"></td>
          <td bgcolor="#ffffff"></td>
          <td width="16" bgcolor="#ffffff"></td>
          <td width="14"></td>
        </tr>
        </tbody>
      </table>
    <?php endif; ?>
    <table width="600" align="center" cellpadding="0" cellspacing="0">
      <tbody>
      <tr>
        <?php if (!empty($text)): ?>
          <td width="14" height="16"></td>
          <td width="16" bgcolor="#ffffff"></td>
          <td bgcolor="#ffffff" valign="top">
            <table align="center" cellpadding="0" cellspacing="0">
              <tbody>
              <tr>
                <td style="color: #000001; font-size: 12px; line-height: 23px; font-weight: normal; font-family: Arial, Helvetica, sans-serif;">
                  <?php print $text; ?>
                </td>
              </tr>
              </tbody>
            </table>
          </td>
        <?php endif; ?>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="160" bgcolor="#ffffff" style="vertical-align: top;">
          <?php if (!empty($image)): ?>
            <?php print $image; ?>
          <?php endif; ?>

          <?php if (!empty($image_title)): ?>
            <div style="text-align: right; margin-top: 5px; color: #000001; font-size: 12px; line-height: 23px; font-family: Arial, Helvetica, sans-serif;">
              <?php print $image_title; ?>
            </div>
          <?php endif; ?>
        </td>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="14"></td>
      </tr>
      </tbody>
    </table>
  </td>
</tr>
<?php if (!empty($border)): ?>
  <tr>
    <td colspan="3" height="23"></td>
  </tr>
<?php endif; ?>
