<?php
class Conexion extends PDO
{
    private $hostBd = 'bcbiiyeysyi3y0q5la92-mysql.services.clever-cloud.com';
    private $nombreBd = 'bcbiiyeysyi3y0q5la92';
    private $usuarioBd = 'uqimoqlaj2zigaxf';
    private $passwordBd = 'vief8qOAz9ETzKkwUzFW';
    
    public function __construct()
    {
        try{
            parent::__construct('mysql:host=' . $this->hostBd . ';dbname=' . $this->nombreBd . ';charset=utf8', $this->usuarioBd, $this->passwordBd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            
            } catch(PDOException $e){
            echo 'Error: ' . $e->getMessage();
            exit;
        }
    }
}

?>