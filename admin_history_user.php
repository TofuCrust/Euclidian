<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>History User</title>
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
    <?php if ($_SESSION['role'] === 'admin'): ?>
      <li><a href="?page=data_training">Data Training</a></li>
      <li><a href="?page=history_user">History User</a></li>
    <?php endif; ?>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</nav>
    <div class="container">
        <h2>Riwayat User yang Register</h2>
        <ul>
            <?php
            $file = 'history_user.txt';

            if (file_exists($file)) {
                // Ambil semua baris dari file dan hilangkan duplikat serta baris kosong
                $users = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $unique_users = array_unique($users);

                if (!empty($unique_users)) {
                    foreach ($unique_users as $user) {
                        echo '<li>' . htmlspecialchars($user, ENT_QUOTES, 'UTF-8') . '</li>';
                    }
                } else {
                    echo '<li>Belum ada pengguna yang terdaftar.</li>';
                }
            } else {
                echo '<li>Tidak ada data pengguna.</li>';
            }
            ?>
        </ul>
    </div>
</body>
</html>
