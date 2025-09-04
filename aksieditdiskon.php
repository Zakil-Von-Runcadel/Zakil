<?php
 include "koneksi.php";
 $kodediskon=$_POST['kodediskon'];
 $kdbeli=$_POST['kdbeli'];
 $kdtransaksi=$_POST['kdtransaksi'];
 $kd_barang=$_POST['kd_barang'];
 $sql2="UPDATE diskon SET kodediskon ='$kodediskon', kdbeli = '$kdbeli', kdtransaksi = '$kdtransaksi', kd_barang = '$kd_barang' WHERE kodediskon= '$kodediskon'";
 $query = mysqli_query($db_link,$sql2);
 if($query)
 {
     header('location:datadiskon.php');
 }
 else{
     echo "edit data gagal --> <a href='tambahdiskon.php'>KEMBALI";
 }
 ?>