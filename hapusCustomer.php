<?php 
include('function.php');

hapusDataCustomer($_GET["customerNumber"]);
    echo "
        <script>
        alert('Data Berhasil Dihapus!');
        document.location.href = 'index.php';
        </script>
    ";
?>