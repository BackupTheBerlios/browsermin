<?php
/* -----------------------------------------------------------------------------------------
   $Id: postfix_page1_1.php,v 1.1 2004/03/24 12:25:58 bootmaker Exp $   

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
if($_POST['domain']=='')
{
	header("Location: postfix_page1.php"); 
	exit;
}

include(dirname(__FILE__).'/include/config.inc.php');
include(dirname(__FILE__).'/include/lang/'.language.'/postfix_page1_1.inc.php');
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
    <td valign="middle" align="center"><font face="Verdana, Arial, Helvetica, sans-serif" size="2">
<?php
$query = "SELECT username,name FROM mailbox WHERE ='".$_POST['domain']."' ORDER BY username ASC";

?>
    </font></td>
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
