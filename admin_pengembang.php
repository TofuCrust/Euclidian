<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Pengembang</title>
  <style>
    .container {
      max-width: 900px;
      margin: 0 auto;
      padding: 20px;
      font-family: sans-serif;
      text-align: center;
    }

    .developer-frame {
      margin: 10px;
    }

    .developer-frame img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      border-radius: 10px;
    }

    .developer-frame p {
      margin-top: 8px;
    }

    .developer-dosen {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      width: 100%;
      text-align: center;
      margin: 10px auto;
    }

    .developer-grid {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 30px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Pengembang</h2>

    <!-- Dosen Pembimbing -->
    <div class="developer-dosen">
      <img src="img/dosen.jpg" alt="Foto Dosen Pembimbing" />
      <p><strong>Dosen Pembimbing</strong></p>
      <p><strong>Yumarlin MZ, S.Kom., M.Pd., M.Kom. </strong></p>
    </div>

    <!-- Mahasiswa -->
    <div class="developer-grid">
      <div class="developer-frame">
        <img src="img/mhs1.jpg" alt="Foto Mahasiswa 1" />
        <p>Mahasiswa 1</p>
        <p>Calvin Joshua Saputra</p>
      </div>
      <div class="developer-frame">
        <img src="img/fuad.jpg" alt="Foto Mahasiswa 2" />
        <p>Mahasiswa 2</p>
        <p>Muhammad Fuad</p>
      </div>
      <div class="developer-frame">
        <img src="img/mahen.jpg" alt="Foto Mahasiswa 3" />
        <p>Mahasiswa 3</p>
        <p>Mahendra Anggitya Darmawan</p>
      </div>
    </div>
  </div>
</body>
</html>
