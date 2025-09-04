<?php
$host = "localhost";
$username = "root";
$password = "";
$database_name = "toko_jaya";
$db_link=mysqli_connect($host, $username, $password, $database_name);
if($db_link)
{
    echo "";
}
else
{
    echo "tidak terhubung";
}
?>