
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<body>
  





<?php
$name =  $email = $website =  $comment = $gender = "";
    $nameErr = $emailErr  = $websiteErr =  $commentErr  = $genderErr = "";
  ?>   

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

Name: <input type="text" name="name">
<span class="error">* <?php echo $nameErr;?></span>
<br><br>
E-mail:
<input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
<br><br>
Website:
<input type="text" name="website">
<span class="error"><?php echo $websiteErr;?></span>
<br><br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
<span class="error">* <?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="submit" value="Submit">

</form>

<?php

    // collect value of input field

// $_REQUEST = ['fname'=>'frank', 'addres'=>'UNN', 'school'=>'digital dreams', 'age'=>'18' ]
//     $name = htmlspecialchars($_REQUEST['fname']);
//     $addres = htmlspecialchars($_REQUEST['addres']);
//     $school = htmlspecialchars($_REQUEST['school']);
//     $age = htmlspecialchars($_REQUEST['age']) ;

    
    
    //to make the code simpler use test_input function

   


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = test_input($_REQUEST['name']);
    $email = test_input($_REQUEST['email']);
    $website = test_input($_REQUEST['website']);
    $comment = test_input($_REQUEST['comment']) ;
    $gender = test_input($_REQUEST['gender']) ;
}
function test_input($data){
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);
    return $data;

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
    }
  
    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
    }
    
    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
    }
    
    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }
    
    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }

    // echo $name .'<br>';
    // echo $$email .'<br>';
    // echo $website .'<br>';
    // echo $comment . '<br>';
    // echo $gender . '<br>';

    // date_default_timezone_set("Africa/Lagos");
    // $nextyear = strtotime('next year');

    // echo "copyrite 1999-". date('Y:m:d', $nextyear)." " .date('h:i:sa');
    
    // fread ('html note.txt');
?>

<?php
function firstfunction($arg){
    echo "first function start" . '<br>';
    return $arg . "!" . $arg . "!!" . $arg . "!!!";
    echo "first function end" . '<br>';
}

function secondfunction($arg){
    echo "second function start" . '<br>';
    echo $arg . "!" . $arg . "!!" . $arg . "!!!";
    echo "second function end" . '<br>';
}
firstfunction("frank");
secondfunction("joe");


?>

</body>
</html>