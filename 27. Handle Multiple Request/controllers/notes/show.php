<?php
    use Core\Database;
    
    $config = require(base_path('config.php'));
    $db = new Database($config['database']);
    $currentUserId = 1;

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $id=$_GET['id'];

        $note = $db->query('select * from notes where id = :id',['id'=>$id])->findOrFail();

        authorize($note['user_id']==$currentUserId);
        

        $db->query('DELETE FROM notes WHERE id=:id;',[
            'id'=>$_POST['id']
        ]);

        header('Location: /notes');

    }else{
        $id=$_GET['id'];

        $note = $db->query('select * from notes where id = :id',['id'=>$id])->findOrFail();

        authorize($note['user_id']==$currentUserId);
        

        view('notes/show.view.php',[
                'heading'=>'My Note',
                'note'=>$note
            ]    
        );
    }
    