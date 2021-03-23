<?php

class DB
{

    public const TABLE_IMAGES = 'images';

    private static $config = [
        'host' => 'localhost',
        'user' => 'root',
        'password' => '',
        'database' => 'gallery',
                
    ];

    private static $instance;
    private $link;

    public function getAllData($tablename){
        return $this->link
        ->query( ' SELECT * FROM ' . $tablename)
        ->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($tablename, $id){
        return $this->link
        ->query( ' SELECT * FROM ' . $tablename . ' WHERE id = ' . (int)$id)
        ->fetch_assoc();
    }

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        $this-> link = mysqli_connect(
            self::$config['host'],
            self::$config['user'],
            self::$config['password'],
            self::$config['database']);

        if (false === $this->link) {
            die ("Can't connect to DB");
        }

    }


}