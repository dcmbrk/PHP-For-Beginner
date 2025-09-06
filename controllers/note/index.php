<?php

$config = require base_path("config.php");

$heading = "My Notes";

$db = new Database($config['database']);
$notes = $db->query('SELECT * FROM notes')->get();

view("note/index.view.php",[
  'heading' => 'My Notes',
  'notes' => $notes
]);