<?php

class NewsController {

    public function index() {
        //echo 'Dit is het lijstscherm';
        $news = new News();
        $all_news = $news->getAll();
        include  '../Views/news/list.php';

    }

    public function detail(string $slug){
        //echo "Dit is het detailscherm van: $slug";
        $news = new News();
        $item = $news->getBySlug($slug);
        include '../Views/news/detail.php';
    }

}