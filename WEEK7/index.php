<?php
require 'function.php';
$barang = query("SELECT * FROM semua_barang")
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PROCUREMENT BARANG PERUSAHAN XYZ</title>
        <style>
            body {
            background: linear-gradient(to right, #ABB2B9,#808B96); /* Ubah warna gradient sesuai keinginan Anda */
            color: white; /* Warna teks diubah menjadi putih untuk kontras */
            font-family: Arial, sans-serif; /* Ganti jenis font sesuai keinginan Anda */
            }
        </style>
    </head>
    <body>
        <h1>Procurement Barang PT.Aselole</h1>

        <a href="tambah.php">Tambah Data Barang </a>
        <br><br>
        
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No. </th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Kode Barang</th>
                <th>Harga Barang</th>
                <th>Stok Barang</th>
            </tr>
            <?php $i = 1;
            foreach ($barang as $row) : ?> 
            
            <tr>
                <td><?= $i ?></td>
                <td>
                    <a href="ubah.php?no=<?= $row['no']; ?>">Ubah</a>
                    <a href="hapus.php?no= <?= $row["no"];?>" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a>
                </td>
                <td><img src="img/<?= $row['gambar']; ?>" width="50"></td>
                <td><?= $row["namabarang"]; ?></td>
                <td><?= $row["kodebarang"]; ?></td>
                <td><?= $row["hargajual"]; ?></td>
                <td><?= $row["stokbarang"]; ?></td>
            </tr>
            <?php 
            $i++; 
            endforeach;
            ?>
        </table>
    </body>
</html>