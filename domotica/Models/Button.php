<?php

namespace App\Models;

use PDO;

class Button extends BaseModel {
    public bool $state;

    protected function findByCategory($category_name) {
        global $db;

        $sql = "SELECT buttons.* FROM buttons
                JOIN button_category ON buttons.button_id = button_category.button_id
                JOIN categories ON button_category.category_id = categories.category_id
                WHERE categories.name = :name";

        $stmnt = $db->prepare($sql);
        $stmnt->execute([
            ':name' => $category_name
        ]);
        $buttons =  $stmnt->fetchAll(PDO::FETCH_OBJ);
        return parent::castToModel($buttons);
    }

    public function toggle() {
        return $this->state = !$this->state;
    }


}