<?php 
    use Core\App;
    use Core\Database;
    use Core\Validator;
    $db=App::resolve(Database::class);

    
        $errors=[];    

        if(! Validator::string($_POST['body'],1,250)){
            $errors['body']= "A body of no more than 250 characters is required";
        }

        // dd($errors);
        if(empty($errors)){
            $db->query("INSERT INTO notes (body,user_id)
            VALUES ( :body,:user_id )",['body'=>$_POST['body'],'user_id'=>1]);
            header('Location: /notes');
            exit();
        }
    

    view('notes/create.view.php',[
            'heading'=>'My Note',
            'errors'=>$errors??''
        ]    
    );