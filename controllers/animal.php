<?php
$config = require('config.php');
$db = new Database($config['database']);
$animal = $db->query('select * from animals where ID = :id', ['id' => $_GET['id']])->findOrFail();
$heading = "Info about" . $animal['name'] . " with ID: " . 
htmlspecialchars($_GET['id']);
$returnURL = $_GET['return'];
require "views/animal.view.php";
