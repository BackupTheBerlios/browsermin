<?php
########################################
## Configuration
########################################

define ('language'     ,'de_ger');
define ('database_host','localhost');
define ('database_name','browsermin');
define ('database_user','root');
define ('database_pw'  ,'');
define ('database_type','mysql');

########################################
## don't modify anything from here
########################################

include(dirname(__FILE__).'/adodb.inc.php');
include_once(dirname(__FILE__).'/adodb-pager.inc.php');
session_start();
$conn = &NewADOConnection(database_type);
$conn->PConnect(database_host,database_user,database_pw,database_name);
$ADODB_COUNTRECS = false; //or true
$ADODB_FETCH_MODE=ADODB_FETCH_ASSOC; //or ADODB_FETCH_NUM
$conn->debug = 0; //use 1 if you want to debug
?>