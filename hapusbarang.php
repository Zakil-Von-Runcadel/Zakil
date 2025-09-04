<?php 
include "koneksi.php";

$kd_barang=$_GET ['id'];
$sql="DELETE FROM barang WHERE kd_barang = '$kd_barang'";
$query=mysqli_query($db_link,$sql);
if($query)
{
    header('location:databarang.php');
}
else 
{
    echo "hapus data gagal";
}
?>