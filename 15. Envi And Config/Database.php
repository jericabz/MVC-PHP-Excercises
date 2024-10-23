<?php

// connect to our MYSQL database

 class Database{
    private $connection;

    public function __construct($config,$username='root',$password=''){

        //http_build_query($config,'',';');host=localhost;port=3306;dbname=myapp;charset=utf8mb4

        $dsn = "mysql:".http_build_query($config,'',';');

        $this->connection = new PDO($dsn, $username, $password, 
        [PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
    }

    public function query($query){

        $statement = $this->connection->prepare($query);

        $statement->execute();

        return $statement;
    }
}
