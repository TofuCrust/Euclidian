<?php
// admin_data_training.php
$data_training = [
    // [No, Penghasilan, Pendidikan, Status Pekerjaan, Akses Kesehatan, Akses Pendidikan, Program yang Direkomendasikan]
    [1, 2, 1, 3, 2, 'Pelatihan Kerja'],
    [2, 3, 2, 2, 3, 'UMKM'],
    [1, 2, 1, 1, 1, 'Pelatihan Kerja'],
    [3, 4, 3, 3, 3, 'UMKM'],
    [2, 3, 1, 2, 2, 'Pelatihan Kerja'],
    [3, 3, 3, 3, 3, 'UMKM'],
    [2, 3, 3, 2, 2, 'UMKM'],
    [1, 2, 2, 2, 1, 'Pelatihan Kerja'],
    [2, 3, 1, 2, 2, 'Pelatihan Kerja'],
    [3, 4, 3, 3, 3, 'UMKM'],
    [2, 3, 2, 3, 2, 'UMKM'],
    [1, 2, 1, 2, 1, 'Pelatihan Kerja'],
    [3, 3, 3, 3, 3, 'UMKM'],
    [2, 3, 2, 2, 2, 'UMKM'],
    [1, 2, 1, 1, 1, 'Pelatihan Kerja']
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Training - Admin</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #aaa;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #2e86de;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
<nav class="navbar">
  <div class="navbar-logo">Dashboard</div>
  <ul class="navbar-menu">
    <li><a href="?page=home">Home</a></li>
    <li><a href="?page=about">About</a></li>
    <li><a href="?page=pengembang">Pengembang</a></li>
    <li><a href="?page=rekomendasi">Identifikasi</a></li>
    <?php if ($_SESSION['role'] === 'admin'): ?>
      <li><a href="?page=data_training">Data Training</a></li>
      <li><a href="?page=history_user">History User</a></li>
    <?php endif; ?>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</nav>
<div class="container">
    <h2>Data Training</h2>
    <table>
        <thead>
            <tr>
                <th>Kriteria 1</th>
                <th>Kriteria 2</th>
                <th>Kriteria 3</th>
                <th>Kriteria 4</th>
                <th>Kriteria 5</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_training as $data): ?>
                <tr>
                    <?php foreach ($data as $value): ?>
                        <td><?= htmlspecialchars($value) ?></td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
