<?php
session_start();
include_once 'koneksi.php';
include_once 'models/user.php'; // Panggil model User Anda

// kalau sudah login, langsung ke index
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$error = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password']; 

    // Menggunakan Class User yang sudah Anda buat
    $obj_user = new User();
    $data = $obj_user->login($username, $password);

    if ($data) {
        // Simpan data ke session
        $_SESSION['user'] = $data['username'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['foto'] = $data['foto'];

        header("Location: index.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="container mt-5" style="max-width:400px;">
        <div class="card shadow">
            <div class="card-header text-center bg-primary text-white">
                <h4>Halaman Login</h4>
            </div>
            <div class="card-body">

                <?php if ($error) { ?>
                    <div class="alert alert-danger text-center">
                        <?= $error ?>
                    </div>
                <?php } ?>

                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukkan Username"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password"
                            required>
                    </div>
                    <button name="login" type="submit" class="btn btn-primary w-100">Masuk</button>
                </form>

                <div class="text-center mt-3">
                    <a href="index.php?hal=home" class="text-decoration-none small">Kembali ke Home</a>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html> 