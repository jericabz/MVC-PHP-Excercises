<?php 
    // dd("Hello");
    use Core\App;
    use Core\Database;
    use Core\Validator;

    $db=App::resolve(Database::class);


    $currentUserId = 1;

        $id=$_POST['id'];

        $note = $db->query('select * from notes where id = :id',['id'=>$id])->findOrFail();

        authorize($note['user_id']==$currentUserId);

        if(! Validator::string($_POST['body'],1,250)){
            $errors['body']= "A body of no more than 250 characters is required";
            $note = $db->query('select * from notes where id = :id',['id'=>$id])->findOrFail();

            view('notes/edit.view.php',[
                    'heading'=>'Update Note',
                    'errors'=>$errors??'',
                    'note'=>$note
                ]    
            );
            exit();
        }

        if(empty($errors)){
            $db->query("UPDATE notes SET body=:body WHERE id = :id",[
                'id'=>$id,
                'body'=>$_POST['body']
            ]);
    
            header("Location: /note?id={$note['id'] }");
            exit();
    
        }
        
        