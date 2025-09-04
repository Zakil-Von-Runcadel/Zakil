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
    <h2><center>tambah data barang</center></h2>
    <hr>
    <form action='aksitambahbarang.php' method='POST'>
        <table border="0">
            <tr><td>kode barang</td>
                <td><input type='text' name='kd_barang' id="kd_barang"></td>
            </tr>
            <tr><td>nama barang</td>
                <td><input type='text' name='nama_barang' id="nama_barang"></td>
            </tr>
            <tr><td>stok</td>
                <td><input type='text' name='stok' id="stok"></td>
            </tr>
        </table>
        <div class="btn-container">
            <input type='submit' value='simpan'>
            <a href="databarang.php"><input type='button' value='batal'></a>
        </div>
    </form>
</body>
</html>
