<!DOCTYPE html>
<html><head><title>About</title><link rel="stylesheet" href="style.css"></head>
<body>
<nav class="navbar">
  <div class="navbar-logo">Dashboard</div>
  <ul class="navbar-menu">
    <li><a href="?page=home">Home</a></li>
    <li><a href="?page=about">About</a></li>
    <li><a href="?page=pengembang">Pengembang</a></li>
    <li><a href="?page=rekomendasi">Identifikasi</a></li>
    <li><a href="?page=History">History</a></li>
    <?php if ($_SESSION['role'] === 'admin'): ?>
      <li><a href="?page=data_training">Data Training</a></li>
      <li><a href="?page=history_user">History User</a></li>
    <?php endif; ?>
    <li><a href="logout.php">Logout</a></li>
  </ul>
</nav>
  <div class="container">
    <h2>Tentang Aplikasi</h2>
    <p>Aplikasi ini memberikan rekomendasi program pemberdayaan berdasarkan kondisi sosial ekonomi.</p>
  </div>
<div class="container">
  <h2>Petunjuk Penggunaan</h2>
  <ol>
   <li>Daftar akun baru atau login jika sudah memililki akun</li>
   <li>Akses Menu identifikasi di panel navigasi</li>
   <li>Isi Formulir Sesuai Kondisi yang ada</li>
   <li>Klik Tombol Rekomendasikan</li>
   <li>Sistem akan menampilkan hasil program rekomendasi yang sudah sesuai</li>
  </ol>
 </div>
  <div class="container">
  <h2>Fungsi Halaman</h2>
  <ul>
   <li>Daftar akun baru atau login jika sudah memililki akun</li>
   <li>Akses Menu identifikasi di panel navigasi</li>
   <li>Isi Formulir Sesuai Kondisi yang ada</li>
   <li>Klik Tombol Rekomendasikan</li>
   <li>Sistem akan menampilkan hasil program rekomendasi yang sudah sesuai</li>
  </ul>
 </div>
</body>
</html>
