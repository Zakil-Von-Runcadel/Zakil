<?php
 include "koneksi.php"; 
 ?>


<!DOCTYPE html>
<head>
	<style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        input[type="button"] {
            padding: 10px 20px;
            background: #333;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="button"]:hover {
            background: #555;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
            background: white;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            color: #FF5733;
        }

        hr {
            width: 60%;
            margin: 10px auto;
        }
    </style>
</head>
<body>
	<h2><center> Data pembelian</center></h2>
	<hr>
	<center><input type="button" value="Tambah Data" onClick="location.href='tambahpembelian.php'"></center>
	<br>
	<table border='1' cellspacing='0' cellpadding='5' align="center">
	<tr align="center">
	<td>kode beli</td>
	<td>tanggal</td>
	<td>kode barang</td>
	<td>nama barang</td>
	<td>jumlah beli</td>
	<td>aksi</td>
</tr>

<?php
	$no=1;
	$sql="SELECT * FROM pembelian";
	$query=mysqli_query($db_link,$sql);
	while ($data=mysqli_fetch_array($query))
	{
	?>
	<tr>
		<td><?php echo $data['kdbeli']; ?></td>
<td><?php echo $data['tanggal']; ?></td>
<td><?php echo $data['kd_barang']; ?></td>
<td><?php echo $data['nama_barang']; ?></td>
<td><?php echo $data['jumlah_beli']; ?></td>

	<td>
    <a href="editpembelian.php?id=<?php echo $data['kdbeli']; ?>">EDIT</a> |
    <a href="hapuspembelian.php?id=<?php echo $data['kdbeli']; ?>" onclick="return confirm('Anda yakin ingin menghapus?')">HAPUS</a>
</td>

		<?php
		$no++;
	}
	?>
	</table>
</body>
</html>