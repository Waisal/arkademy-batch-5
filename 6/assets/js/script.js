const name = $('.flashdata').data('name');
const flash = $('.flashdata').data('flash');

if (flash == 'Ditambahkan' || flash == 'Diubah' || flash == 'Dihapus') {
    Swal.fire({
        title: 'Data ' + name + ' Berhasil ' + flash,
        type: 'success'
    }).then((result) => {
        if (result.value) {
            document.location = 'index.php';
        }
    });
} else if (flash == 'Gagal Ditambahkan' || flash == 'Gagal Diubah' || flash == 'Gagal Dihapus') {
    Swal.fire({
        title: 'Data ' + name + ' ' + flash,
        type: 'error'
    }).then((result) => {
        if (result.value) {
            document.location = 'index.php';
        }
    });

}