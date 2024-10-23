<?php 
    $_SESSION['name']="Jerome";

    view('/index.view.php',[
            'heading'=>'Home'
        ]    
    );