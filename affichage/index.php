<?php

    // require "templates/layout.phtml";
    require "config/autoload.php";
    
    $router = new Router();
    $router->handleRequest();
?>