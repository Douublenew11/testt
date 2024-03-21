<?php
session_start();
unset($_SESSION);
session_destroy();

echo ("<script>alert('Logout berhasil');window.location.replace('login.php');</script>");

?>