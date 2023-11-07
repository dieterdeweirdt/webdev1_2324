<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Object Oriented Programming</h1>
    <pre>
    <code>
<?php
include 'models/user.php';
include 'models/teacher.php';

$user = new Teacher('Michael', 'Vanderpoorten');
$user->age = 30;
$user->courses = ['Mobile Development 1', 'UX/UI Design'];

$user2 = new User();
$user2->age = "41";

var_dump($user);

echo $user->getFullName();
?>
    </code>
    </pre>
</body>
</html>