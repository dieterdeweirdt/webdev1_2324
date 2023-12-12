<?php

namespace App\Controllers;

use App\Models\Comment;
use App\Models\Movie;

class MovieController extends BaseController {

    public function list() {
        //Ophalen van films
        $movies = Movie::all();

        //Doorsturen naar de view
        self::loadView( '/movie/list', [
            'films' => $movies
        ] );
    }

    public function detail($id) {

        //1 film ophalen adhv id
        $movie = Movie::find($id);
        $comments = Comment::getByMovieId($id);

        //doorsturen naar de view
        self::loadView( '/movie/detail', [
            'movie' => $movie,
            'comments' => $comments
        ] );
    }

}