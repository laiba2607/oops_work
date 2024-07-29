<?php

// $connect = mysqli_connect("localhost","root","");
// $create = "create database mydb";
// $result = mysqli_query($connect,$create);

// if($result){
//     echo "database created";
// }else{
//     echo "database not created";
// }


// $connect = mysqli_connect("localhost","root","","mydb");

// $createtable = "create table users(id int(11) primary key auto_increment,name varchar(255),email varchar(255))";

// $result = mysqli_query($connect,$createtable);





// $result = mysqli_query($connect,$create);

// if($result){
//     echo "table created";
// }else{
//     echo "table not created";
// }


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the password field is set
    if (isset($_POST['password'])) {
$password = $_POST['password'];

if(strlen($password) < 8){
    echo "password too short";
}
else if(strlen($password) > 20){
    echo "password too long";
}
else if(!preg_match('/[0-9]/',$password)){
    echo "password must include at least one number";
}
else if(!preg_match('/[A-Z]/',$password)){
    echo "password must include at least one uppercase letter";
}
else if(!preg_match('/[a-z]/',$password)){
    echo "password must include at least one lowercase letter";
}
else if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$password)){
    echo "password must include at least one special character";
}
else {
    echo "password is valid";
}
    }
}
?>

<form action="" method="post">
    Name
    <input type="text" name="name" id="name">
    <br><br>
    Password
    <input type="password" name="password" id="password"><br><br>
    <input type="submit" value="login">
</form>





