<?php
    require 'functions.php';
    require 'Database.php';
    // require 'routes.php';
    

    $db = new Database();
    $posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);

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
    