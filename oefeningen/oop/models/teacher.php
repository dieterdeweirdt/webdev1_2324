<?php

class Teacher extends User {
    public array $courses = [];
    
    private function getCoursesString() : string {
        return implode(', ', $this->courses);
    }

    public function getTheRealCoursesString() : string {
        return parent::getFullName() . ': ' . $this->getCoursesString();
    }
}