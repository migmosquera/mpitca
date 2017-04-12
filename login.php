<!DOCTYPE html>
<?php
include_once 'controller/login.php';       
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="static/css/login.css" type="text/css" media="all" />
    </head>
    <body>
        <div class="login">
            <h1>Login</h1>
        <form method="post" name="loginUser" id="loginUser" accept-charset="utf-8">
            <input type="text" name="username" id="username" placeholder="Usuario" required="required" />
            <input type="password" name="password" id="password" placeholder="Contraseña" required="required" />
            <p class="msj_error"><?php echo $msjErrorLogin ?></p>
            <button id="btnLogin" name="btnLogin" type="submit" class="btn btn-primary btn-block btn-large">Ingresa</button>
        </form>
    </div>
    </body>
</html>
