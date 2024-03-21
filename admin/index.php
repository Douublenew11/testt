<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        header('location: login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS */
        h1 {
            margin-bottom : 50px;
            margin-left: 10%;
            text-align: center; /* Centering the text */
            padding: 20px 0; /* Adding padding to the top and bottom */
        }

        /* Footer animation */
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <?php include "header.php"; ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php include "menu.php"; ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h1>Selamat datang <?php echo $_SESSION['username']; ?></h1>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <?php include "footer.php"; ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
