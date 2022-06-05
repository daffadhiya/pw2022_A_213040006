<?php
include '../config/connection.php';

$name = $_POST['name'];
$classLevel = $_POST['class_level_id'];
$category = $_POST['category_id'];
$membership = $_POST['tipe_membership_id'];
$image = $_FILES['image'];
$fileTmp = $_FILES['image']['tmp_name'];
$fileName = $_FILES["image"]["name"];

$query = "INSERT INTO kelas (nama, tingkat_kelas_id, kategori_id, tipe_membership_id, gambar)
          VALUES ('$name', '$classLevel', '$category','$membership', '$fileName')";
$result = mysqli_query($db, $query);
move_uploaded_file($fileTmp, '../img/' . $fileName);

if ($result) {
  echo json_encode(['status' => 200, 'message' => 'Data berhasil disimpan']);
} else {
  echo json_encode(['status' => 400, 'message' => 'Data gagal disimpan']);
}