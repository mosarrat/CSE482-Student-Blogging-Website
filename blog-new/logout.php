<?php
include('path.php');

session_start();

// logout user
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['admin']);
unset($_SESSION['message']);
unset($_SESSION['type']);

// destyroy the cookies
setcookie('id', '', time() - 60 * 60 * 24 * 7);
setcookie('username', '', time() - 60 * 60 * 24 * 7);
setcookie('admin', '', time() - 60 * 60 * 24 * 7);

session_destroy();

header('location: ' . Base_URL . 'index.php');
