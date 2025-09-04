<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
   <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background: #fff;
            padding: 30px;
            margin: 30px auto;
            width: 400px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px 5px;
            font-size: 16px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"], input[type="button"] {
            padding: 10px 20px;
            background: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }

        input[type="submit"]:hover, input[type="button"]:hover {
            background: #555;
        }

        .btn-container {
            text-align: center;
        }

        hr {
            width: 60%;
        }
    </style>
</head>
<body>
   <h2><center>TAMBAH DATA PENJUALAN</h2></center>
      <hr>
      <form action="aksitambahpenjualan.php" method='POST'>
    <table border="0">
     <tr><td>kode transaksi
      <td><input type='text' name='kdtransaksi' id="kdtransaksi">
      <tr><td>tanggal
      <td><input type='date' name='tanggal' id="tanggal">
      <tr><td>kode barang
      <td><input type='text' name='kdbarang' id="kdbarang">
      <tr><td>nama barang
      <td><input type='text' name='namabarang' id="namabarang">
      <tr><td>jumlah jual
      <td><input type='text' name='jumlahjual' id="jumlahjual">
       <tr><td colspan="2" align="center">
      <input type='submit' value='simpan'>
      <a href="datapenjualan.php"><input type='button' value='batal'>
</table></form></body></html>