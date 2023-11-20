<?php

namespace App\Controllers;
use App\Models\News;

class NewsController extends BaseController {

    public static function index () {
        $news = News::all();
        self::loadView('/news/list', [
            'title' => 'News',
            'news' => $news
        ]);
    }

    public static function detail ($id) {
        $news = News::find($id);

        self::loadView('/news/detail', [
            'title' => $news->title,
            'news' =>  $news
        ]);
    }

}