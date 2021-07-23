<?php
require_once "database.php";

if (isset($_POST['login_submit'])) {

    require_once "session.php";
    
    $name = $_POST['Name'];
    $matric_number = $_POST['Matric_Number'];
    $level = $_POST['Level'];

    if (empty($name) || empty($matric_number) || empty($level)) {
        header("Location: index_0.php?Please_input_all_fields");
    }
    else {
        $sql = "INSERT INTO quiz_system (Name, Matric_Number, Level)
               VALUES ('$name', '$matric_number', '$level');";
        $result = mysqli_query($conn, $sql);
        header("location: index.php");
    }
}
else {
    header("location: index_0.php");
}
