<?php
session_start();

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header('Location: index.php'); // Redirect to homepage
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password === $confirm_password) {
        // Here you would typically hash the password and update it in your database
        // Assuming you have a function called updatePassword($userId, $hashedPassword)

        // Example:
        // $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        // updatePassword($_SESSION['user_id'], $hashed_password);

        // Redirect back to settings with a success message
        header('Location: adminSettings.php?status=success');
    } else {
        // Redirect back with an error message
        header('Location: AdminSettings.php?status=error');
    }
}
