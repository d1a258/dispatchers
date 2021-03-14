<?php
namespace MVC\core;
class app{
    private $controller;
    private $method;
    private $params;

    public function __construct(){
        $this->url();
        $this->render();
    }

    private function url(){
        if(!empty($_SERVER['QUERY_STRING'])){
            $url = explode("/",$_SERVER['QUERY_STRING']);
            $this->controller = isset($url[0]) ? $url[0]."controller" : "homecontroller" ;
            $this->method = isset($url[1]) ? $url[1] : "index";
            $this->params =array_values($url);
            // print_r($this->params);
            unset($url[0],$url[1]);
            // print_r($url);
            // print_r($this->method);
            // echo $this->controller;
        }
            // echo $_SERVER['QUERY_STRING'];
            // $url = explode("/",$_SERVER['QUERY_STRING']);
            // echo "<br>";
            // print_r($url);
    }


    private function render(){
        $controller = "MVC\controllers\\".$this->controller;
         if(class_exists($controller)) {
            $controller = new $controller;
            if (method_exists($controller,$this->method)) {
                call_user_func_array([$controller,$this->method],$this->params);
            }else{
                echo "error method not found";
            }
         }else{
            echo 'error controller not found';
         }
    }
}

    