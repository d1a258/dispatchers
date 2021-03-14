<?php

namespace MVC\core;
use Dcblogdev\PdoWrapper\Database;

class controller{
    public function view($path,$param){
        extract($param);
        require_once (VIEWS.$path.".php");
        // echo $path;die;
        // echo VIEWS.$path.".php";
         
    }
    public function db(){
        // make a connection to mysql here
        $options = [
            //required
            'username' => 'root',
            'database' => 'dispatchers',
            //optional
            'password' => '',
            'type' => 'mysql',
            'charset' => 'utf8',
            'host' => 'localhost',
            'port' => '3306'
        ];

        return $db = new Database($options);
    }
}

