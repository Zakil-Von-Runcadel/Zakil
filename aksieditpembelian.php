<?php
 include "koneksi.php";
 $kdbeli=$_POST['kdbeli'];
 $tanggal=$_POST['tanggal'];
 $kd_barang=$_POST['kd_barang'];
 $nama_barang=$_POST['nama_barang'];
 $jumlah_beli=$_POST['jumlah_beli'];
 $sql2="UPDATE pembelian SET kdbeli ='$kdbeli', tanggal = '$tanggal', kd_barang = '$kd_barang', nama_barang = '$nama_barang', jumlah_beli = '$jumlah_beli' WHERE kdbeli= '$kdbeli'";
 $query = mysqli_query($db_link,$sql2);
 if($query)
 {
     header('location:datapembelian.php');
 }
 else{
     echo "edit data gagal --> <a href='tambahpembelian.php'>KEMBALI";
 }
 ?>