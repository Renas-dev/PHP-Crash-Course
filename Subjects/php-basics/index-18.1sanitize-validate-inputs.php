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

<form action="index-18.1sanitize-validate-inputs.php" method="post">
    <p>username:</p>
    <label>
        <input type="text" name="username">
    </label>
    <p>age:</p>
    <label>
        <input type="text" name="age">
    </label>
    <p>Email:</p>
    <label>
        <input type="text" name="email">
    </label>
    <input type="submit" name="login" value="login">
</form>
</body>
</html>

<?php
    /**
    if(isset($_POST["login"])){
        $username =  filter_input(INPUT_POST, "username",
        FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input( INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        echo "Hello $username you are $age years old! and your email is: $email";
        With SANITIZE filters we can protect our user inputs from injecting malicious code in our program up here are some examples.
    } */
if(isset($_POST["login"])){
    $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if(empty($age && $email)){
        echo "that number or email wasn't valid.";
    } else echo "You are $age years old. and your email is: $email";
}
?>