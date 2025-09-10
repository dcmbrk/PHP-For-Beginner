<?php

use Core\App;
use Core\Database;
use Core\validator;

$db = App::resolve(Database::class);

$currentUserId = 1;

$heading = 'Create Note';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if(! Validator::string($_POST['body'],1, 1000)){
      $errors['body'] = 'A body of no more than 1.000 character is required.';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

view("notes/create.view.php",[
    'heading' => 'Create Note',
    'errors' => $errors
]);