<?php
 include "koneksi.php";
 $kd_barang=$_POST['kd_barang'];
 $nama_barang=$_POST['nama_barang'];
 $stok=$_POST['stok'];
 $sql2="UPDATE barang SET kd_barang ='$kd_barang', nama_barang = '$nama_barang', stok = '$stok' WHERE kd_barang= '$kd_barang'";
 $query = mysqli_query($db_link,$sql2);
 if($query)
 {
     header('location:databarang.php');
 }
 else{
     echo "edit data gagal --> <a href='tambahbarang.php'>KEMBALI";
 }
 ?>