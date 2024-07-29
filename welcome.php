<?php

session_start();
echo $_SESSION['uname'];
echo $_SESSION['password'];

if(isset($_REQUEST['logout'])){
    session_unset();
    session_destroy();
    echo "<script>location.href='session.php'</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="logout" value="logout">
    </form>