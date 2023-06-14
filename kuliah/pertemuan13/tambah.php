<?php
require('functions.php');

$title = 'from tambah data';

// insert data diketeki tombol diklik
if(isset($_POST['tambah'])){
    if (tambah($_POST) >0) {
        echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
            </script>" ;
    }
}

require('views/tambah.view.php');
