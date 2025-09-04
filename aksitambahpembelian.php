<?php
include "koneksi.php";
$kdbeli=$_POST['kdbeli'];
$tanggal=$_POST['tanggal'];
$kd_barang=$_POST['kd_barang'];
$nama_barang=$_POST['nama_barang'];
$jumlah_beli=$_POST['jumlah_beli'];
$sql = "insert into pembelian (kdbeli, tanggal, kd_barang, nama_barang, jumlah_beli)
values('$kdbeli', '$tanggal', '$kd_barang', '$nama_barang', '$jumlah_beli')";
$query = mysqli_query($db_link,$sql);
if($query)
{
header('location:datapembelian.php');
}
else
{
echo "Gagal Disimpan --> <a href='tambahpembelian.php'>Kembali Ke Input Data";
}
?>