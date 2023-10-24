<?php
//In onderstaande hash zit 'testing' als wachtwoord
$hashed_from_db = '$2y$10$SrTSekBoSN6u1ZvIlLlvfebJum3vNGpN1Ha7cI4nsDZOzlEe.qYiS';

echo '<h2>Password Verify</h2>';

echo 'test = ';
var_dump(password_verify('test', $hashed_from_db));

echo '<br>Testing = ';
var_dump(password_verify('asdf', $hashed_from_db));

echo '<br>testing = ';
var_dump(password_verify('testing', $hashed_from_db));

echo '<h2>Password Hash</h2>';

$wachtwoord_via_form = 'testing';
$hashed_wachtwoord = password_hash($wachtwoord_via_form, PASSWORD_DEFAULT);
echo 'pass: ' . $wachtwoord_via_form;
echo '<br>hash: ' . $hashed_wachtwoord;