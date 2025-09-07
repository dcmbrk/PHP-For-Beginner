<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config['database']);

$currentUserId = 25;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
  
  $note = $db->query('SELECT * FROM notes WHERE id = :id', [
  ':id' => $_GET['id']
  ])->findOrFail();

  authorize(($currentUserId === $note['user_id']));

  $db->query('DELETE FROM notes WHERE id = :id', [
    ':id' => $_POST['id']
  ]);

  header('location: /notes');
  exit();

}else{
  
  $note = $db->query('SELECT * FROM notes WHERE id = :id', [
  ':id' => $_GET['id']
  ])->findOrFail();

  authorize(($currentUserId === $note['user_id']));

  view("note/show.view.php",[
    'heading' => 'Note',
    'note' => $note
  ]);
}