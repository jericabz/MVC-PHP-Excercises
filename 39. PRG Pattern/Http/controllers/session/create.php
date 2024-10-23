<?php
use Core\Session;

    // dd(Session::get('errors')??[]);
    view('session/create.view.php',[
            'heading'=>'User Login',
            'errors'=>Session::get('errors')??[],
            'returns'=>Session::get('returns')??[],
        ]    
    );