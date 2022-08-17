<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kota/kabupaten</h1>
  </div>
  <a href="<?= base_url('kotakabupaten/tambah') ?>" class="btn btn-primary"><i class="fa-solid fa-circle-plus"></i> Tambah Data</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Alat</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; foreach ($vaKota as $k) : ?>
      <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $k['nama'] ?></td>
        <td>
          <a href="">edit</a>
          <a href="">hapus</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</main>