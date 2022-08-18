<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Bioskop</h1>
  </div>
  <a href="<?= base_url('bioskop/tambah') ?>" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Tambah Data</a>
  <?= $this->session->flashdata('message'); ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Nama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Kota</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; foreach ($vaBioskop as $b) : ?>
      <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $b['kode'] ?></td>
        <td><?= $b['nama'] ?></td>
        <td><?= $b['alamat'] ?></td>
        <td><?= $b['kota_id'] ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>