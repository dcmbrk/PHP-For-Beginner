<?php

$config = require "config.php";
$db = new Database($config['database']);

$currentUserId = 1;

$note = $db->query('SELECT * FROM notes WHERE id = :id', [
  ':id' => $_GET['id']
])->findOrFail();

authorize(($currentUserId === $note['user_id']));

require "views/note/show.view.php";