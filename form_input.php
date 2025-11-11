<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h2>Form Input</h2>

    <!-- Form untuk mengirim data menggunakan POST -->
    <form method="post" action="">
        <label>Nama: </label>
        <input type="text" name="nama" placeholder="Masukkan nama Anda" required>
        <input type="submit" value="Kirim">
    </form>

    <br>

    <?php
        // Cek apakah form sudah dikirim
        if (isset($_POST['nama']) && !empty($_POST['nama'])) {
            // Gunakan htmlspecialchars untuk keamanan
            $nama = htmlspecialchars($_POST['nama']);
            echo "<h3>Selamat Datang, $nama!</h3>";
        } else {
            echo "<p>Selamat Datang Rizky Maulana.</p>";
        }
    ?>
</body>
</html>
