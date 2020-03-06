<?php
if (isset($_POST["dataurl"])) $dataurl = $_POST['dataurl'];
else $dataurl="";
if (isset($_GET["dataurl"])) $dataurl = $_GET['dataurl'];
//else $dataurl="";

//$dataurl = str_replace(' ', '%20', $dataurl);
$dataurl =urldecode($dataurl);

$newurl="..";
$newurl=$newurl.parse_url($dataurl, PHP_URL_PATH);
//echo($newurl);

if (fopen($newurl, "r"))
{
   echo "YES"; 
}
else
{
   echo "NO";
}

?>