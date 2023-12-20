<?php

namespace App\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Tag;

class ArticleController extends BaseController {

    public static function index ($tag = 0) {

        //Ophalen van de artikels volgens tag
        $articles = Article::getByTag($tag);

        //view inladen en nodige variabelen doorgeven
        self::loadView('/article/list', [
            'title' => 'Homepage',
            'articles' => $articles,
            'current_tag' => $tag, 
        ]);
    }

    public static function detail ($id) {
        $article = Article::find($id);

        $comments = Comment::getByArticleId($id);

        if(!isset($article->article_id)) {
            header('Location: /?error=Article not found');
        }

        self::loadView('/article/detail', [
            'title' => $article->title,
            'article' => $article,
            'comments' => $comments,
        ]);
    }

    public static function add () {
        self::loadView('/article/add', [
            'title' => 'Add Article',
        ]);
    }
    public static function save () {
        $article = new Article();

        if(isset($_FILES['image']) &&  $_FILES['image']['error'] == 0) {
            $pathinfo = pathinfo($_FILES['image']['name']);
            $article->image = uniqid() . '.' . $pathinfo['extension'];
            move_uploaded_file($_FILES['image']['tmp_name'], BASE_DIR . '/public/uploads/' . $article->image);
        }

        $article->title = $_POST['title'];
        $article->content = $_POST['content'];
        $article->user_id = $_POST['user_id'];
        $article->tags = $_POST['tags'];
        $article->save();

        header('Location: /article/' . $article->article_id);

    }

}