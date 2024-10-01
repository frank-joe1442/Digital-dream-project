
<?php
 $prop = "user";
 $name = "John Doe";
setcookie($prop,$name, time() + (86400 * 30), "/"); // 86400 = 1 day
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

  echo "Value is: " . $_COOKIE["user"];

?>

</body>
</html>
