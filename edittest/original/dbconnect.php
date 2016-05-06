<?php
$MyUsername = "root";  // enter your username for mysql
$MyPassword = "1234";  // enter your password for mysql
$MyHostname = "localhost";      // this is usually "localhost" unless your database resides on a different server

$dbh = mysql_pconnect($MyHostname , $MyUsername, $MyPassword);
$selected = mysql_select_db("test",$dbh);
?>