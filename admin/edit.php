<?php
session_start();
include('config.php');

if (isset($_POST['update'])) {
    $id = $_POST['e_id'];
    $name = $_POST['e_namee'];
    $company = $_POST['e_company'];
    $email = $_POST['e_email'];
    $number = $_POST['e_phone'];
    $msg = $_POST['e_msg'];

    $upd = "UPDATE info SET namee = '$name', company='$company', email= '$email', mobile='$number',msg='$msg' WHERE id='$id'";
    $runn = mysqli_query($conn, $upd);

    if ($runn) {
        $_SESSION['success'] = "entered";   
        header('Location:view.php');
    } else {
        echo "fail to enter data";
    }
}

?>