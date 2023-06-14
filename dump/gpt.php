<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <link rel="stylesheet" type="text/css" href="gpt.css">
</head>
<body>
    <h1>Dashboard Admin</h1>

    <h2>Data</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <td>John Doe</td>
            <td>
                <button onclick="editData(1)">Ubah</button>
                <button onclick="deleteData(1)">Hapus</button>
            </td>
        </tr>
        <tr>
            <td>Jane Smith</td>
            <td>
                <button onclick="editData(2)">Ubah</button>
                <button onclick="deleteData(2)">Hapus</button>
            </td>
        </tr>
    </table>

    <h2>Tambah Data</h2>
    <form id="formTambah">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <button type="submit">Tambah</button>
    </form>

    <script src="gpt.css"></script>
</body>
</html>
