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
    <h2><center>edit data penjualan</center></h2>
    <hr>
    <?php
    $kdtransaksi = $_GET['id'];
    $sql = "SELECT * FROM penjualan WHERE kdtransaksi='$kdtransaksi'";
    $query = mysqli_query($db_link, $sql);
    $data = mysqli_fetch_array($query);
    ?>
    <form action='aksieditpenjualan.php?id=<?php echo $data["kdtransaksi"]; ?>' method='POST'>
        <table border="0">
            <tr>
                <td>kode transaksi</td>
                <td><input name='kdtransaksi' type='text' id="kdtransaksi"
                    value="<?php echo $data['kdtransaksi'] ?>"></td>
            </tr>
            <tr>
                <td>tanggal</td>
                <td><input name='tanggal' type='date' id="tanggal"
                    value="<?php echo $data['tanggal'] ?>"></td>
            </tr>
            <tr>
                <td>kode barang</td>
                <td><input name='kdbarang' type='text' id="kdbarang"
                    value="<?php echo $data['kdbarang'] ?>"></td>
            </tr>
             <tr>
                <td>nama barang</td>
                <td><input name='namabarang' type='text' id="namabarang"
                    value="<?php echo $data['namabarang'] ?>"></td>
            </tr>
             <tr>
                <td>jumlah jual</td>
                <td><input name='jumlahjual' type='text' id="jumlahjual"
                    value="<?php echo $data['jumlahjual'] ?>"></td>
            </tr>
        </table>
        <div class="btn-container">
            <input type='submit' value='simpan'>
            <a href="datapenjualan.php"><input type='button' value='batal'></a>
        </div>
    </form>
</body>
</html>
