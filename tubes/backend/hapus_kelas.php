<?php
include '../config/connection.php';

$id = $_POST['id'];
$query = "DELETE FROM kelas WHERE id = '$id'";
$result = mysqli_query($db, $query);

if ($result) {
  echo json_encode(['status' => 200, 'message' => 'Data berhasil dihapus']);
} else {
  echo json_encode(['status' => 400, 'message' => 'Data gagal dihapus']);
}