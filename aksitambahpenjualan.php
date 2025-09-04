<?php
include "koneksi.php";
$kdtransaksi=$_POST['kdtransaksi'];
$tanggal=$_POST['tanggal'];
$kdbarang=$_POST['kdbarang'];
$namabarang=$_POST['namabarang'];
$jumlahjual=$_POST['jumlahjual'];
$sql = "insert into penjualan (kdtransaksi, tanggal, kdbarang, namabarang, jumlahjual)
values('$kdtransaksi', '$tanggal', '$kdbarang', '$namabarang', '$jumlahjual')";
$query = mysqli_query($db_link,$sql);
if($query)
{
header('location:datapenjualan.php');
}
else
{
echo "Gagal Disimpan --> <a href='tambahpenjualan.php'>Kembali Ke Input Data";
}
?>