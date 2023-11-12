<?php
require 'function.php';

$no = $_GET["no"];

$brg = query("SELECT * FROM semua_barang WHERE no = $no")[0];

if (isset($_POST["submit"])){
    if (ubah($_POST)> 0){
        echo "
            <script>
            alert('Barang berhasil diubah!');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
        alert('Barang gagal diubah!');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ubah Data Barang Toko Bapak Saya</title>
        <style>
            body {
            background: linear-gradient(to right, #ABB2B9,#808B96);
            color: white; 
            font-family: Arial, sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Ubah Data Barang PT.Aselole</h1>
        <form action="" method="post">
            <input type="hidden" name="no" value="<?=$brg['no'];?>">
            <ul>
                <li>
                    <label for="kodebarang">Kode Barang</label>
                    <input type="text" name="kodebarang" id="kodebarang" required value = <?= $brg["kodebarang"];?>>
                </li>
                <li>
                    <label for="namabarang">Nama Barang</label>
                    <input type="text" name="namabarang" id="namabarang" required value = <?= $brg["namabarang"];?>>
                </li>
                <li>
                    <label for="hargajual">Harga Barang</label>
                    <input type="text" name="hargajual" id="hargajual" required value = <?= $brg["hargajual"];?>>
                </li>
                <li>
                    <label for="stokbarang">Stok Barang</label>
                    <input type="text" name="stokbarang" id="stokbarang" required value = <?= $brg["stokbarang"];?>>
                </li>
                <li>
                    <label for="gambarbarang">Gambar Barang</label>
                    <input type="text" name="gambarbarang" id="gambarbarang" required value = <?= $brg["gambar"];?>>
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data</button>
                </li>
            </ul>
        </form>
    </body>
</html>