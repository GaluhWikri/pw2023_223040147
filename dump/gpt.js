function deleteData(id) {
    // Konfirmasi penghapusan data
    if (confirm("Anda yakin ingin menghapus data ini?")) {
        // Kode untuk menghapus data sesuai dengan ID yang diberikan
        // Misalnya:
        axios.delete('/api/data/' + id)
            .then(function(response) {
                // Handling response
                console.log('Data berhasil dihapus');
            })
            .catch(function(error) {
                // Handling error
                console.error('Terjadi kesalahan saat menghapus data');
            });
    }
}

function editData(id) {
    // Kode untuk menampilkan form ubah data
    // Misalnya:
    axios.get('/api/data/' + id)
        .then(function(response) {
            var data = response.data;
            // Mengisi nilai form dengan data yang diambil
            document.getElementById('nama').value = data.nama;
            // Menampilkan form
            document.getElementById('formUbah').style.display = 'block';
        })
        .catch(function(error) {
            console.error('Terjadi kesalahan saat mengambil data');
        });
}

document.getElementById('formTambah').addEventListener('submit', function(event) {
    event.preventDefault();
    var nama = document.getElementById('nama').value;

    // Kode untuk menambahkan data baru
    axios.post('/api/data', { nama: nama })
        .then(function(response) {
            // Handling response
            console.log('Data berhasil ditambahkan');
        })
        .catch(function(error) {
            // Handling error
            console.error('Terjadi kesalahan saat menambahkan data');
        });
});
