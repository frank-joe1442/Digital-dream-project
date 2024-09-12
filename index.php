<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
  Name: <input type="text" name="fname">
  Addres: <input type="text" name="addres">
  School: <input type="text" name="school">
  Age: <input type="text" name="age">
  <input type="submit">
</form>

<?php

    // collect value of input field

// $_REQUEST = ['fname'=>'frank', 'addres'=>'UNN', 'school'=>'digital dreams', 'age'=>'18' ]
//     $name = htmlspecialchars($_REQUEST['fname']);
//     $addres = htmlspecialchars($_REQUEST['addres']);
//     $school = htmlspecialchars($_REQUEST['school']);
//     $age = htmlspecialchars($_REQUEST['age']) ;

    
    
    //to make the code simpler use test_input function

    $name =  $addres = $school =  $age = "";
    $nameErr =  $addresErr = $schoolErr =  $ageErr  = "";
    


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = test_input($_REQUEST['fname']);
    $addres = test_input($_REQUEST['addres']);
    $school = test_input($_REQUEST['school']);
    $age = test_input($_REQUEST['age']) ;
}
function test_input($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);
    return $data;

}

    echo $name .'<br>';
    echo $addres .'<br>';
    echo $school .'<br>';
    echo $age;
    
    
?>

</body>
</html>