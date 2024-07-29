<?php

// session_start();

// $_SESSION['username']='aiza';
// $_SESSION['password']='123';

// echo $_SESSION['username'];
// echo $_SESSION['password'];

// if(isset($_SESSION['username'])){
//     echo "session is set";
// }else{
//     echo "session is not set";
// }


// session_start();

// $_SESSION['username']='Murtaza';
// $_SESSION['password']='123';

// echo $_SESSION['username'];
// echo $_SESSION['password'];

// unset($_SESSION['username']);
// session_destroy();


session_start();

if(isset($_REQUEST['name']) || isset($_SESSION['password'])){
    $name = $_REQUEST['name'];
    $password = $_REQUEST['password'];
    $_SESSION['uname']=$name;
    $_SESSION['password']=$password;
    echo "<script>location.href='welcome.php'</script>";
}
?>

<form action="" method="post">
    NAME
    <input type="text" name="name" placeholder="Enter your name "  id="name">
     <br><br>PASSWORD
    <input type="password" name="password" placeholder="Enter your password" id="password">
    <br><br>
    <input type="submit" name="submit" value="Login">
</form>