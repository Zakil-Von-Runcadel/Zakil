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
    <h2><center>edit data diskon</center></h2>
    <hr>
    <?php
    $kodediskon = $_GET['id'];
    $sql = "SELECT * FROM diskon WHERE kodediskon='$kodediskon'";
    $query = mysqli_query($db_link, $sql);
    $data = mysqli_fetch_array($query);
    ?>
    <form action='aksieditdiskon.php?id=<?php echo $data["kodediskon"]; ?>' method='POST'>
        <table border="0">
            <tr>
                <td>kode transaksi</td>
                <td><input name='kodediskon' type='text' id="kodediskon"
                    value="<?php echo $data['kodediskon'] ?>"></td>
            </tr>
            <tr>
                <td>kode beli</td>
                <td><input name='kdbeli' type='text' id="kdbeli"
                    value="<?php echo $data['kdbeli'] ?>"></td>
            </tr>
            <tr>
                <td>kode transaksi</td>
                <td><input name='kdtransaksi' type='text' id="kdtransaksi"
                    value="<?php echo $data['kdtransaksi'] ?>"></td>
            </tr>
             <tr>
                <td>kode barang</td>
                <td><input name='kd_barang' type='text' id="kd_barang"
                    value="<?php echo $data['kd_barang'] ?>"></td>
            </tr>
        </table>
        <div class="btn-container">
            <input type='submit' value='simpan'>
            <a href="datadiskon.php"><input type='button' value='batal'></a>
        </div>
    </form>
</body>
</html>
