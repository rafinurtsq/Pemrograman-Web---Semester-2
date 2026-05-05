<?php
session_start();
include 'koneksi.php';

// kalau sudah login, langsung ke index
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$error = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $stmt = $dbh->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->execute([$username, $password]);
    $data = $stmt->fetch();

    if ($data) {
        $_SESSION['user'] = $data['username'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['foto'] = $data['foto']; // ✅ TAMBAHAN FOTO

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

<body>

    <div class="container mt-5" style="max-width:400px;">
        <div class="card shadow">
            <div class="card-header text-center bg-primary text-white">
                Login
            </div>
            <div class="card-body">

      <?php if ($error) { ?>
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php } ?>

                <form method="POST">
                    <div class="mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <button name="login" class="btn btn-primary w-100">Login</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>