
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

$input = [
  (int)$_POST['penghasilan'],
  (int)$_POST['pendidikan'],
  (int)$_POST['status_pekerjaan'],
  (int)$_POST['akses_kesehatan'],
  (int)$_POST['akses_pendidikan']
];
$rekomendasi = '';
$min_distance = null;

foreach ($data_training as $row) {
  $dist = euclideanDistance($input, $row);
  if ($min_distance === null || $dist < $min_distance) {
    $min_distance = $dist;
    $rekomendasi = $row[5];
  }
 }
// Simpan ke history_user.txt
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
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Hasil Rekomendasi</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      padding: 20px;
    }
    .container {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
      text-align: center;
    }
    h2 {
      color: #333;
    }
    .result {
      font-size: 1.2em;
      margin: 20px 0;
      color: #007BFF;
    }
    .explanation {
      font-size: 0.95em;
      color: #555;
      margin-bottom: 25px;
    }
    a.button {
      display: inline-block;
      text-decoration: none;
      padding: 10px 20px;
      background: #007BFF;
      color: white;
      border-radius: 5px;
      transition: background 0.3s ease;
    }
    a.button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Hasil Rekomendasi</h2>
    <p class="result"><strong>Program:</strong> <?= htmlspecialchars($rekomendasi) ?></p>
    <p class="explanation">
      Program ini bertujuan membantu Anda meningkatkan kemampuan sesuai kebutuhan yang teridentifikasi.<br />
      Gunakan menu <strong>Identifikasi</strong> untuk mencoba kondisi lainnya dan mendapatkan rekomendasi yang berbeda.
    </p>
    <a href="<?= $_SESSION['role'] === 'admin' ? "dashboard_admin.php?page=rekomendasi" : "dashboard_user.php?page=rekomendasi" ?>" class="button">Kembali</a>
  </div>
</body>
</html>



