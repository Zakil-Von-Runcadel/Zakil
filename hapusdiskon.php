<?php 
include "koneksi.php";

$kodediskon=$_GET ['id'];
$sql="DELETE FROM diskon WHERE kodediskon = '$kodediskon'";
$query = mysqli_query($db_link,$sql);
if($query)
{
    header('location:datadiskon.php');
}
else 
{
    echo "hapus data gagal";
}
?>