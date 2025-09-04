<?php
 include "koneksi.php";
 $kdtransaksi=$_POST['kdtransaksi'];
 $tanggal=$_POST['tanggal'];
 $kdbarang=$_POST['kdbarang'];
 $namabarang=$_POST['namabarang'];
 $jumlahjual=$_POST['jumlahjual'];
 $sql2="UPDATE penjualan SET kdtransaksi ='$kdtransaksi', tanggal = '$tanggal', kdbarang = '$kdbarang', namabarang = '$namabarang', jumlahjual = '$jumlahjual' WHERE kdtransaksi= '$kdtransaksi'";
 $query = mysqli_query($db_link,$sql2);
 if($query)
 {
     header('location:datapenjualan.php');
 }
 else{
     echo "edit data gagal --> <a href='tambahpenjualan.php'>KEMBALI";
 }
 ?>