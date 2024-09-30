<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Kontak Kami</h1>
        <form action="konfirmasi.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label><br>
                <input type="radio" id="male" name="gender" value="Laki-laki" required>
                <label for="male">Laki-laki</label><br>
                <input type="radio" id="female" name="gender" value="Perempuan" required>
                <label for="female">Perempuan</label>
            </div>
            <div class="mb-3">
                <label for="birthdate" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
