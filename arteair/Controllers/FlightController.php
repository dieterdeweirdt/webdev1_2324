<?php

namespace App\Controllers;

use App\Models\Aircraft;
use App\Models\Flight;
use App\Models\Order;

class FlightController extends BaseController {

    public static function index () {

        $flights = Flight::getAll();

        self::loadView('/flight/list', [
            'title' => 'Homepage',
            'flights' => $flights
        ]);
    }

    public static function detail ($id) {
        
        $flight = Flight::getById($id);

        //print_r($flight);

        self::loadView('/flight/detail', [
            'title' => 'Flight detail',
            'flight' => $flight,
            'aircraft' => Aircraft::find($flight->aircraft_id)
        ]);


    }

    public static function order ($id) {
        print_r($_POST);
        exit;

        //todo: save order to database

        $order = new Order();
        $order->firstname = $_POST['firstname'];
        $order->lastname = $_POST['lastname'];
        $order->email = $_POST['email'];
        $order->save();


        //todo: lus over seats en save to database

        foreach($_POST['seats'] as $seat) {
            //insert into best in een model
        }



        print_r($order);

    }

    

}