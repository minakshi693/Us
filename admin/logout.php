<?php
session_start();
include("config.php");
if (!isset($_SESSION['email'])) {
    echo "<script>window.location = 'index.php'</script>";
}

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    echo "<script>alert('logout successfully ');</script>";
    echo "<script>window.location ='index.php'; </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav {
            background-color: #A6D1E6;
            overflow: hidden;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        nav a:hover {
            background-color: #ddd;
            color: black;
        }

        .logout {
            float: right;
            padding: 14px 20px;
            color: white;
            text-decoration: none;
        }

        .logout:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
<nav>
    <a href="view.php">Home</a>
    <a href="new_password.php">Change Password</a>
    <a href="newuser.php">New User</a>
    <!-- Logout button with the same CSS class -->
    <a href="logout.php" class="logout">Logout</a>
</nav>
</body>
</html>
