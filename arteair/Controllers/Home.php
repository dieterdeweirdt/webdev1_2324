<?php

namespace App\Controllers;

use App\Models\Flight;

class HomeController extends BaseController {

    public static function index () {

        $flights = Flight::getAll();

        self::loadView('/home', [
            'title' => 'Homepage',
            'flights' => $flights
        ]);
    }

}