<?php

CONST DB_DSN = 'mysql:dbname=cocktails;host=db;port=3306';
CONST DB_USER = 'db';
CONST DB_PWD = 'db';

//connectie maken met DB
$db = new PDO(DB_DSN, DB_USER, DB_PWD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
