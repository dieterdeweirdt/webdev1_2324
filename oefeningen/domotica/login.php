<?php
require 'app.php';

if(isset($_POST['login'])) {
    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $user = getUserByEmail($login);

    if($user && password_verify($pass, $user->password)){
        $_SESSION['user_id'] = $user->user_id;
        header('location: index.php');
    } else {
        echo 'Unable to login';
    }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DeWeirdt</title>
    <link rel="stylesheet" href="assets/main.css">
  </head>
  <body class="login">
    <form method="POST">
        <h1>Login</h1>
        <input type="text" name="login">
        <input type="password" name="pass">
        <button type="submit">Inloggen</button>
    </form>
  </body>
</html>
