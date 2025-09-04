<?php 
include "koneksi.php";

$kdbeli=$_GET ['id'];
$sql="DELETE FROM pembelian WHERE kdbeli = '$kdbeli'";
$query = mysqli_query($db_link,$sql);
if($query)
{
    header('location:datapembelian.php');
}
else 
{
    echo "hapus data gagal";
}
?>