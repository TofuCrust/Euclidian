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
		$users = [];
		$records = [];

		if (file_exists($file)){
		   $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
		   foreach ($lines as $line) {
		       $data = json_decode($line, true);
		       if ($data === null) {
		       $users[] = $line;
		       } else {
			   $records[] = $data;
		       }
		   }	
		}
		if (!empty($users)) {
		   echo "<li><strong>Users Registered:</strong></li>";
		   foreach (array_unique($users) as $user) {
		       echo '<li>' . htmlspecialchars($user) . '</li>';
		   }
		}

		if (!empty($records)) {
		   echo '</ul><h2>Data Identifikasi User</h2>';
		   echo '<table border="1" cellpading="8" cellspacing="0">';
		   echo '<tr>
			   <th>Nama</th><th>Penghasilan</th><th>Pendidikan</th><th>Status Pekerjaan</th><th>Akses Kesehetan</th><th>Akses Pendidikan</th> <th>Hasil</th> <th>Waktu</th></tr>';

			foreach ($records as $rec){
			    echo '<tr>';
			    echo '<td>' . htmlspecialchars($rec['nama'] ?? 'admin') . '</td>';
			    echo '<td>' . htmlspecialchars($rec['input']['penghasilan'] ?? '-') . '</td>';
			    echo '<td>' . htmlspecialchars($rec['input']['pendidikan'] ?? '-') . '</td>';
			    echo '<td>' . htmlspecialchars($rec['input']['status_pekerjaan'] ?? '-') . '</td>';
			    echo '<td>' . htmlspecialchars($rec['input']['akses_kesehatan'] ?? '-') . '</td>';
			    echo '<td>' . htmlspecialchars($rec['input']['akses_pendidikan'] ?? '-') . '</td>';
			    echo '<td>' . htmlspecialchars($rec['hasil'] ?? '-') . '</td>';
			    echo '<td>' . (isset($rec['waktu']) ? date('d M Y, H:i', strtotime($rec['waktu'])) : '-') . '</td>';
			    echo '</tr>';
			}

		   echo '</table>';
		} else {
		echo '<li>Tidak ada Data Pengguna</li>';
		}
	?>
    </div>
</body>
</html>
