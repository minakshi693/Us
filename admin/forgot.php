<?php 

session_start();
require "config.php";
if (isset($_POST['submit'])) {
    $_SESSION['email'] = $_POST['email'];
    $q  = "SELECT * FROM `admin` WHERE email='$_SESSION[email]';";
    $result = mysqli_query($conn, $q);
    $user = mysqli_fetch_assoc($result);

    if ($result) {

        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
                 

            $to = $_POST['email'];
            $cc = $_POST['email'];
            $from = "admin@mina.kitret.com";
            $sub = 'New password';
            $headers = "From: $from\r\n" .
                "Cc: $cc \r\n" .
                'X-Mailer: PHP/' . phpversion() . "\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/html; charset=utf-8\r\n" .
                "Content-Transfer-Encoding: 8bit\r\n\r\n";
            $mess = "<a href='https://mina.kitret.com/pooja/admin/change_pswd.php'>Change Pass</a>";
                $ee=mail($to,$sub,$mess,$headers);
                if($ee){
            echo "<script>alert('email send to $_SESSION[email]')</script>";
            echo "<script>window.location ='index.php'; </script>";// imp
                }
        } else {

            echo "<script>alert('you have no accounts')</script>";
        }
    }
}





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
            line-height: 1.7em;
            padding: 0;
            background-color: #ffffff;

        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        h1 {
            margin: 0;
        }

        .container {
            max-width: 400px;
            margin: 100px auto;
            /* Adjust vertical margin to center */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
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
    </style>
</head>

<body>
    

        <div class="container">
            <form method="POST">
                <h3>Trouble logging in?</h3>
                <span>Enter your email, phone, or username and we'll send you a link to get back into your
                    account.</span>
                <div class="form-content">
                    <label for="email">User Email:</label>
                    <input type="text" id="email" name="email" placeholder="Email,Phone or Username" required />
                </div>

                <div class="login">

                    
                <input type="submit" value="Send Login Link" name="submit">
                </div>
            </form>
                
</body>

</html>


