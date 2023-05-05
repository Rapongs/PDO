<?php 
include('function.php');

hapusDataProduct($_GET["productCode"]);
    echo "
        <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'product.php';
        </script>
    ";
?>