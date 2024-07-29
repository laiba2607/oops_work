<style>
    form{
        background-color: pink;
        width: 500px;
        height: 500px;
        margin-left: 380px;
        margin-top: 30px;
        border: solid;
        border-radius: 20px;

    }
    input{
        /* background-color: silver; */
        text-align: center;
        color: white;
        border: solid;
        outline: black;
        border-radius: 10px;
        padding: 20px;
        font-size: 20px;
        width: 400px;
        height: 50px;
        margin: 10px;
        /* margin-left: 400px; */
        margin-top: 50px;
        min-width: 80vh;
        }
        button{
            /* background-color: #000000; */
            /* color: white; */
            border: solid;
            border-radius: 30px;
            padding: 10px;
            font-size: 20px;
            width: 300px;
            height: 50px;
            /* margin: 10px; */
            margin-left: 90px;
        }
</style>
<!-- <h1>Cookie</h1> -->
<form action="" method="post">
    <input type="text" name="user" placeholder="enter name">
    <br><br>
    <button name="button" value="set">submit</button>
    <br><br>
    <button name="button" value="display">display</button>
    <br><br>
    <button name="button" value="delete">delete</button>
</form>

<?php

setcookie("name","ali", time() -10,"/");

if(isset($_POST["button"])){
    if($_POST["button"]=="set"){
    $val = $_POST['user'];
    setcookie("user",$val);
    echo "cookie is set";
} if($_POST['button']=='display'){
    if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
    }
}if($_POST['button']=='delete'){
    setcookie('user',null , -1);
}
}
// if($_POST['button']=='display'){
//     if(isset($_COOKIE['user'])){
//         echo $_COOKIE['user'];
//     }
// } 
// if($_POST['button']=='delete'){
//     setcookie('user',null , -1);
// }
// }
?>