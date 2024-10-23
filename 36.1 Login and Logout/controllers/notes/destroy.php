<?php
    use Core\App;
    use Core\Database;
    
    // Container Handles this
    // $config = require(base_path('config.php'));
    // $db = new Database($config['database']);

    $db = App::resolve(Database::class);
    // $db = App::container()->resolve(Database::class);

    // dd($db);

    $currentUserId = 1;

    $id=$_GET['id'];

    $note = $db->query('select * from notes where id = :id',['id'=>$id])->findOrFail();

    authorize($note['user_id']==$currentUserId);
    

    $db->query('DELETE FROM notes WHERE id=:id;',[
        'id'=>$_POST['id']
    ]);

    header('Location: /notes');

    