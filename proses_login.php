<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website responsive</title>
</head>
<body>
    <h1>Proses Login</h1>
    <?php
        // Ambil data dari form login
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Cek username dan password
        if ($username === 'admin' && $password === 'password123') {
            echo "<h2>Login Berhasil!</h2>";
            echo "<p>Selamat datang, $username!</p>";
        } else {
            echo "<h2>Login Gagal!</h2>";
            echo "<p>Username atau password salah.</p>";
        }
    ?>
</body>
</html>