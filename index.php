<?php
require 'flight/Flight.php';

Flight::register('db', 'PDO', array('mysql:host=127.0.0.1;dbname=flight_test', 'root', 'root'));

Flight::route('POST /', function(){
    $db = Flight::db();
    $stmt = $db->prepare("insert into bbs(content, mail, name) values('{$_POST['content']}', '{$_POST['mail']}', '{$_POST['name']}')");
    $stmt->execute();

    Flight::redirect('./');
});

Flight::route('/', function(){
    $db = Flight::db();
    $stmt = $db->prepare('select * from bbs order by created DESC limit 20');
    $stmt->execute();
    $a = $stmt->fetchAll(PDO::FETCH_ASSOC);

    Flight::render('top.php', array('hoge' => $a));
});

Flight::start();

