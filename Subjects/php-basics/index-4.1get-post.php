<?php
    /*
     * $_GET, $_POST = special variables used to collect data from an HTML form
     * data is sent to the file in the action attribute of <Form>
     *<form action="some_file.php" method="get">
     *
     * $_GET = Data is appended to the url
     *  NOT SECURE
     *  char limit
     *  Bookmark is possible w/ values
     *  GET requests can be cached
     *  Better for a search page
     *
     * $_POST = Data is packaged inside the body of the HTTP request
     *  MORE SECURE
     *  No data limit
     *  Cannot bookmark
     *  GET requests are not cached
     *  Better for submitting credentials
    **/
?>

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
    <form action="index-4.1get-post.php" method="post">
        <label>username:</label> <br>
        <input type="text" name="username"><br>
        <label>password:</label> <br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>
<?php
//    echo $_GET["username"] . "<br>";
//    echo "{$_GET["password"]} <br>";
//Get stores the sensetive data in the URL we don't want this so instead we will use a $POST

    echo $_POST["username"] . "<br>";
    echo "{$_POST["password"]} <br>";
?>