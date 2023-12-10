<?php

class DBConnect {
    // статические свойства
    private static $dbName = '395_project';
    private static $dbHost = 'localhost';
    private static $dbLogin = 'root';
    private static $dbPassword = '';

    private static function getDSN(){
        return 'mysql:dbname='.self::$dbName.';host='.self::$dbHost;
    }

    // метод для получения объекта соединения с БД
    public static function getConnection(){
        return new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        ]);
    }

    // метод для отображения массивов на странице
    public static function d($value){
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }
}