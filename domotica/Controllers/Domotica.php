<?php

namespace App\Controllers;

use App\Models\Button;
use App\Models\Category;

class DomoticaController extends BaseController {

    public static function index ($current_category = '') {

        $categories = Category::all();

        if($current_category) {
            $buttons = Button::findByCategory($current_category);
            var_dump($buttons);
        }

        

        self::loadView('/domotica/index', [
            'title' => 'Domotica',
            'categories' => $categories
        ]);
    }
}