<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Home</title><link rel="stylesheet" href="style.css"></head>
<body class="bg-cover">
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
<section class="home home-background">
  <div class="overlay">
    <h1>Selamat datang <?= htmlspecialchars($_SESSION['username']) ?></h1>
    <p>Silakan gunakan sistem sesuai kebutuhan Anda.</p>
  </div>
</section>
</body>
</html>
