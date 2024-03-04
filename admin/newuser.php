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

error_reporting(0);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namee = $_POST['id'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "INSERT INTO `admin` VALUES('','$email','$pass')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo '<script>alert("New User Added")</script>';
        echo "<script>window.location.href='view.php'</script>";
    } else {
        echo "Failed to add your data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            line-height: 1.7em;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .head {
            background-color: #EADBC8;
            padding: 30px;
            width: fit-content;
            margin-bottom: 20px;
            margin: 60px auto;
            border-radius: 15px;

        }

        nav {
            background-color: #A6D1E6;
            overflow: hidden;
        }

        button {
            font-size: 14px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            background-color: #B4CDE6;
            box-sizing: border-box;
            padding: 5px 10px;
            margin: 2px;
            border-radius: 10px;
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
            padding: 7px;
            margin: 2px 12px 0 0;
            
        }

        .logout:hover {
            background-color: #ddd;
            color: black;
        }

        .form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #102C57;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <nav>
        <a href="view.php">Home</a>
        <a href="new_password.php">Change Password</a>
        <a href="newuser.php">New User</a>
        <form method="get"><button type="submit" class="logout" name="logout">Logout</a>
        </form>
    </nav>

    <div class="head">

        <form class="form" action="#" method="post">
            <h2>Sign Up</h2>

            <input type="email" name="email" placeholder="Email" autocomplete="off" required>
            <input type="password" name="password" placeholder="Password" autocomplete="off" required>

            <input type="submit" value="Sign Up" />
        </form>
    </div>
</body>

</html>