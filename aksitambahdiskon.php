<?php
    include "koneksi.php";
    $kodediskon=$_POST['kodediskon'];
    $kdbeli=$_POST['kdbeli'];
    $kdtransaksi=$_POST['kdtransaksi'];
    $kd_barang=$_POST['kd_barang'];
    $sql = "insert into diskon(kodediskon,kdbeli,kdtransaksi,kd_barang)    
    values('$kodediskon','$kdbeli','$kdtransaksi', '$kd_barang')";
    $query=mysqli_query($db_link,$sql);
    if ($query)
    {
        header('location:datadiskon.php');
    }
    else
    {
    echo"Gagal Disimpan --> <a href='tambahdiskon.php'>Kembali Ke Input Data";
    }
?>