<?php 
include "koneksi.php";

$kdtransaksi=$_GET ['id'];
$sql="DELETE FROM penjualan WHERE kdtransaksi = '$kdtransaksi'";
$query = mysqli_query($db_link,$sql);
if($query)
{
    header('location:datapenjualan.php');
}
else 
{
    echo "hapus data gagal";
}
?>