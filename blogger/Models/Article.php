<?php

namespace App\Models;

class Article extends BaseModel {


    protected function getByUserId($user_id) {
        $sql = "SELECT * FROM articles WHERE user_id = :user_id ORDER BY created_on desc LIMIT 20";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['user_id' => $user_id]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'App\Models\Article');
        return $stmt->fetchAll();
    }

    protected function getByTag($tag) {

        if($tag == 0) {
            $sql = "SELECT * FROM articles ORDER BY created_on desc LIMIT 20";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $stmt->setFetchMode(\PDO::FETCH_CLASS, 'App\Models\Article');
            return $stmt->fetchAll();
        } else {
            $sql = "SELECT * FROM articles INNER JOIN article_tag ON articles.article_id = article_tag.article_id WHERE tag_id = :tag_id ORDER BY created_on desc LIMIT 20";
            $stmt = $this->db->prepare($sql);
            $stmt->execute(['tag_id' => $tag]);
            $stmt->setFetchMode(\PDO::FETCH_CLASS, 'App\Models\Article');
            return $stmt->fetchAll();
        }
    }

    public function getTags() {
        $sql = "SELECT * FROM tags INNER JOIN article_tag ON tags.tag_id = article_tag.tag_id WHERE article_id = :article_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['article_id' => $this->article_id]);
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'App\Models\Tag');
        return $stmt->fetchAll();
    }

    public function user() {
        return User::find($this->user_id);
    }

    public function getImagePath() {
        $prefix = (substr($this->image, 0, 4) == 'http') ? '' : '/uploads/';
        return $prefix . $this->image;
    }

    public function save() {
        

        $sql = "INSERT INTO articles (title, content, image, user_id, created_on) VALUES (:title, :content, :image, :user_id, NOW())";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'title' => $this->title,
            'content' => $this->content,
            'image' => $this->image,
            'user_id' => $this->user_id
        ]);
        $this->article_id = $this->db->lastInsertId();

        // Save tags
        foreach($this->tags as $tag) {
            $sql = "INSERT INTO article_tag (article_id, tag_id) VALUES (:article_id, :tag_id)";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([
                'article_id' => $this->article_id,
                'tag_id' => $tag
            ]);
        }

    }

}