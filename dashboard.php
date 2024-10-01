<?php 
session_start();
echo$_COOKIE["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $_SESSION["user"]?></h1>
    <h2><?php echo $_SESSION["email"]?></h2>
    <h3><?php echo $_SESSION["website"]?></h3>
    <h4><?php echo $_SESSION["comment"]?></h4>
    <h5><?php echo $_SESSION["gender"]?></h5>
</body>
</html>