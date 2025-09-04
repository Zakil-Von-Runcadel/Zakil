<?php
    include "koneksi.php";
    $kd_barang=$_POST['kd_barang'];
    $nama_barang=$_POST['nama_barang'];
    $stok=$_POST['stok'];
    $sql = "insert into barang(kd_barang,nama_barang,stok)    
    values('$kd_barang','$nama_barang','$stok')";
    $query=mysqli_query($db_link,$sql);
    if ($query)
    {
        header('location:databarang.php');
    }
    else
    {
    echo"Gagal Disimpan --> <a href='tambahbarang.php'>Kembali Ke Input Data";
    }
?>