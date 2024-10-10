<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "workers";


//database connection
//$conn = new mysqli($server, $username, $password);

//database  continous connection

$conn = new mysqli($server, $username, $password, $database); //variable for connecting

//error and success checker
if($conn->connect_error){
    die("connection rejected:" . $conn->connect_error );
}else{
    echo "connection successful";
}
echo "<br>";

// $create = "CREATE DATABASE students";
// if($conn->query($create)=== TRUE){
//     echo "database created successfully";
// }else{
//     die("database creation failed" . $conn->error);
// }

$craeteTable = "CREATE TABLE employees (
id INT(6) UNSIGNED PRIMARY KEY AUTO_INCRE MENT,
name VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
address VARCHAR(100) NOT NULL,
date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn->query($craeteTable)){
echo "new table created successfully";
}else{
    die("error creating table" . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>