<?php

require_once ('/home/pluggi/getConnectionObject.php');

$bdd = Database::getDb();

class Database {

    private static $_db;

    const DB_LOGIN = 'root';
    const DB_PASSWORD = '';

    public static function getDb() {
        return getConnectionObject();
    }
} 