<?php

$config = require "config.php";

$heading = "My Notes";

$db = new Database($config['database']);
$notes = $db->query('SELECT * FROM notes')->fetchAll();

require "views/notes.view.php";