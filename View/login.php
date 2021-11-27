<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
   <form action="../Controller/loginController.php" method="post">
   <h1>Sistema de login</h1>
   <p>Usuario <input type="text" placeholder="ingrese su usuario" name="user"></p>
   <p>Contraseña <input type="password" placeholder="ingrese su contrasenia" name="pass"></p>
   <input type="submit" name ="Ingresar" value="Ingresar">
   
   </form> 
</body>
</html>