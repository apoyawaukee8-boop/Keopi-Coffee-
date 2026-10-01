<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#contact');
    exit;
}
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');


if ($name === '' || $subject === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['noticeType'] = 'warning';
    $_SESSION['noticeMessage'] = 'Please complete every field and enter a valid email address.';
    header('Location: index.php#contact');
    exit;
}

require 'db.php';

$sql = 'INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)';
$statement = mysqli_prepare($connection, $sql);

if ($statement) {
    mysqli_stmt_bind_param($statement, 'ssss', $name, $email, $subject, $message);

    if (mysqli_stmt_execute($statement)) {
        mysqli_stmt_close($statement);
        mysqli_close($connection);
        $_SESSION['noticeType'] = 'success';
        $_SESSION['noticeMessage'] = 'Thanks for reaching out! Your message has been saved.';
        header('Location: index.php#contact');
        exit;
    }

    mysqli_stmt_close($statement);
}

mysqli_close($connection);
$_SESSION['noticeType'] = 'danger';
$_SESSION['noticeMessage'] = 'We could not save your message right now. Please try again later.';
header('Location: index.php#contact');
exit;
