<?php
require "koneksi.php";
session_start();
if(isset($_SESSION["login"])){
    header("location: dexin.php");
    exit; // Penting untuk menghentikan eksekusi script setelah pengalihan header
}
if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '' || $password == '') {
        $_SESSION['error_login'] = 'Mohon Cek Kembali Username dan Password Anda';
    } else {
        $data_user = [
            'username' => 'admin',
            'password' => '123',
        ];
        if ($username == $data_user['username'] && ($password) == $data_user['password']){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['login'] = TRUE;

            header("location: dexin.php");
            exit; // Penting untuk menghentikan eksekusi script setelah pengalihan header
        } else {
            $_SESSION['error_login'] = 'Username atau Password salah!';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        .card {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Login</h1>
                    </div>
                    <div class="card-body">
                        <?php if(isset($_SESSION['error_login'])): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $_SESSION['error_login']; ?>
                            </div>
                        <?php endif; ?>
                        <form id="loginForm" action="" method="post">
                            <div class="mb-3">
                                <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
                            </div>
                            <div class="mb-3 mt-3 text-center">
                                <button type="submit" class="btn" style="width: 100%; background: lightgray" name="login" id="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
                <button class="btn btn-dark mt-3" style="width: 50%;"><a href="../index.php" style="text-decoration: none; color: white">Kembali</a></button>
            </div>
        </div>
    </div>
</body>
</html>
