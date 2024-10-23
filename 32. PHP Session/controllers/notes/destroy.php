<?php
    use Core\App;
    use Core\Database;
    
    // $config = require(base_path('config.php'));
    // $db = new Database($config['database']);

    // $db=App::container()->resolve('Core\Database');
    // $db=App::container()->resolve(Core\Database::class);
    
    $db=App::resolve(Database::class);

    // dd($db);

    $currentUserId = 1;

        $id=$_POST['id'];

        $note = $db->query('select * from notes where id = :id',['id'=>$id])->findOrFail();

        authorize($note['user_id']==$currentUserId);
        

        $db->query('DELETE FROM notes WHERE id=:id;',[
            'id'=>$id
        ]);

        header('Location: /notes');
        exit();

    