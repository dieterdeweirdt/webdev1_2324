<?php

namespace App\Models;
use PDO;

class Movie extends BaseModel {

    public int $movie_id;

    public function getSchedule() {
        //sql om schedule op te halen van een bepaalde film

        $sql = 'SELECT schedule_id, start_date, rooms.*
        FROM schedules 
        JOIN rooms ON schedules.room_id = rooms.room_id
        WHERE movie_id = :movie_id';
        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute(
            [':movie_id' => $this->movie_id]
        );

        $schedules = $pdo_statement->fetchAll( PDO::FETCH_OBJ ); 

        return $schedules;
    }

}