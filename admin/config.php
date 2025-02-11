<?php
define('ADMIN_ASSET_URL','http://localhost/projectphp/admin/assets/');

$hostname = "localhost";
$dbname = "stationary";
$username = "root";
$password = "";


$conn=mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn)
{
    echo "connection field ";
}
?>