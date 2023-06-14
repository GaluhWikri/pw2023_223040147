<?php 
// koneksi ke data base
$conn = mysqli_connect("localhost","root", "","pw2023_223040147" );
// cek tombol submit
if( isset($_POST["submit"]) ){
    // ambil data dari setiap form
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    // querry insert data
    $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')
                    ";
    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">       
         <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp">
            </li>
            <li>
                <label for="nama">nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah data</button>
            </li>
        </ul>
    </form>
    <form action=""></form>

</body>
</html>