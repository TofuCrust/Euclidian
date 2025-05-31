<?php


if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
$username = $_SESSION['username'];

$lines = file('history_user.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$data_user = [];

foreach ($lines as $line) {
    $data = json_decode($line, true);
    if ($data !== null && isset($data['username']) && $data['username'] === $username) {
        $data_user[] = $data;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Histori User</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
  <div class="navbar-logo">Dashboard</div>
  <ul class="navbar-menu">
    <li><a href="?page=home">Home</a></li>
    <li><a href="?page=about">About</a></li>
    <li><a href="?page=pengembang">Pengembang</a></li>
    <li><a href="?page=rekomendasi">Identifikasi</a></li>
    <li><a href="?page=history">History</a></li>
    <?php if ($_SESSION['role'] === 'admin'): ?>
      <li><a href="?page=data_training">Data Training</a></li>
      <li><a href="?page=history_user">History User</a></li>
    <?php endif; ?>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</nav>
<h2>Histori Rekomendasi untuk <?= htmlspecialchars($username) ?></h2>
<table border="1" cellpadding="8" cellspacing="0">
    <tr><th>Waktu</th><th>Penghasilan</th><th>Pendidikan</th><th>Status Pekerjaan</th><th>Akses Kesehatan</th><th>Akses Pendidikan</th><th>Hasil</th></tr>
    <?php foreach ($data_user as $row): ?>
    <tr>
        <td><?= htmlspecialchars($row['waktu']) ?></td>
        <td><?= htmlspecialchars($row['input']['penghasilan']) ?></td>
        <td><?= htmlspecialchars($row['input']['pendidikan']) ?></td>
        <td><?= htmlspecialchars($row['input']['status_pekerjaan']) ?></td>
        <td><?= htmlspecialchars($row['input']['akses_kesehatan']) ?></td>
        <td><?= htmlspecialchars($row['input']['akses_pendidikan']) ?></td>
        <td><?= htmlspecialchars($row['hasil']) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>

