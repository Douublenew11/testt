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
        h1{
            margin-left: 40%;
            padding-top: 30px;
        }
    </style>
</head>
<body>
<?php 
    include "header.php";
    include "menu.php";
?>

<h1>Selamat datang <?php echo $_SESSION['username']; ?></h1>

<?php
include "footer.php";
?>
<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
