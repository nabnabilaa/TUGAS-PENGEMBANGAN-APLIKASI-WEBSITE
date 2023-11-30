<?php

require 'function.php';

$kode_prod = $_GET ["kode_prod"];


if ( hapus($kode_prod) > 0) {
    echo "
    <script>
        alert('DATA BERHASIL DIHAPUS');
        document.location.href = '../latihan1/index.php';
    </script>
    ";
} else {
    echo "
        <script>
            alert('DATA GAGAL DIHAPUS');
            document.location.href = '../latihan1/index.php';
        </script>
        ";
    
}




?>