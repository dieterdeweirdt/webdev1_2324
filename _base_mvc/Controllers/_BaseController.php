<?php

namespace App\Controllers;

class BaseController {

    protected $viewPath = '';
    protected $method = 'index';
    protected $viewParams = [];
    
    public function __construct(){
        if ( ! $this->viewPath ) { 
            $classname = get_called_class();
            $this->viewPath = str_replace("Controller", '', str_replace("App\\Controllers\\", '', $classname ));
        };
    }

    public static function __callStatic ($method, $arg) {
        $obj = new static;
        $result = call_user_func_array (array ($obj, $method), $arg);
        if (method_exists ($obj, $method))
            return $result;
        return $obj;
    }

    private function loadView ($view = '', $params = [], $layout = 'main') {

        //maakt variabelen van een array
        extract($params);
        
        ob_start();
        include BASE_DIR . "/views/$view.php";
        $content = ob_get_contents();
        ob_end_clean();

        $layout = BASE_DIR . "/views/_layout/$layout.php";

        if (file_exists($layout)) {
            include $layout;
        } else {
            echo $content;
        }
    }

    protected function redirect($url, $code = 302) {
        header("Location: " . $url, true, $code);
        exit();
    }
}