<?php
//search.php
include_once('config.php');

browseQuery($_GET['query'], $_GET['avgRentMin'], $_GET['avgRentMax'], $_GET['ttlRentMin'], $_GET['ttlRentMax'],$_GET['llRtngMin'], $_GET['llRtngMax'], $_GET['hsRtngMin'], $_GET['hsRtngMax'], $_GET['bdrmMin'], $_GET['bdrmMax']);

browseQuery($avgRentMin, $avgRentMax, $ttlRentMin, $ttlRentMax,$llRtngMin, $llRtngMax, $hsRtngMin, $hsRtngMax, $bdrmMin, $bdrmMax){
$query="SELECT * FROM houses JOIN ON landlords using lid WHERE ";
if($avgRentMin)
$query.="avg_rent>".sanitize($avgRentMin);
if($avgRentMax)
$query.="avg_rent<".sanitize($avgRentMax);
if($ttlRentMin)
$query.="total_rent>".sanitize($ttlRentMin);
if($ttlRentMax)
$query.="total_rent<".sanitize($ttlRentMax);
if($llRtngMin)
$query.="landlords.avg_rating>".sanitize($llRtngMin);
if($llRtngMax)
$query.="landlords.avg_rating<".sanitize($llRtngMax);
if($hsRtngMin)
$query.="houses.avg_rating>".sanitize($hsRtngMin);
if($hsRtngMax)
$query.="houses.avg_rating<".sanitize($hsRtngMax);
if($hsRtngMax)
$query.="bedrooms>".sanitize($bdrmMin);
if($hsRtngMax)
$query.="bedrooms<".sanitize($bdrmMax);
$result=mysql_query($query)
if(!$result){
//error
echo 'error';
}
else{

$searchResultMap=array();
while ($rowArray=mysql_fetch_array($result,MYSQL_ASSOC)){
$searchResultMap=$rowArray;
}
return json_encode($searchResultMap);

}
}




