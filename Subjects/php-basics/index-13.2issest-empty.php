<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index-13.2issest-empty.php" method="post">
        <label>Username</label>
        <input type="text" name="username"> <br>
        <label>password</label>
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="Log In"> <br>
    </form>
</body>
</html>

<?php
    foreach($_POST as $key => $value){
        echo "{$key} =  {$value} <br>";
    }

//if (empty($_POST["username". "password"])){
//    echo "You forgot to ur username or password in the form <br>";
//
//}

//if (isset($_POST["login"])){
//    echo "You tried to login <br>";
//
//    $username = $_POST["username"];
//    $password = $_POST["password"];
//
//    if (empty($username)){
//        echo "Username is missing";
//    } elseif  (empty($password)){
//        echo "password is missing";
//    }
//    else {
//        echo "hello{$username}";
//    }
//}
?>