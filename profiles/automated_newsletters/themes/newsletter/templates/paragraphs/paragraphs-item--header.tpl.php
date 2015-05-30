<!--Header wrapper-->
<tr>
  <td colspan="3" height="23"></td>
</tr>
<tr>
  <td colspan="3">
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
              <span
                style="color: #000001; font-size: 25px; line-height:40px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;">
              <?php print render($content['field_shared_title']); ?>
              </span>
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
  </td>
</tr>
<?php if ($content['field_shared_bottom_border']['#items'][0]['value'] == 1): ?>
  <tr>
    <td colspan="3" height="23"></td>
  </tr>
<?php endif; ?>