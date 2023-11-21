<?php

function getButtonsByCategory($category_id) {
    global $db;

    //sql schrijven
    $sql = "
    SELECT buttons.*, button_types.icon FROM buttons 
    INNER JOIN button_category ON buttons.button_id = button_category.button_id
    INNER JOIN button_types ON buttons.type_id = button_types.button_type_id
    WHERE category_id = :id";
    //uitvoeren
    $stmnt = $db->prepare($sql);
    $stmnt->execute([
        ":id" => $category_id
    ]);
    //data ophalen
    return $stmnt->fetchAll(PDO::FETCH_OBJ);
}

function updateButton($button_id, $status) {
    global $db;
    $sql = "UPDATE buttons SET status = :status WHERE button_id = :id";
    //uitvoeren
    $stmnt = $db->prepare($sql);
    $stmnt->execute([
        ':status' => $status,
        ':id' => $button_id
    ]);
}