<?php
require 'flight/Flight.php';

class bbs
{

    public static function index()
    {
        $db   = Flight::db();
        $stmt = $db->prepare('select * from bbs order by created DESC limit 20');
        $stmt->execute();
        $a    = $stmt->fetchAll(PDO::FETCH_ASSOC);

        Flight::render('header');
        Flight::render('top', array('hoge' => $a));
        Flight::render('footer');
    }


    public static function post()
    {
        $db   = Flight::db();
        $stmt = $db->prepare("insert into bbs(content, mail, name) values('{$_POST['content']}', '{$_POST['mail']}', '{$_POST['name']}')");
        $stmt->execute();

        Flight::redirect('./');
    }

    public static function admin()
    {
        $db   = Flight::db();
        $stmt = $db->prepare('select * from bbs order by created desc');
        $stmt->execute();
        $a    = $stmt->fetchAll(PDO::FETCH_ASSOC);

        Flight::render('header');
        Flight::render('admin', array('content' => $a));
        Flight::render('footer');
    }

    public static function edit($id)
    {
        $db   = Flight::db();
        $stmt = $db->prepare('select * from bbs where id = '.$id);
        $stmt->execute();
        $a    = $stmt->fetchAll(PDO::FETCH_ASSOC);

        Flight::render('header');
        Flight::render('edit', array('content' => $a));
        Flight::render('footer');
    }

    public static function delete($id)
    {
        $db = Flight::db();
        $stmt = $db->prepare('delete from bbs where id = '.$id);
        $stmt->execute();
        $a = $stmt->fetchAll(PDO::FETCH_ASSOC);

        Flight::redirect('./admin');
    }

}

Flight::register('db', 'PDO', array('mysql:host=127.0.0.1;dbname=flight_test', 'root', 'root'));
Flight::route('POST /admin/del/@id:[0-9]+', array('bbs', 'delete'));
Flight::route('POST /admin/edit/@id:[0-9]+', array('bbs', 'edit'));
Flight::route('POST /', array('bbs', 'post'));
Flight::route('/admin', array('bbs', 'admin'));
Flight::route('/', array('bbs', 'index'));


Flight::start();

