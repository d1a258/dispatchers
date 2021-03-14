<?php

namespace MVC\controllers;
use MVC\core\controller;

class homecontroller extends controller{
    public function index(){
        $title = "index1";
        $data = $this->db()->run("select * FROM users")->fetchAll();
        echo "<pre>";
        var_dump($data);die;
        $this->view("home/index",['title'=>$title,'data'=>$data]);
    }
    public function login(){
        $this->view("home/login",['title'=>'login']);
    }


}