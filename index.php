<?php

require "functions.php";
require "Database.php";
// require "routes.php";

$config = require "config.php";
$db = new Database($config['database']);

$posts = $db->query("SELECT * FROM posts")->fetchAll();

dd($posts);

