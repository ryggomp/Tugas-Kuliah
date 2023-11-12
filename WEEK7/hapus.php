<?php
require 'function.php';
$no = $_GET["no"];

if (hapus($no) > 0){
    echo "
    <script>
        alert('Barang berhasil dihapus!');
        document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('Barang Gagal Dihapus!');
        document.location.href = 'index.php';
    </script>
    ";
}
?>