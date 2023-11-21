<?php
$base_dir = __DIR__;

require_once $base_dir . '/includes/db.php';
require_once $base_dir . '/functions/users.php';
require_once $base_dir . '/functions/buttons.php';
require_once $base_dir . '/functions/categories.php';

session_start();
$user = $_SESSION['user_id'] ?? 0;

function checkUser() {
    global $user;
    if(!$user){
        header('location: login.php');
    }
}