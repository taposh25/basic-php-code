<?php
$username = "";
$email = "";
$password = "";

if(isset($_POST['btn'])){
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
}
?>



<h2>User Name: <?php 
if(empty($username)){
   echo "Username required!";
}
else{
    echo $username;
}

?></h2>
<h2>Email: <?php 
if(empty($email)){
   echo "email required!";
}
else{
    echo $email;
}

?></h2>
<h2>Password: <?php 
if(empty($password)){
   echo "password required!";
}
else{
    echo $password;
}

?></h2>