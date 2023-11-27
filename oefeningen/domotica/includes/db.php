<?php

CONST DB_DSN = 'mysql:dbname=if0_35465606_db;host=sql107.infinityfree.com;port=3306';
CONST DB_USER = 'if0_35465606';
CONST DB_PWD = 'ZjrcM5dqIc3iL';

//connectie maken met DB
$db = new PDO(DB_DSN, DB_USER, DB_PWD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
