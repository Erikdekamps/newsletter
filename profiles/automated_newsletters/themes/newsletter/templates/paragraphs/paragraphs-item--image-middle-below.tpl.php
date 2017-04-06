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
      <?php if (!empty($title)): ?>
        <tr>
          <td width="14" height="16"></td>
          <td width="16" height="16" bgcolor="#ffffff"></td>
          <td height="16" bgcolor="#ffffff">
            <b style="font-size: 16px; line-height: 23px; font-family: Arial, Helvetica, sans-serif; "><?php print $title; ?></b>
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
      <?php endif; ?>
      <?php if (!empty($text)): ?>
      <tr>
        <td width="14"></td>
        <td width="16" bgcolor="#ffffff"></td>
        <td bgcolor="#ffffff"
            style="color: #000001; font-size: 12px; line-height: 23px; font-family: Arial, Helvetica, sans-serif;">
          <?php print $text; ?>
        </td>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="14"></td>
      </tr>
      <?php endif; ?>
      <?php if (!empty($image)): ?>
        <tr>
          <td width="14" height="16"></td>
          <td width="16" height="16" bgcolor="#ffffff"></td>
          <td bgcolor="#ffffff">
            <?php print $image; ?>
          </td>
          <td width="16" height="16" bgcolor="#ffffff"></td>
          <td width="14" height="16"></td>
        </tr>
      <?php endif; ?>
      <tr>
        <td width="14" height="16"></td>
        <td width="16" bgcolor="#ffffff"></td>
        <td bgcolor="#ffffff"></td>
        <td width="16" bgcolor="#ffffff"></td>
        <td width="14"></td>
      </tr>
      </tr>
      </tbody>
    </table>
  </td>
</tr>
<?php if (!empty($border)): ?>
  <tr><td colspan="3" height="23"></td></tr>
<?php endif; ?>
