<?php
require_once 'app.php';
checkUser();

$button_id = intval($_GET['button_id'] ?? 0);

if($button_id) {
    $status = intval($_GET['status'] ?? 0);

    updateButton($button_id, $status);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    echo 'Error: Unknown button';
}