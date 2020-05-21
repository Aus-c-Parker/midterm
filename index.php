<?php

//Start a session
session_start();

//Require the autoload file
require_once("vendor/autoload.php");

//Instantiate the F3 Base class
$f3 = Base::instance();

//Default route
$f3->route('GET /', function() {
    echo '<h1>Midterm Survey</h1>';
    echo '<a href="survey">Take my Midterm Survey</a>';

});

$f3->route('GET|POST /survey', function($f3) {

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $_SESSION['name'] = $_POST['name'];
        $_SESSION['music'] = $_POST['music'];

        $f3->reroute('result');

    }

    $view = new Template();
    echo $view->render('views/survey.html');
});

$f3->route('GET /result', function(){

    $view = new Template();
    echo $view->render('views/results.html');

    session_destroy();
});

//Run F3
$f3->run();