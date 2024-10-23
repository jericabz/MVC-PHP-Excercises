<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamda Functions</title>
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

       
        
        // function filter($items,$trigger){
        //         $filteredItems = [];
        //         foreach($items as $item){
        //             if($trigger($item)){
        //                 $filteredItems[] = $item;
        //             }
        //         }
        //         return $filteredItems;
        //     };
        

        $filteredItems = array_filter($books,function($book){
            return $book["releaseYear"]>=2000 && $book["releaseYear"] <= 2009;
            });
    ?>
    <ul>
        <?php foreach ($filteredItems as $book):?>
            
            <li>
                <a href="#"><?=$book["name"]?> (<?=$book["releaseYear"]?>) - <?=$book["author"]?></a>
            </li>
            <br>
            
        <?php endforeach;?>
    </ul>
</body>
</html>