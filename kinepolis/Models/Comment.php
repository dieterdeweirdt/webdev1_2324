<?php

namespace App\Models;
use PDO;

class Comment extends BaseModel {

    protected function getByMovieId($movie_id) {
        //sql om schedule op te halen van een bepaalde film

        $sql = 'SELECT * FROM comments WHERE movie_id = :movie_id ORDER BY created_on DESC';
        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute(
            [':movie_id' => $movie_id]
        );

        $comments = $pdo_statement->fetchAll( PDO::FETCH_OBJ ); 

        return self::castToModel($comments);
    }

}