<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'staticweb_apoya';

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    $_SESSION['noticeType'] = 'danger';
    $_SESSION['noticeMessage'] = 'We could not save your message right now. Please try again later.';
    header('Location: index.php#contact');
    exit;
}

mysqli_set_charset($connection, 'utf8mb4');
