<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>History User</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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
