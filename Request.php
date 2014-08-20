<?php

class Request {
    
    public static function get() {
        return $_GET;
    }
    
    public static function post() {
        return $_POST;
    }
    
    public static function isGet() {
        return $_SERVER['REQUEST_METHOD'] === 'GET' ? true : false; 
    }
    
    public static function isPost() {
        return $_SERVER['REQUEST_METHOD'] === 'POST' ? true : false;
    }
    
}