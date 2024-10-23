<?php
    require 'functions.php';
    // require 'routes.php';
    
 // connect to our MYSQL database
$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);


$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

dd($posts);

















    // class Person{
    //     public $name;
    //     public $age;
    //     public $gender;


    //     public function breathe(){
    //         echo $this->name ." is breathing";
    //     }
    // }


    // $person = new Person();

    // $person->name = "John Doe";
    // $person->age = 25;
    // $person->gender = "Male";

    // dd($person->breathe());
    