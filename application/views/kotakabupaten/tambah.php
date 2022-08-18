<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kota/kabupaten</h1>
    <small>Form Tambah Data</small>
  </div>
  <form action="<?= base_url('kotakabupaten/tambah'); ?>" method="post">
    <div class="mb-3">
      <label for="nama" class="form-label">Kota/Kabupaten</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama kota/kabupaten..." value="<?= set_value('nama'); ?>">
      <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
    </div>
  </form>
</main>