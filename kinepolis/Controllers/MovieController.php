<?php

namespace App\Controllers;

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

        print_r($movie);

        //Haal ook de schedule (JOIN schedule en de rooms)

        print_r($movie->getSchedule());

        //doorsturen naar de view
    }

}