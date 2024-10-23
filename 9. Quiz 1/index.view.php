<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamda Functions</title>
</head>
<body>
<h1>Recommended Animals</h1>
    
    <ul>
        <?php foreach ($filteredAnimals as $animal):?>
            
            <li>
                <a href="#"><?=$animal["name"]?> (<?=$animal["type"]?>) - <?=$animal["habitat"]?></a>
            </li>
            <br>
            
        <?php endforeach;?>
    </ul>
</body>
</html>