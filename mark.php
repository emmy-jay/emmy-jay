<?php
require_once "database.php";
require_once "session.php";

if (isset($_POST['submit'])) {
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $correct = 0;

    if ($question1 == "a") {
        $correct++;
    }
    if ($question2 == "a") {
        $correct++;
    }

    $sql = "UPDATE quiz_system  SET Overall_Score='$correct' WHERE Matric_Number=;";
    $result = mysqli_query($conn, $sql);
    
    session_destroy();
}
else {
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You're Done</title>
</head>
<body>
    <p>Your test has been recorded and you scored <?php echo "$correct/2"; ?> <br>
    Click <a href="index_0.php">here</a> to logout and go back to the login page</p>
</body>
</html>