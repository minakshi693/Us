<?php
session_start();
if (!isset($_SESSION['email'])) {
           echo "<script>window.location ='index.php'; </script>";
 
}else{
require "config.php";

if (isset($_POST['submit'])) {
    $password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    if ($_SESSION['pass'] == $con_password) {
        $q = "UPDATE `admin` SET pass='$confirm_password' WHERE email = '$_SESSION[email]'";
        $result = mysqli_query($conn, $q);
        session_unset();
        session_destroy();
        echo "<script>alert('Your password is changed ');</script>";
        echo "<script>window.location ='index.php'; </script>";

    } else {
        echo "<script>alert('Do not match password');</script>";
    }}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Validation</title>      
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            line-height: 1.7em;
            padding: 0;
            background-color: #ffffff;

        }

        h2 {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            
            margin: 100px auto;
            /* Adjust vertical margin to center */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            background-color: #EADBC8;
            padding: 30px;
            width: fit-content;
            margin-bottom: 20px;
            margin: 60px auto;
            border-radius: 15px;

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
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }

        button[type="submit"]:hover {
            background-color: #555;
        }

        .links {
            margin-top: 10px;
        }

        .links a {
            color: #333;
            text-decoration: none;
        }

        .links a:hover {
            text-decoration: underline;
        }

        .separator {
            margin: 0 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="validation-form">
            <h2>Password Validation</h2>
            <form method="post">

                <div class="input-container">
                    <input type="password" id="new_password" name="pass" placeholder="New Password" required>

                </div>
                <div class="input-container">
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password"
                        required>

                </div>

                <button type="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
    
</body>

</html>