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
    
    <h2><?php echo $_SESSION["username"]?></h2>
    <h3><?php echo $_SESSION["email"]?></h3>
    <h4><?php echo $_SESSION["password"]?></h4>
    
</body>
</html>