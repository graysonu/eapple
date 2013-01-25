<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_eapples = "localhost";
$database_eapples = "eapples";
$username_eapples = "root";
$password_eapples = "";
$eapples = mysql_pconnect($hostname_eapples, $username_eapples, $password_eapples) or trigger_error(mysql_error(),E_USER_ERROR); 
?>