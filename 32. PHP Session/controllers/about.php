<?php 
    // dd($_SESSION['name']);
    $_SESSION['last']="Cabaguing";
    view('about.view.php',[
            'heading'=>'About Us'
        ]    
    );