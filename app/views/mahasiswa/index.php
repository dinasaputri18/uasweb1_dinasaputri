<div class="container mt-3">

<div class="row">
    <div class="col-lg-6">
        <?php Flasher:: flash(); ?>
    </div>
</div>

<div class="row mb-3">
    <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
            Tambah Data Mahasiswa
        </button>
</div>
</div>

<div class="row mb-3">
    <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">

        <div class="input-group">
  <input type="text" class="form-control" placeholder="cari mahasiswa.." name="keyword" id="keyword" autocomplet="of">
  <button class="btn btn-primary" type="submit" id="tombolCari">cari</button>
</div>
        </form>
</div>
</div>
    <div class="col-lg-6">
    
        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
        <?php foreach( $data['mhs'] as $mhs ) : ?>
        <li class="list-group-item">
            <?= $mhs['nama']; ?> 
            <a href=""class="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" 
            class="badge badge-danger floar-right ml-1"onclick="return confirm('yakin?');">hapus</a>
            <a href=""class="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" 
            class="badge badge-success float-right tampilModalUbah"data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?=$mhs['id'] ?>>ubah</a>
            <a href="class="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" 
            class="badge badge-primary float-right ml-1">detai</a>
        </li>
        <?php endforeach; ?>

</ul>
</div>


<!-- Modal -->
 <div class="model fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialod" role="document">
        <div class="modal-content">
            <diva class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismis="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
  <label for="nama">nama</label>
  <input type="text" class="form-control" id="nama"  name="nama">
</div>

          <div class="form-group">
  <label for="nrp">NRP</label>
  <input type="number" class="form-control" id="nrp"  name="nrp">
</div>

          <div class="form-group">
  <label for="email">EMAIL</label>
  <input type="email " class="form-control" id="email"  name="email">
</div>

           <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select class="form-control" id="jurusan" name="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                 <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Pangan">Teknik Pangan</option>
                <option value="Teknik Planologi">Teknik Planologi</option>
               <option value="Teknik Lingkungan ">Teknik Lingkungan</option>
        </select>
        </div>
    


        </div>
        <div class="modal-footel">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="sumbmit" class="btn btn-primary">Tambah Data</button>
        </from>
        </div>
        </div>
        </div>
        </div>