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

$f3->route('GET /survey', Function($f3) {

    $view = new Template();
    echo $view->render('views/survey.html');
});

//Run F3
$f3->run();