<?php
/* -----------------------------------------------------------------------------------------
   $Id: postfix_page1.php,v 1.1 2004/03/24 12:25:58 bootmaker Exp $   

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
include(dirname(__FILE__).'/include/config.inc.php');
include(dirname(__FILE__).'/include/lang/'.language.'/postfix_page1.inc.php');
?>
<html>
<head>
<title><?php echo PAGE_TITLE; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000">
<table width="90%%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td> 
      <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b><?php echo TEXT_TITEL; ?></b></font></div>
    </td>
  </tr>
  <tr> 
    <td height="1" bgcolor="#EEEEEE">&nbsp;</td>
  </tr>
  <tr> 
    <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo TEXT_DESCRIPTION; ?>.</font></td>
  </tr>
  <tr> 
    <td height="5">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="middle" align="center"> 
      <form name="form" method="post" action="postfix_page1_1.php">
      <table width="95%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td nowrap> 
            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><?php echo TEXT_MAILBOX; ?>:</font></div>
          </td>
          <td width="5"></td>
          <td nowrap> 
<?php
$query = 'SELECT * FROM domain ORDER BY domain ASC';
$rs = $conn->Execute($query);
print $rs->GetMenu('domain',false);
?>
              <input type="submit" name="submit" value="<?php echo BUTTON_SUBMIT; ?>">
          </td>
        </tr>
        <tr> 
          <td nowrap colspan="3" height="5"></td>
        </tr>
      </table>
      </form>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>