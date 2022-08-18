<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Jadwal</h1>
  </div>
  <a href="<?= base_url('jadwal/tambah') ?>" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Tambah Data</a>
  <?= $this->session->flashdata('message'); ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Film</th>
        <th scope="col">Bioskop</th>
        <th scope="col">Waktu</th>
        <th scope="col">Kuota</th>
        <th scope="col">Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; foreach ($vaJadwal as $j) : ?>
      <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $j['kode'] ?></td>
        <td><?= $j['film_kode'] ?></td>
        <td><?= $j['bioskop_kode'] ?></td>
        <td><?= $j['waktu'] ?></td>
        <td><?= $j['kuota'] ?></td>
        <td><?= $j['harga'] ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>