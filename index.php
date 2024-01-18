<?php
    //This is my CONTROLLER!

    //Turn on error reporting
    ini_set("display_errors", 1);
    error_reporting(E_ALL);

    //require the autoload file
    require_once("vendor/autoload.php");

    //instantiate the F3 Base class
    $f3 = Base::instance();

    //Define a default route
    $f3 -> route ("GET /", function()
    {
        echo "<h1> Pet Home </h1>";
    });

    //Run fat-free
    $f3 -> run();
?>
