<?php
    use Core\App;
    use Core\Database;
    use core\Validator; 

    $db = App::resolve(Database::class);

    $currentUserId = 1;

   

        $note = $db->query('select * from notes where id = :id',[
            'id'=>$_POST['id']
            ])->findOrFail();

        //authorize
        authorize($note['user_id']==$currentUserId);
        
        //validate
        $errors = [];

        if(! Validator::string($_POST['body'],1,250)){
            $errors['body']= "A body of no more than 250 characters is required";
        }

        //if no errors
        if(count($errors)){
            return view('notes/edit.view.php',[
                'heading'=>'My Note',
                'errors'=>$errors,
                'note'=>$note
            ]    
        );
        }

        $db->query('update notes  set body = :body where id = :id',[
            'id'=>$_POST['id'],
            'body'=>$_POST['body'],
        ]);

        //redirect user
        header('Location: /notes');
        die();

        
    