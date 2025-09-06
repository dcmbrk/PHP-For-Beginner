<?php

$config = require "config.php";

$heading = "My Notes";

$db = new Database($config['database']);
$notes = $db->query('SELECT * FROM notes')->get();

require "views/note/index.view.php";