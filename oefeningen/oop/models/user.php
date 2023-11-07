<?php

class User {
    public string $firstname;
    public string $lastname;
    public int $age;

    public function __construct(string $firstname = 'John', string $lastname = 'Doe')
    {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    protected function getFullName() {
        return $this->firstname . ' ' . $this->lastname;
    }

    public function compareAge(User $user) {
        $diff = ($this->age > $user->age) ? ' ouder ' : ' jonger ';
        return "$this->firstname is  $diff";

    }
}