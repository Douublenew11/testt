<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Sidebar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Style untuk sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      width: 250px;
      padding: 20px;
      background-color: lightgray;
    }
    /* Style untuk konten */
    ul li a {
        text-decoration: none;
        color : black;
    }
    ul li a:hover {
      color : #5C5858;
    }

    /* Responsif */
    @media (max-width: 768px) {
      .sidebar {
        width: 100%;
        height: auto;
        position: static;
        background-color: transparent;
      }
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <h2>This Menu</h2>
    <ul>
      <li><a href="dexin.php">Home</a></li>
      <li><a href="data.php">Data</a></li>
      <li><a href="komentar.php">Komentar</a></li>
      <li><a href="logout.php" onclick="return confirm('Apakah Anda Yakin Akan Logout ?')">logout</a></li>
    </ul>
  </div>

  <!-- Bootstrap Bundle dengan Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
