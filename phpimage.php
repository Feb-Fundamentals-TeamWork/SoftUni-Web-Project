<?php
	#FileName="Connection_php_mysql.htm"
	#Type="MYSQL"
	#HTTP="true"
	
	$hostname_phpimage = "sql3.freemysqlhosting.net";
	$database_phpimage = "*****";
	$username_phpimage = "*****";
	$password_phpimage = "******";
	$phpimage = mysql_pconnect($hostname_phpimage, $username_phpimage, $password_phpimage) or trigger_error(mysql_error(), E_USER_ERROR);
?>