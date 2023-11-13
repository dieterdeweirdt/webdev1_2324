<?php

class baseModel {


    public static function getAll($table) : array {
        global $db;

        $pages = 'SELECT * FROM ' . $table;
        $pages_statement = $db->prepare($pages);
        $pages_statement->execute();
        $pages = $pages_statement->fetchAll(PDO::FETCH_OBJ);
        return $pages;
    }

    public static function getById($table, $id) {
        global $db;

        $pages = "SELECT * FROM $table WHERE id = :id";
        $pages_statement = $db->prepare($pages);
        $pages_statement->execute([
            ':id' => $id
        ]);
        return $pages_statement->fetchObject();
    }
}