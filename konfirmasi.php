<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Kontak</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Konfirmasi Kontak</h1>

        <?php
        // Tangkap data dari form menggunakan metode POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = htmlspecialchars($_POST['nama']);
            $email = htmlspecialchars($_POST['email']);
            $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
            $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : [];

            echo "<p>Nama: " . $nama . "</p>";
            echo "<p>Email: " . $email . "</p>";
            echo "<p>Jenis Kelamin: " . $jenis_kelamin . "</p>";

            if (!empty($hobi)) {
                echo "<p>Hobi: " . implode(", ", $hobi) . "</p>";
            } else {
                echo "<p>Hobi: Tidak ada</p>";
            }
        } else {
            echo "<p>Data tidak valid.</p>";
        }
        ?>

        <a href="index.php" class="btn btn-primary mt-3">Kembali ke Form</a>
    </div>
</body>
</html>
