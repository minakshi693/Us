<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pooja";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {
    // echo "connection succesfull";
} else {
    echo "connection failed";
}