<?php
session_start();
include("config.php");
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $paswd = $_POST['pass'];
    $sql = "SELECT * FROM `admin` WHERE email = '$email' && pass='$paswd'";
    $result = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($result);
    if ($total == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id']; // Set the session variable for user ID
        $_SESSION['email'] = $email;
        echo "<script>window.location ='view.php' </script>";
    } else {
        echo '<script>alert("Login Failed")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        h1 {
            margin: 0;
        }

        .container {
            width: 300px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            padding-right: 10px;
            
        }

        .form-content {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #102C57;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .links {
            margin-top: 10px;
            text-align: center;
        }

        .links a {
            color: #007bff;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }
        
        nav li {
            list-style: none;
            display: inline-block;
            padding: 10px;
            

        }

        .nav-links {
            background-color: #DAC0A3;

        }

        nav a {
            color: #333;

        }

        .nav-links a:hover {
            border-bottom: 2px solid darkblue;
            padding: 20px;
            color: #333;

        }
    </style>
</head>

<body>

<div class="nav-links">
                        <nav>
                            <ul>
                                <li><a href="#">Domain</a></li>
                                <li><a href="#">Hosting</a></li>
                                <li><a href="#">Web Promotion</a></li>
                                <li><a href="#">Web Designing</a></li>
                                <li><a href="#">Add ons</a></li>
                                <li><a href="#">Support</a></li>

                            </ul>
                        </nav>
                    </div>
    <form method="post">
      <div class="head">

            <h1>ADMIN PAGE</h1><br>
            <div class="container">
            <form method="post">
                <div class="form-content">

                    <input type="hidden" id="id" name="id" />
                </div>
                <div class="form-content">
                    <label for="email">User Email:</label>
                    <input type="text" id="email" name="email" placeholder="Your Email here" required />
                </div>
                <div class="form-content">
                    <label for="password">User Password:</label>
                    <input type="password" id="password" name="pass" placeholder="Enter Your Password here" required />
                </div>
                <div class="login">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
            <div class="links">
                <a href="forgot.php">Forgot Password?</a>


            </div>
        </div>
      </div>

        
    </form>
</body>

</html>