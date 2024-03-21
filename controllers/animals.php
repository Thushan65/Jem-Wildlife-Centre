<?php

$config = require('config.php');
$db = new Database($config['database']);
$animals = $db->query('select * from animals')->get();

require "views/animals.view.php";
