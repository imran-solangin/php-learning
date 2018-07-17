<?php




require 'functions.php';
require 'task.php';


$pdo = connectToDB();


$tasks = fetchAllTask($pdo);





require 'index.view.php';
