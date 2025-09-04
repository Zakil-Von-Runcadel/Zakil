<?php
    include 'koneksi.php';
?>

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

<!DOCTYPE html>
<html>
<head>
</head>
<body>
   <h2><center>TAMBAH DATA DISKON</h2></center>
      <hr>
      <form action="aksitambahdiskon.php" method='POST'>
    <table border="0">
     <tr><td>kode diskon
      <td><input type='text' name='kodediskon' id="kodediskon">
      <tr><td>kode beli
      <td><input type='text' name='kdbeli' id="kdbeli">
      <tr><td>kode transaksi
      <td><input type='text' name='kdtransaksi' id="kdtransaksi">
      <tr><td>kode barang
      <td><input type='text' name='kd_barang' id="kd_barang">
       <tr><td colspan="2" align="center">
      <input type='submit' value='simpan'>
      <a href="datadiskon.php"><input type='button' value='batal'>
</table></form></body></html>