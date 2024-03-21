<?php

$config = require('config.php');
$db = new Database($config['database']);
$query = "select * from events";
$events = $db->query($query)->get();
$records="";
$return="";

/*
$events = [];
$records="";
$return="";
if(isset($_GET['description']) && !empty($_GET['description'])){
    $return="search?description=".htmlspecialchars($_GET['description']);
    $config = require('config.php');
    $db = new Database($config['database']);
    $query = "select * from events where description like :descriptipn";
    $filter = "%".htmlspecialchars($_GET['description'])."%";
    $events = $db->query($query, ['description' => $filter])->get();
    if (count($events) == 0) {
        $records = "You have found no matches, please try again";
    } else
    {
        $records = "You have found ". count($events) . " records from your search";
    }
}

if(isset($_GET['catalog']) && !empty($_GET['catalog'])){
    $return="search?catalog=".htmlspecialchars($_GET['catalog']);
    $config = require('config.php');
    $db = new Database($config['database']);
    $query = "select * from events where catalog like :catalog";
    $filter = "%".htmlspecialchars($_GET['catalog'])."%";
    $events = $db->query($query, ['catalog' => $filter])->get();
    if (count($events) == 0) {
        $records = "You have found no matches, please try again";
    } else
    {
        $records = "You have found ". count($events) . " records from your search";
    }
}
*/
require "views/events.view.php";
