<?php
session_start(); // Start the session

// Check if the user is logged in and is an admin
if (!isset($_SESSION['user_id']) || $_SESSION['user_role'] !== 'admin') {
    header('Location: index.php'); // Redirect to homepage
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Kween P Sports</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Change Password</h1>
        
        <form action="updateSettings.php" method="POST" class="bg-white p-6 rounded shadow-md">
            <div class="mb-4">
                <label for="new_password" class="block text-sm font-medium text-gray-700">New Password:</label>
                <input type="password" name="new_password" id="new_password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-orange-500 focus:border-orange-500">
            </div>
            <div class="mb-4">
                <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password:</label>
                <input type="password" name="confirm_password" id="confirm_password" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-orange-500 focus:border-orange-500">
            </div>
            <button type="submit" class="mt-4 bg-orange-500 text-white py-2 px-4 rounded hover:bg-orange-600">Update Password</button>
        </form>

        <?php if (isset($_GET['status'])): ?>
            <div class="mt-4 text-sm <?php echo ($_GET['status'] == 'success') ? 'text-green-600' : 'text-red-600'; ?>">
                <?php
                echo ($_GET['status'] == 'success') ? 'Password updated successfully.' : 'Passwords do not match. Please try again.';
                ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
