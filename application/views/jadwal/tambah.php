<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Jadwal</h1>
    <small>Form Tambah Data</small>
  </div>
  <form action="<?= base_url('jadwal/tambah'); ?>" method="post">
    <div class="mb-3">
      <label for="film_kode" class="form-label">Film</label>
      <select class="form-select" name="film_kode">
        <option selected disabled>--- Pilih Film ---</option>
        <?php
          foreach ($vaFilm as $value) :
            $selected = "";
            if ($value['kode'] == set_value('film_kode')) $selected = "selected";
        ?>
        <option value="<?= $value['kode'] ?>" <?= $selected ?>><?= $value['judul'] ?></option>
        <?php endforeach ?>
      </select>
      <?= form_error('kota', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <label for="bioskop_kode" class="form-label">Bioskop</label>
      <select class="form-select" name="bioskop_kode">
        <option selected disabled>--- Pilih Bioskop ---</option>
        <?php
          foreach ($vaBioskop as $value) :
            $selected = "";
            if ($value['kode'] == set_value('bioskop_kode')) $selected = "selected";
        ?>
        <option value="<?= $value['kode'] ?>" <?= $selected ?>><?= $value['nama'] ?></option>
        <?php endforeach ?>
      </select>
      <?= form_error('bioskop_kode', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <label for="waktu" class="form-label">Waktu</label>
      <input type="date" class="form-control" id="waktu" name="waktu" value="<?= set_value('waktu'); ?>">
      <?= form_error('waktu', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <label for="kuota" class="form-label">Kuota</label>
      <input type="text" class="form-control" id="kuota" name="kuota" value="<?= set_value('kuota'); ?>">
      <?= form_error('kuota', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input type="text" class="form-control" id="harga" name="harga" value="<?= set_value('harga'); ?>">
      <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
    </div>
    <div class="mb-3">
      <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
    </div>
  </form>
</main>