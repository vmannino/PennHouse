<?php
//config.php
$dbhost='localhost';
$dbname='opennhouse';
$dbuser='opennhouse';
$dbpass='7?8$uhM';

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());

mysql_select_db($dbname) or die(mysql_error());


?>