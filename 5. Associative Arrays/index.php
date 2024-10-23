<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
    
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
                'releaseYear'=>1953
            ],
            [
                'name'=>"Hail Mary",
                'author'=>"Doe Joe",
                'purchaseUrl'=> 'http://example.com',
                'releaseYear'=>1954
            ]
        ];
    ?>
    <ul>
        <?php foreach ($books as $book):?>
            <li>
                <a href="#"><?=$book["name"]?></a>
                <ul>
                    <li> <?=$book["releaseYear"]?></li>
                    <li> <?=$book["author"]?></li>
                </ul>
            </li>
            <br>
        <?php endforeach;?>
    </ul>
</body>
</html>