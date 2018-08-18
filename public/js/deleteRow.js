function deleteRow(nama = null, id, row) {
  swal({
    title: 'Apakah kamu yakin menghapus '+ nama +' ?',
    text: "Data akan dihapus secara permanen",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus!',
    cancelButtonText: 'Tidak'
  }).then((result) => {
    if (result.value) {
      swal(
        'Sukses',
        'Data berhasil dihapus.',
        'success'
      )

      $.ajax({
        url: '/api/cucian/delete',
        method: 'post',
        data: {
          id: id
        },
        success: () => {
          row.remove();
        }
      });
    }
  });
}
