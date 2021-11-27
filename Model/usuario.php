<?php
require("../Model/Conexion.php");
class Usuario
{
    private $con;

    function __construct()
    {
        $this->con = new Conexion();
    }

    public function ingresar($usuario, $contrasenia)
    {
        
        $query = $this->con->getCon()->query("SELECT*FROM clientes where usuario='$usuario' and clave='$contrasenia'");

        if ($query->num_rows > 0) {
            header("location:../View/home.php");
        } else {
            header("Location:../index.php");
        }
    }
}
