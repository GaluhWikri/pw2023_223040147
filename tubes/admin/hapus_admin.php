<?php 
require 'functions.php';

$id = $_GET["id"];

if (hapus_admin($id) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'admin.php';
        </script>
        ";
}else {
    mysqli_error($id);
}


?>