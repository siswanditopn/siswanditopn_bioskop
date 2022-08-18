<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Film</h1>
    <small>Form Tambah Data</small>
  </div>
  <form action="<?= base_url('film/tambah'); ?>" method="post">
    <div class="mb-3">
      <label for="judul" class="form-label">Judul</label>
      <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul film..." value="<?= set_value('judul'); ?>">
      <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <label for="tgl_launc" class="form-label">Tanggal Rilis</label>
      <input type="date" class="form-control" id="tgl_launc" name="tgl_launc" placeholder="Tanggal rilis..." value="<?= set_value('tgl_launc'); ?>">
      <?= form_error('tgl_launc', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <label for="synopsys" class="form-label">Sipnosis</label>
      <textarea class="form-control" placeholder="Sipnosis..." id="synopsys" name="synopsys" style="height: 100px"><?= set_value('synopsys'); ?></textarea>
      <?= form_error('synopsys', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
    </div>
  </form>
</main>