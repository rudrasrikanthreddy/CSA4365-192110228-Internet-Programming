<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION["userid"])) {
    header("location: login-form.php");
    exit;
}

// Get the user ID from the session
$userid = $_SESSION["userid"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css"> <!-- You can style your welcome page in a separate CSS file -->
</head>
<body>
    <div class="container">
        <h2>Welcome</h2>
        <p>Hello User <?php echo $userid; ?>!</p>
        <a href="logout.php">Logout</a> <!-- You can create a logout.php file for the logout functionality -->
    </div>
</body>
</html>
