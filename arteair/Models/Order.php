<?php

namespace App\Models;

class Order extends BaseModel {

    public string $firstname;
    public string $lastname;
    public string $email;

    public function save() {
        global $db;

        $sql = "INSERT INTO orders (firstname, lastname, email, `date`) 
                VALUES (:firstname, :lastname, :email, :date)";

        $query = $db->prepare($sql);
        $query->execute([
            ':firstname' => $this->firstname,
            ':lastname' => $this->lastname,
            ':email' => $this->email,
            ':date' => date('Y-m-d H:i:s')
        ]);

        return $db->lastInsertId();

    }

}