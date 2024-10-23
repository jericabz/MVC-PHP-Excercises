<?php
    require 'functions.php';
    require 'Database.php';
    // require 'routes.php';
    
    $config = require('config.php');
    
    $db = new Database($config['database']);
    $posts = $db->query("select * from posts")->fetchAll();

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
    