<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["role"]);
include '../../redirection.php';
redirect('../../');
?>

