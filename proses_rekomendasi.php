<?php
include 'data_training.php';
session_start();
$username = $_SESSION['username'] ?? 'guest';

function euclideanDistance($input, $data) {
  $sum = 0;
  for ($i = 0; $i < 5; $i++) {
    $sum += pow($input[$i] - $data[$i], 2);
  }
  return sqrt($sum);
}

$input = [(int)$_POST['penghasilan'], (int)$_POST['pendidikan'], (int)$_POST['status_pekerjaan'], (int)$_POST['akses_kesehatan'], (int)$_POST['akses_pendidikan']];
$rekomendasi = '';
$min_distance = null;

foreach ($data_training as $row) {
  $dist = euclideanDistance($input, $row);
  if ($min_distance === null || $dist < $min_distance) {
    $min_distance = $dist;
    $rekomendasi = $row[5];
  }
}

echo "<div class='container'><h2>Hasil Rekomendasi</h2><p><strong>Program:</strong> $rekomendasi</p><a href='" . ($_SESSION['role'] === 'admin' ? "dashboard_admin.php?page=rekomendasi" : "dashboard_user.php?page=rekomendasi") . "'>← Kembali</a></div>";

// Menyimpan ke history_user.txt

$log = [
    'username' => $username,
    'input' => [
        'penghasilan' => $_POST['penghasilan'],
        'pendidikan' => $_POST['pendidikan'],
        'status_pekerjaan' => $_POST['status_pekerjaan'],
        'akses_kesehatan' => $_POST['akses_kesehatan'],
        'akses_pendidikan' => $_POST['akses_pendidikan'],
    ],
    'hasil' => $rekomendasi,
    'waktu' => date('Y-m-d H:i:s'),
];

file_put_contents('history_user.txt', json_encode($log) . PHP_EOL, FILE_APPEND);


