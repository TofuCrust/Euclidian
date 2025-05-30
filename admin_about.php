<!DOCTYPE html>
<html>
<head>
  <title>About</title>
  <link rel="stylesheet" href="style.css">
  <style>
    p {
      text-align: justify;
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
    <h2>Tentang Aplikasi</h2>
    <p>
      Sistem Rekomendasi Program Pemberdayaan Masyarakat adalah sebuah aplikasi berbasis web yang dirancang untuk membantu pihak pemerintah, organisasi sosial, maupun lembaga swadaya masyarakat dalam menentukan program pemberdayaan yang paling sesuai dengan karakteristik masyarakat sasaran.
      <br><br>
      Aplikasi ini menggunakan metode Euclidean Distance sebagai dasar pengambilan keputusan, di mana sistem akan membandingkan data karakteristik pengguna (penghasilan, pendidikan, pekerjaan, akses pendidikan, dan akses kesehatan) dengan kriteria dari berbagai program pemberdayaan yang tersedia. Hasil perhitungan akan menampilkan rekomendasi program dengan tingkat kesesuaian tertinggi.
    </p>
  </div>
</body>
</html>
