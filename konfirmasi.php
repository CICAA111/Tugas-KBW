<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $birthdate = $_POST['birthdate'];

    // Calculate age
    $birthdate_timestamp = strtotime($birthdate);
    $current_date = new DateTime();
    $birth_date = new DateTime($birthdate);
    $age = $current_date->diff($birth_date)->y;
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
        <p>Tanggal Lahir: <?php echo date('d F Y', $birthdate_timestamp); ?></p>
        <p>Umur Kamu Saat Ini: <?php echo $age; ?> tahun</p>
    </div>
</body>
</html>
