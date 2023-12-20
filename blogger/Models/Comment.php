<?php

namespace App\Models;

use PDO;

class Comment extends BaseModel {

    protected function getByArticleId($article_id) {
        global $db;
        //sql
        $sql = "SELECT * FROM comments WHERE article_id = :article_id";

        //prepare
        $stmnt = $db->prepare($sql);

        //execute
        $stmnt->execute([
            ':article_id' => $article_id
        ]);

        //fetch and cast to model
        $stmnt->setFetchMode(\PDO::FETCH_CLASS, 'App\Models\Comment');
        $results = $stmnt->fetchAll();

        //return
        return $results;
    }

}