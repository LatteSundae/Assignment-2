<?php
//$servername = "localhost";
//$username = "root";
//$password = "sunsunba1303";
//$dbname = "employees";

$url = parse_url(getenv("DATABASE_URL"));
$servername = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$dbname = substr($url["path"], 1);
echo "Extracted Info $servername $username $password $dbnane<br>";
?>

