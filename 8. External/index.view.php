<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamda Functions</title>
</head>
<body>
<h1>Recommended Books</h1>
    
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