<?php
require_once "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login to start your test</title>
</head>
<body>
    <div class="container">
        <form action="link.php" method="post">
            <input type="text" name="Name" placeholder="Full Name"><br>
            <input type="text" name="Matric_Number" placeholder="Matric Number"><br>
            <input type="text" name="Level" placeholder="Level"><br>
            <button type="submit" name="login_submit">Login</button>
        </form>
    </div>
</body>
</html>