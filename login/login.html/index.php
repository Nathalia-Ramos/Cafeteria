<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login/login.html/login.css">
    <title>Login</title>
</head>
<body>
    <section class="formulario">
        <div class="contato"> 
            <h1>Autenticação para o CMS</h1>
            <form class="form" method="POST" action="index.php">
                Login: <input type="text" name="txtLogin" size="50" maxlegth="30" >
                Senha: <input type="text" name="txtSenha" size="50" maxlegth="30">
            </form>
            
            <div class="btnLogin">
                <input type="submit" name="btnLogin" value="Login">
            </div>
        </div>
    </section>
</body>
</html>