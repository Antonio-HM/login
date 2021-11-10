<?php
class config{

public static function Conectar(){

$c = new PDO("mysql:host=127.0.0.1:33065; dbname=login","root","");
$c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

return $c;
}    
}

