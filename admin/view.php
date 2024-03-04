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
</head>
<style>
    h1 {
        font-size: 24px;
        letter-spacing: 2px;
        text-transform: uppercase;
        padding: 10px;
        margin: 10px;
    }

    @media screen and (max-width: 600px) {
        tr {
            display: block;
        }

        td {
            display: block;
            width: 100%;
        }
    }


    table {
        width: 100%;
        margin: 20px;
        border-collapse: collapse;
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


    button:hover {
        background-color: #B5C0D0;
    }

    th,
    td {
        border: 1px solid #ccc;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f8f8f8f8;
    }

    tr:hover {
        background-color: #F5EEE6;
    }

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
        padding: 7px;
        margin: 2px 12px 0 0;

    }
</style>

<body>
    <nav>
        <a href="view.php">Home</a>
        <a href="new_password.php">Change Password</a>
        <a href="newuser.php">New User</a>
        <form method="get"><button type="submit" class="logout" name="logout">Logout</a>

    </nav>

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Company</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Support</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        <?php


        error_reporting(0);
        $sql = "SELECT * FROM `info` ORDER BY id DESC";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['id']; ?>
                    </td>
                    <td>
                        <?php echo $row['namee']; ?>
                    </td>
                    <td>
                        <?php echo $row['company']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <?php echo $row['mobile']; ?>
                    </td>
                    <td>
                        <?php echo $row['msg']; ?>
                    </td>

                    <input type="hidden" name="del_id" class="del_id">
                    <td>
                        <form action="update.php" method="post">
                            <input type="hidden" value="<?php echo $row['id'] ?>" name="edit_id" />
                            <button type="submit" name="edit_btn">Edit</button>

                        </form>
                    </td>
                    <td>
                        <?php echo "<button class='del_btn'><a href='delete.php? i=$row[id]'onclick='return checkdel()'>DELETE</a></button"; ?>
                    </td>


                    <script>
                        function checkdel() {
                       rerturn confirm("Are you Sure?");
                        }
                    </script>
                    <?php
            }
        }
        ?>


</body>

</html>