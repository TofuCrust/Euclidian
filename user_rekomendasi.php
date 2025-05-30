<!DOCTYPE html>
<html>
<head>
<title>Identifikasi</title>
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
  <h2>Form Identifikasi</h2>
  <form action="proses_rekomendasi.php" method="POST">
    <label>Penghasilan:</label>
    <select name="penghasilan"><option value="1">Rendah</option><option value="2">Sedang</option><option value="3">Tinggi</option></select>
    <label>Pendidikan:</label>
    <select name="pendidikan"><option value="1">SD</option><option value="2">SMP</option><option value="3">SMA</option><option value="4">PT</option></select>
    <label>Status Pekerjaan:</label>
    <select name="status_pekerjaan"><option value="1">Tidak Bekerja</option><option value="2">Tidak Tetap</option><option value="3">Tetap</option></select>
    <label>Akses Kesehatan:</label>
    <select name="akses_kesehatan"><option value="1">Buruk</option><option value="2">Cukup</option><option value="3">Baik</option></select>
    <label>Akses Pendidikan:</label>
    <select name="akses_pendidikan"><option value="1">Buruk</option><option value="2">Cukup</option><option value="3">Baik</option></select>
    <button type="submit">Rekomendasikan</button>
  </form>
</div>
</body>
</html>
