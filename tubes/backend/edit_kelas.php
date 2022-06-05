<?php
include '../config/connection.php';

$id = $_GET['id'];

$query = "SELECT * FROM kelas WHERE id = '$id'";
$result = mysqli_query($db, $query);

if ($result) {
  echo json_encode(['status' => 200, 'data' => $result->fetch_assoc()]);
} else {
  echo json_encode(['status' => 404, 'message' => 'Data tidak ditemukan']);
}