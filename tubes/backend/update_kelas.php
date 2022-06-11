<?php
include '../config/connection.php';
//mengambil data dari input
$id = $_POST['id'];
$name = $_POST['name'];
$classLevel = $_POST['class_level_id'];
$category = $_POST['category_id'];
$membership = $_POST['tipe_membership_id'];

if (!empty($_FILES['image'])) {
  $image = $_FILES['image'];
  $fileTmp = $_FILES['image']['tmp_name'];
  $fileName = $_FILES["image"]["name"];
  $query = "UPDATE kelas SET 
          nama= '$name', 
          tingkat_kelas_id= '$classLevel',
          kategori_id= '$category',
          tipe_membership_id= '$membership',
          gambar= '$fileName'
          WHERE id = '$id'";

  //update database, data masuk database
  $result = mysqli_query($db, $query);
  move_uploaded_file($fileTmp, '../img/' . $fileName);
} else {
  $query = "UPDATE kelas SET 
          nama= '$name', 
          tingkat_kelas_id= '$classLevel',
          kategori_id= '$category',
          tipe_membership_id= '$membership'
          WHERE id = '$id'";
  $result = mysqli_query($db, $query);
}

if ($result) {
  echo json_encode(['status' => 200, 'message' => 'Data berhasil disimpan']);
} else {
  echo json_encode(['status' => 400, 'message' => 'Data gagal disimpan']);
}