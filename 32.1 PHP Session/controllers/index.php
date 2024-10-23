<?php 
    $_SESSION["name"] = "Jericho";
    
    view('/index.view.php',[
            'heading'=>'Home'
        ]    
    );