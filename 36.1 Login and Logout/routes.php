<?php

    // return [
    //     "/"=>"controllers/index.php",
    //     "/about"=>"controllers/about.php",
    //     "/notes"=>"controllers/notes/index.php",
    //     "/notes/create"=>"controllers/notes/create.php",
    //     "/note"=>"controllers/notes/show.php",
    //     "/contact"=>"controllers/contact.php"
    // ];
    
    $router->get('/','controllers/index.php');
    $router->get('/about','controllers/about.php');
    $router->get('/contact','controllers/contact.php');
   

    $router->get('/notes','controllers/notes/index.php')->only('auth');
    $router->get('/notes/create','controllers/notes/create.php');
    $router->post('/notes/create','controllers/notes/store.php');
    $router->get('/note','controllers/notes/show.php');
    $router->get('/note/edit','controllers/notes/edit.php');
    $router->patch('/note','controllers/notes/update.php');
    $router->delete('/note/edit','controllers/notes/destroy.php');


    $router->get('/register','controllers/registration/create.php')->only('guest');
    $router->post('/register','controllers/registration/store.php');

    $router->get('/login','controllers/session/create.php')->only('guest');
    $router->post('/session','controllers/session/store.php')->only('guest');
    $router->delete('/session','controllers/session/destroy.php')->only('auth');

    // dd($router->routes);