<?php
//search.php
include_once('config.php');

browseQuery($_GET['query'], $_GET['avgRentMin'], $_GET['avgRentMax'], $_GET['ttlRentMin'], $_GET['ttlRentMax'],$_GET['llRtngMin'], $_GET['llRtngMax'], $_GET['hsRtngMin'], $_GET['hsRtngMax'], $_GET['bdrmMin'], $_GET['bdrmMax']); 

function browseQuery($avgRentMin, $avgRentMax, $ttlRentMin, $ttlRentMax,$llRtngMin, $llRtngMax, $hsRtngMin, $hsRtngMax, $bdrmMin, $bdrmMax){
$query="SELECT * FROM houses LEFT JOIN landlords ON houses.lid=landlords.lid WHERE";
if($avgRentMin)
$query.=" avg_rent>".sanitize($avgRentMin)." AND";
if($avgRentMax)
$query.=" avg_rent<".sanitize($avgRentMax)." AND";
if($ttlRentMin)
$query.=" total_rent>".sanitize($ttlRentMin)." AND";
if($ttlRentMax)
$query.=" total_rent<".sanitize($ttlRentMax)." AND";
if($llRtngMin)
$query.=" landlords.avg_rating>".sanitize($llRtngMin)." AND";
if($llRtngMax)
$query.=" landlords.avg_rating<".sanitize($llRtngMax)." AND";
if($hsRtngMin)
$query.=" houses.avg_rating>".sanitize($hsRtngMin)." AND";
if($hsRtngMax)
$query.=" houses.avg_rating<".sanitize($hsRtngMax)." AND";
if($hsRtngMax)
$query.=" bedrooms>".sanitize($bdrmMin)." AND";
if($hsRtngMax)
$query.=" bedrooms<".sanitize($bdrmMax);
$query=preg_replace("/WHERE|AND$/",'',$query);
$result=mysql_query($query);
if(!$result){
//error
echo 'error:'.mysql_error();
}
else{

$searchResultMap=array();
while ($rowArray=mysql_fetch_array($result,MYSQL_ASSOC)){
$searchResultMap=$rowArray;
}
return json_encode($searchResultMap);

}
}




