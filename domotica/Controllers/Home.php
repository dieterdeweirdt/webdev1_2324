<?php

namespace App\Controllers;

class HomeController extends BaseController {

    public static function index () {

        self::loadView('/home', [
            'title' => 'Homepage'
        ]);
    }

    public static function hello ($name = 'Unknown') {
        self::loadView('/hello', [
            'title' => 'Hello GDM',
            'name' => $name
        ]);
    }

}