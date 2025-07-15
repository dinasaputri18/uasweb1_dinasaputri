$(function() {

    $(',tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').after('action', 'http://Desktop/uasweb1_dinasaputri/publik/mahasiswa/getubah');
    });


   $('.tampilModalUbah').on('click'. function() )
   $('.modal-footer button[type=submit]').html('Ubah Data');



   const id = $(this).data('id');
   
   $.ajax({
    url: 'http://Desktop/uasweb1_dinasaputri/publik/mahasiswa/getubah',
    data: {id : id},
    method: 'post',
    dataType: 'json',
    success: function(data) {
        $('nama').val(data.nama);
        $('nrp').val(data.nrp);
        $('email').val(data.email);
        $('jurusan').val(data.jurusan);
        $('#id').val(data.id);
    
    }
   })
});