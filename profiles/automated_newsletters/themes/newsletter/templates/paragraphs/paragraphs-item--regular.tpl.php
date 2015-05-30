<!--Regular wrapper-->
<tr>
  <td colspan="3">
    <table width="600" align="center" cellpadding="0" cellspacing="0">
      <tbody>
      <?php if (render($content['field_shared_title']) != ''): ?>
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
              <?php print render($content['field_shared_title']); ?>
            </b>
          </td>
          <td width="16" height="16" bgcolor="#ffffff"></td>
          <td width="14" height="16"></td>
        </tr>
        <tr>
          <td width="14" height="10"></td>
          <td width="16" bgcolor="#ffffff"></td>
          <td bgcolor="#ffffff"></td>
          <td width="16" bgcolor="#ffffff"></td>
          <td width="14"></td>
        </tr>
      <?php endif; ?>
      <tr>
        <td width="14"></td>
        <td width="16" bgcolor="#ffffff"></td>
        <td bgcolor="#ffffff" style="color: #000001; font-size: 12px; line-height: 23px; font-family: Arial, Helvetica, sans-serif;">
        <?php print render($content['field_shared_text']); ?>
        </td>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="14"></td>
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
  </td>
</tr>
<?php if ($content['field_shared_bottom_border']['#items'][0]['value'] == 1): ?>
  <tr>
    <td colspan="3" height="23"></td>
  </tr>
<?php endif; ?>