<?php 
        $books = [
            [
                'name'=>"Do Androids Dream of Electric Sheep",
                'author'=>"Jerome Doe",
                'purchaseUrl'=> 'http://example.com',
                'releaseYear'=>1952
            ],
            [
                'name'=>"The Langoliers",
                'author'=>"John Doe",
                'purchaseUrl'=> 'http://example.com',
                'releaseYear'=>2001
            ],
            [
                'name'=>"Hail Mary",
                'author'=>"Doe Joe",
                'purchaseUrl'=> 'http://example.com',
                'releaseYear'=>1954
            ],
            [
                'name'=>"Tom and Jerry",
                'author'=>"Doe Jack",
                'purchaseUrl'=> 'http://example.com',
                'releaseYear'=>2010
            ],
            [
                'name'=>"Civil Works",
                'author'=>"Jack Fruit",
                'purchaseUrl'=> 'http://example.com',
                'releaseYear'=>2009
            ]
        ];

        $filteredItems = array_filter($books,function($book){
            return $book["releaseYear"]>=2000 && $book["releaseYear"] <= 2009;
            });
        include 'index.view.php';