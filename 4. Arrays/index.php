<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
    
</head>
<body>
    <h1>Recommended Books</h1>
    <?php 
        $books = [
            "Do Androids Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
        ];
    ?>
    <ul>
        <?php
            // foreach ($books as $book) {
            //     // echo"<li>{$book}™</li>";//Curly brace if you want to concat with beside a string
            //     echo "<li>$book</li>";
            // }

            //Shorthand   
        ?>
        <?php foreach($books as $book):?>
            <li><div><?=$book?></div></li>
        <?php endforeach;?>
    </ul>
</body>
</html>