<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Film</h1>
  </div>
  <a href="<?= base_url('film/tambah') ?>" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Tambah Data</a>
  <?= $this->session->flashdata('message'); ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Kode</th>
        <th scope="col">Judul</th>
        <th scope="col">Tanggal Rilis</th>
        <th scope="col">Sipnosis</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; foreach ($vaFilm as $f) : ?>
      <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $f['kode'] ?></td>
        <td><?= $f['judul'] ?></td>
        <td><?= date('d-m-Y', strtotime($f['tgl_launc'])) ?></td>
        <td><?= $f['synopsys'] ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>