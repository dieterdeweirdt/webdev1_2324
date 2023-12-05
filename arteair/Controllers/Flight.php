<?php

namespace App\Controllers;

use App\Models\Flight;

class FlightController extends BaseController {

    public static function index () {

        $flights = Flight::getAll();

        self::loadView('/home', [
            'title' => 'Homepage',
            'flights' => $flights
        ]);
    }

    public static function detail ($id) {
        
        $flight = Flight::getById($id);

        //print_r($flight);

        self::loadView('/flight', [
            'title' => 'Flight detail',
            'flight' => $flight
        ]);


    }

    

}