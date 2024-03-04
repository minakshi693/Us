<?php
session_start();
include("config.php");

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    echo "<script>alert('logout successfully ');</script>";
    echo "<script>window.location ='index.php'; </script>";
}
if (!isset($_SESSION['email'])) {
    // Redirect to the login page if not logged in
    echo "<script>window.location = 'index.php'</script>";
    exit;
}
?>
<?php
if (isset($_POST['change_password'])) {
    //get POST data
    $old = $_POST['old_password'];
    $new = $_POST['new_password'];
    $retype = $_POST['confirm_password'];

    //create a session for the data incase error occurs
    $_SESSION['old_password'] = $old;
    $_SESSION['new_password'] = $new;
    $_SESSION['confirm_password'] = $retype;



    //get user details
    $sql = "SELECT * FROM `admin` WHERE id = '" . $_SESSION['id'] . "'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();
    $stored = $row['pass'];

    if ($old == $stored) {
        if ($new == $retype) {
            // echo "<script>alert('Your password matches')</script>";
            $q = "UPDATE `admin` SET pass = '$new' where id = '" . $_SESSION['id'] . "'";
            if ($total = mysqli_query($conn, $q)) {
                echo "<script>alert('Your password changed successfully')</script>";

                unset($_SESSION['old']);
                unset($_SESSION['new']);
                unset($_SESSION['retype']);


            }
        } else {
            echo "<script>alert('Your password dont match')</script>";
        }
    } else {
        echo "<script>alert('Your Old Password is Incorrect')</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Change Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .form-content {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
    <div class="container">
        <h1>Change Password</h1>


        <form method="post">


            <div class="form-content">
                <label for="current_password">Current Password:</label>
                <input type="password" id="current_password" name="old_password" placeholder="Enter current password"
                    required />
            </div>
            <div class="form-content">
                <label for="new_password">New Password:</label>
                <input type="password" id="new_password" name="new_password" placeholder="Enter new password"
                    required />
            </div>
            <div class="form-content">
                <label for="confirm_password">Confirm New Password:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm new password"
                    required />
            </div>
            <div class="login">
                <input type="submit" value="Change Password" name="change_password">
            </div>
        </form>

    </div>
</body>

</html>