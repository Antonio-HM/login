<?php
include_once 'Model/Model.php';

class control
{
    public $MODEL;

    public function __construct()
    {
        $this->MODEL = new model();
    }

    public function index()
    {
        include_once 'View/login.php';
    }

    public function validar()
    {
        $hola = new model();
        $hola->usuario = $_POST['user'];
        $hola->pass = $_POST['pass'];
        $valor = $this->MODEL->validarUser($hola);
        if($valor->conta !=0){
            $valor = $this->MODEL->validarpass($hola);
            if($valor->conta !=0){

            }else{
                $msj2= "Contraseña incorrecta!!!!!!";
            include_once 'View/login.php';
            }
        }else{
            $msj1= "Usuario no existe!!!!!!";
            include_once 'View/login.php';
        }
    }
}
