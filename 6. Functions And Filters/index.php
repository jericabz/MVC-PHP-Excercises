<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions and Filters</title>
</head>
<body>
<h1>Recommended Books</h1>
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

        // function filterByAuthor($name,$author){ 
        //     return $name["author"]===$author;
        // }
            function filterByAuthor($books,$author){
                $filteredBooks = [];
                foreach($books as $book){
                    if($book["author"]===$author){
                        $filteredBooks[] = $book;
                    }
                }
                return $filteredBooks;
            }
    ?>
    <ul>
        <?php foreach (filterByAuthor($books,"John Doe") as $book):?>
            
            <li>
                <a href="#"><?=$book["name"]?> (<?=$book["releaseYear"]?>) - <?=$book["author"]?></a>
            </li>
            <br>
            
        <?php endforeach;?>
    </ul>
</body>
</html>