<?php
session_start();
unset($_SESSION['Nama']);
session_destroy();
header('location:index.php');
?>