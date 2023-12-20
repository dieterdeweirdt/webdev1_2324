<?php

namespace App\Models;
use PDO;

class Comment extends BaseModel {

    protected function getByMovieId($movie_id, $page = 1) {
        //sql om schedule op te halen van een bepaalde film

        $sql = 'SELECT * 
                FROM comments 
                WHERE movie_id = :movie_id 
                ORDER BY created_on DESC 
                LIMIT 10 OFFSET ' . (($page - 1) * 10);

        $pdo_statement = $this->db->prepare($sql);
        $pdo_statement->execute(
            [':movie_id' => $movie_id]
        );

        $comments = $pdo_statement->fetchAll( PDO::FETCH_OBJ ); 

        return $comments;
    }

}