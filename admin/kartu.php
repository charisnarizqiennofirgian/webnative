<?php
$model = new Kartu();
$kartu = $model->jenisKartu();
?>
<h1 class="mt-4">Table Kartu</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
  <li class="breadcrumb-item active">Tables</li>
</ol>
<div class="card mb-4">
  <div class="card-body">
    DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
    .
  </div>
</div>
<div class="card mb-4">
  <div class="card-header">
    <i class="fas fa-table me-1"></i>
    Table Kartu
  </div>
  <div class="card-body">
    <a href="index.php?url=kartu_form" class="btn btn-primary btn-sm">Tambah</a>
    <table id="datatablesSimple">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Diskon</th>
          <th>Iuran</th>
          <th>Aksi</th>

        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama</th>
          <th>Diskon</th>
          <th>Iuran</th>
          <th>Aksi</th>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <?php
          $no = 1;
          foreach ($kartu as $row) {
          ?>
            <td><?= $no++ ?></td>
            <td><?= $row['kode'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['diskon'] ?></td>
            <td><?= $row['iuran'] ?></td>
            <td>
              <form action="">
                <a href="index.php?url=kartu_detail&id=<?= $row['id'] ?>" class="btn btn-info btn-sm">Detail</a>
                <a href="" class="btn btn-warning btn-sm">Ubah</a>
                <a href="" class="btn btn-danger btn-sm">Hapus</a>
              </form>
            </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>

</div>
</div>