<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$database = "QUANAO";

$conn = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}