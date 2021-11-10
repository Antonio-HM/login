<?php
class model
{
    public $cnx;
    public $usuario;
    public $pass;
    public $nombre;
    public $apellido;

    public function __construct()
    {
        try {
            $this->cnx = config::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function validarUser($data)
    {
        try {
            $query = "Select count(*) conta from usuario where usuario = ?";
            $smt = $this->cnx->prepare($query);
            $smt->execute(array($data->usuario));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function validarpass($data)
    {
        try {
            $query = "Select count(*) conta from usuario where pass = ?";
            $smt = $this->cnx->prepare($query);
            $smt->execute(array($data->pass));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
