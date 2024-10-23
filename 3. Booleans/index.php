<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booleans</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
        <?php 
            $person = "Dark Matter";
            $read = true;
            if($read){$message = "You have read \"$person\"."; }else{$message = "You have not read \"$person\".";}
        ?>
    <h1>
        <?= $message?>
    </h1>
</body>
</html>