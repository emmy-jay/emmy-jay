<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "test";

$conn = mysqli_connect($server_name, $user_name, $password, $db_name);

if (!$conn) {
    die("Error: " . mysqli_connect_error());
}