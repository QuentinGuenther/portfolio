<?php
    session_start();

    // Turn on error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Require autoload
    require_once('vendor/autoload.php');

    // Create fat-free instance
    $f3 = Base::instance();

    // Set debug level to dev
    $f3->set('DEBUG', 3);

    // routes
    $f3->route('GET|POST /', function($f3) {
        echo Template::instance()->render('views/templates/home.html');
    });

    $f3->run();
