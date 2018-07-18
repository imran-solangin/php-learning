<?php

require 'core/bootstrap.php';


// $routes = new Router;


// require 'routes.php';



require Router::load('routes.php')
  
   ->direct(Request::uri(), Request::method());

// $uri = trim($_SERVER['REQUEST_URI'], '/');

