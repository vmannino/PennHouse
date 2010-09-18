<?php
//functions.php

function sanitize($string){
$string=strip_tags($string);
$string=htmlentities($string);
$string=stripslashes($string);
return mysql_real_escape_string($string);
}




?>