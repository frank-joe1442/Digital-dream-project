<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "digital";


$conn = new mysqli($server, $username, $password, $database);

if($conn->connect_error){
    die("connection error");
}else{
    echo "connection to database successful" . $conn->connect_error;
}
echo "<br>";


// $sql=("CREATE DATABASE digital");
// if($conn->query($sql)){
//     echo "database created successfully . <br>";
// }else{
//     echo "error creating database" . $conn->error;
// };

// $sql="CREATE TABLE players(
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(30) NOT NULL,
// email VARCHAR(30) NOT NULL,
// address VARCHAR(100),
// date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

// )";

// if($conn->query($sql)){
//     echo "table created successfully";
// }else{
//     echo "error creating table" . $conn->error;
// }

$sql = "INSERT INTO players(name, email, address) VALUES ('frank', 'frank@gmail.com', 'unn nsukka campus');";
$sql.= "INSERT INTO players(name, email, address) VALUES ('joe', 'joe@gmail.com', 'imt, enugu');";
$sql .= "INSERT INTO players(name, email, address) VALUES ('obi', 'obi@gmail.com', 'nsukka, town');";
$sql .= "INSERT INTO players(name, email, address) VALUES ('asp','asp@gmail.com', 'barracks, nsukka');";
if($conn->multi_query($sql)){
    $id = $conn->insert_id;
    echo "users created succesful with an ID of:" . $id . '<br>';
}else{
    echo "users not created" . $conn->error;;
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>database connection</h1>
</body>
</html>