<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil dan bersihkan input username
    $username = trim($_POST['username']);

    // Simpan username dan role ke session
    $_SESSION['username'] = $username;
    $_SESSION['role'] = 'user';

    // Simpan username ke file history_user.txt
    file_put_contents('history_user.txt', $username . PHP_EOL, FILE_APPEND);

    // Arahkan ke halaman dashboard_user.php
    header("Location: dashboard_user.php");
    exit;
}
?>

<!DOCTYPE html>
<html><head><title>Register User</title><link rel="stylesheet" href="style.css"></head>
<body><div class="container">
  <h2>Register User</h2>
  <form method="POST">
    <label>Nama Pengguna:</label><input type="text" name="username" required>
    <button type="submit">Masuk</button>
  </form>
</div></body></html>
