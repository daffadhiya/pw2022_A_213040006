<?php
require '../config/connection.php';
$search = $_GET['search'];
$query = "SELECT k.id, k.tipe_membership_id, k.nama as nama, k.gambar, kt.nama as nama_kategori, tk.nama as nama_tingkat_kelas
               FROM kelas as k
               JOIN tingkat_kelas as tk ON k.tingkat_kelas_id = tk.id
               JOIN kategori as kt ON k.kategori_id = kt.id WHERE k.nama lIKE '%$search%' OR k.tipe_membership_id = '%$search%'";

$kelas = mysqli_query($db,$query);
$data = [];

while($row =mysqli_fetch_assoc($kelas) ){
$data[] = $row;
}

?>

<table class="table table-bordered table-striped">
  <tr>
    <th>No</th>
    <th>Nama Kelas</th>
    <th>Tingkat Kelas</th>
    <th>Kategori</th>
    <th>Membership</th>
    <th>Aksi</th>
  </tr>
  <?php $i = 1; foreach ($data as $class) : ?>
    <tr>
      <td><?= $i++ ?></td>
      <td><?= $class['nama'] ?></td>
      <td><?= $class['nama_tingkat_kelas'] ?></td>
      <td><?= $class['nama_kategori'] ?></td>
      <td><?= $class['tipe_membership_id'] ?></td>

      <td class="text-center">
        <a href="#" onclick="openModalEdit(<?= $class['id'] ?>)" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
        <a href="#" onclick="destroy(<?= $class['id'] ?>)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>