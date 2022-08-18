<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Bioskop</h1>
    <small>Form Tambah Data</small>
  </div>
  <form action="<?= base_url('bioskop/tambah'); ?>" method="post">
    <div class="mb-3">
      <label for="kode" class="form-label">Kode</label>
      <input type="text" class="form-control" id="kode" name="kode" placeholder="Kode bioskop..." value="<?= set_value('kode'); ?>">
      <?= form_error('kode', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama bioskop..." value="<?= set_value('nama'); ?>">
      <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label>
      <textarea class="form-control" placeholder="Alamat..." id="alamat" name="alamat" style="height: 100px"><?= set_value('alamat'); ?></textarea>
      <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <label for="kota" class="form-label">Kota</label>
      <select class="form-select" name="kota">
        <option selected disabled>--- Pilih Kota ---</option>
        <?php
          foreach ($vaKota as $value) :
            $selected = "";
            if ($value['id'] == set_value('kota')) $selected = "selected";
        ?>
        <option value="<?= $value['id'] ?>" <?= $selected ?>><?= $value['nama'] ?></option>
        <?php endforeach ?>
      </select>
      <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
    </div>
  </form>
</main>