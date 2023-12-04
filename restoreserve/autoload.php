<?php

if(!file_exists(__DIR__ . '/vendor/autoload.php')) {
    echo 'Run composer first';
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

function sortUnderscoreToFront($a, $b) {
    if (substr($a, 0, 1) == '_' || substr($b, 0, 1) == '_') {
        return ((substr($a,0,1)=='_')?-1:1);
    }
    return strcmp(strval($a), strval($b));
}

function loadPhpFiles($dir, $recursive = true) {
    $items = preg_grep('/^([^.])/', scandir($dir));
    usort($items, 'sortUnderscoreToFront');

    foreach($items as $item) {
        if ($recursive && strpos( $item, '.') !== 0 && is_dir($dir . '/' . $item)) {
            loadPhpFiles($dir . '/' . $item);
        } else {
            $file_parts = pathinfo($item);
            if($file_parts['extension'] == 'php') {
                require_once $dir . '/' . $item;
            }
        }
    }
}

loadPhpFiles( __DIR__ . '/Controllers');
loadPhpFiles( __DIR__ . '/Models');