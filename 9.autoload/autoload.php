<?php 
/// __autoload is a magic method used for autoload classes or interface

/// autoload can be completed by spl_autoload_register();


spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});


$php = new Php;
$java = new Java;
$javascript = new JavaScript;

?>