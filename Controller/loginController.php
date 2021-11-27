<?php
require("../Model/usuario.php");

$usu = new Usuario();

if (isset($_POST["Ingresar"])) {
    $usu->ingresar(
        $_POST['user'],
        $_POST['pass']
    );
    
}