<?php

$users = $app['database']->selectAll('user');





require 'views/index.view.php';
