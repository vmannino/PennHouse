<?php
//config.php
$dbhost='localhost';
$dbname='PennHouse';
$dbuser='pennhouse';
$dbpass='kTFLdZ7';

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());






?>