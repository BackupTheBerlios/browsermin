<?php
/* -----------------------------------------------------------------------------------------
   $Id: frm_menu.php,v 1.2 2004/03/24 13:07:27 bootmaker Exp $   

   Released under the GNU General Public License 
   ---------------------------------------------------------------------------------------*/
include(dirname(__FILE__).'/include/config.inc.php');
include(dirname(__FILE__).'/include/lang/'.language.'/frm_menu.inc.php');
?>
<html>
<head>
<title>menu</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#EEEEEE" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%%" border="0" cellspacing="0" cellpadding="0" height="100%">
  <tr> 
    <td valign="top" align="center"> 
      <table width="92%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td bgcolor="#CCCCCC"> 
            <div align="right"><font face="Verdana, Arial, Helvetica, sans-serif" size="2"><b>
              <?php echo menu_menu; ?>
              </b></font></div>
          </td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1">
            <?php echo menu_news; ?>
            </font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1">
            <?php echo menu_phpmyadmin; ?>
            </font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"><a href="frm_menu.php?postfix=set">
            <?php echo menu_postfix; ?>
            </a></font></td>
        </tr>
<?php
if($_GET['postfix']=='set')
{
?>
        <tr> 
          <td> 
            <table width="100%%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td rowspan="4" width="10">&nbsp;</td>
                <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">|- <a href="postfix_page1.php" target="mainFrame"><?php echo menu_postbox; ?></a></font></td>
              </tr>
              <tr> 
                <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">|- <?php echo menu_aliasadmin; ?></font></td>
              </tr>
              <tr> 
                <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">|- <?php echo menu_mailinglist; ?></font></td>
              </tr>
              <tr> 
                <td><font face="Verdana, Arial, Helvetica, sans-serif" size="2">|- <?php echo menu_domadmin; ?></font></td>
              </tr>	      	      
            </table>
          </td> 
        </tr>
<?php
}
?>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1">
            <?php echo menu_logout; ?>
            </font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"></font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"></font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"></font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"></font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"></font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"></font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"></font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"></font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"></font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"></font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"></font></td>
        </tr>
        <tr> 
          <td><font face="Verdana, Arial, Helvetica, sans-serif" size="1"></font></td>
        </tr>
      </table>
      <h5>&nbsp;</h5>
    </td>
  </tr>
</table>
</body>
</html>
