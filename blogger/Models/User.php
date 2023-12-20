<?php

namespace App\Models;

class User extends BaseModel {


    public function articles() {
        $sql = "SELECT * FROM articles WHERE user_id = :user_id ORDER BY created_on desc LIMIT 20";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['user_id' => $this->user_id]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'App\Models\Article');
        return $stmt->fetchAll();
    }

    public function fullName() {
        return $this->firstname . ' ' . $this->lastname;
    }


    protected function findByEmail($email) {
        $sql = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['email' => $email]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'App\Models\User');
        return $stmt->fetch();
    }

    public function register() {

        if($this->findByEmail($this->email)) {
            throw new \Exception('Email already exists');
        }

        $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (:firstname, :lastname, :email, :password)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'password' => password_hash($this->password, PASSWORD_DEFAULT)
        ]);
        $this->user_id = $this->db->lastInsertId();
    }


}