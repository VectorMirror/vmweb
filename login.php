<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>
<body>
    <form method="post" action="identificar.php">
        <h2>Inicio de sesion</h2>
        <label for="email">Correo Electronico</label>
        <input type="text" placeholder="Correo electronico"/>
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña"/>
        <input type="submit" value="LOG IN" />
        <a href="recuperar.php">No mames olvide mi contraseña :(</a>
    </form>
</body>
</html>