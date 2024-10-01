<?php 
session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $_SESSION["username"] = "frank";
    $_SESSION["email"] = "frankjoe1442@gmail.com";
    $_SESSION["password"] = "frank1442";


    echo $_SESSION["username"] . '<br>'; 
    echo $_SESSION["email"] . '<br>'; 
    echo $_SESSION["password"] . '<br>';
    ?>
</body>
</html>