<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "latihan";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Mengecek apakah form telah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $birthdate = mysqli_real_escape_string($conn, $_POST['birthdate']);

    // Menyusun query untuk memasukkan data ke dalam tabel
    $sql = "INSERT INTO biodata (nama, email, gender, ttl)
    VALUES ('$name', '$email', '$gender', '$birthdate')";

    // Mengeksekusi query dan mengecek apakah berhasil
    if (mysqli_query($conn, $sql)) {
        echo "Data baru berhasil dimasukkan!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Menutup koneksi
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Data</h1>
        <p>Nama: <?php echo htmlspecialchars($name); ?></p>
        <p>Email: <?php echo htmlspecialchars($email); ?></p>
        <p>Gender: <?php echo htmlspecialchars($gender); ?></p>
        <p>Tanggal Lahir: <?php echo date('d F Y', strtotime($birthdate)); ?></p>
    </div>
</body>
</html>