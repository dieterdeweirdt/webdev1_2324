<?php

namespace App\Controllers;

class HomeController extends BaseController {

    public static function index () {

        self::loadView('/home', [
            'title' => 'Homepage'
        ]);
    }

}