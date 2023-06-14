<?php
$conn = mysqli_connect("localhost", "root", "", "tubes");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah_artikel($data)
{
    global $conn;

    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $judul = htmlspecialchars($data["judul"]);
    $isi = htmlspecialchars($data["isi"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $penulis = htmlspecialchars($data["penulis"]);
    $waktu = htmlspecialchars($data["waktu"]);

    $query = "INSERT INTO admin (gambar, judul, isi, kategori, penulis, waktu) VALUES ('$gambar', '$judul', '$isi', '$kategori','$penulis', '$waktu')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "<script>alert('Masukan foto terlebih dahulu');</script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>alert('Yang Anda upload bukan gambar');</script>";
        return false;
    }

    if ($ukuranFile > 1000000) {
        echo "<script>alert('Ukuran gambar terlalu besar');</script>";
        return false;
    }

    // Memindahkan file
    move_uploaded_file($tmpName, '../img/' . $namaFile);
    return $namaFile;
}

function hapus_admin($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM admin WHERE id = '$id'");
    return mysqli_affected_rows($conn);
}
//function ubah artikel
function ubah_admin($data) {
	global $conn;

	$gambar = upload();
	if (!$gambar){
		return false;
	}

	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]);
	$isi = htmlspecialchars($data["isi"]);
	$kategori = htmlspecialchars($data["kategori"]);
	$penulis = htmlspecialchars($data["penulis"]);
	$waktu = htmlspecialchars($data["waktu"]);

	$query = "UPDATE admin SET
				gambar = '$gambar',
				judul = '$judul',
				isi = '$isi',
				kategori = '$kategori', 
				penulis = '$penulis',
				waktu = '$waktu'
				WHERE id = $id";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


// function admin search
function cari($keyword)
{
    global $conn;
    $keyword = mysqli_real_escape_string($conn, $keyword);
    $query = "SELECT * FROM admin
                WHERE
                judul LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%'";
    return query($query);
}
// live seaching
if(isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM 
                admin
            WHERE 
                judul LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%' 
            ";
    $admin = query($query);
} else{
    $admin = query("SELECT * FROM admin");
}

?>
