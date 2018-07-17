<?php



function connectToDB(){

    try{
      return new PDO('mysql:host=127.0.0.1;dbname=mytodos', 'root', '');  
    
    }catch (PDOException $e){
    
        die($e->getMessage());
    }
}

function fetchAllTask($pdo){

    $statement = $pdo->prepare('select * from todos');

    $statement->execute();
    
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}