<?php

session_start();

session_unset();
session_destroy();
// print_r($_SESSION['user']);
header('location: signin.php');

?>