<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/usuario.css">
    <title>Login</title>
</head>
<body>
    <section class="formulario">
        <div class="contato"> 
            <h1>Cadastro de usuário</h1>
            <form class="form" method="POST" action="login.php">
                Nome: <input type="text" name="txtNome" size="50" maxlegth="30" >
                Login: <input type="text" name="txtLogin" size="50" maxlegth="30" >
                Senha: <input type="password" name="txtSenha" size="50" maxlegth="30">
            </form>
            
            <div class="btnLogin" id="login">
                <input type="submit" name="btnLogin" value="Login" >
            </div>
        </div>
    </section>


      <div id="consultaUsuario"> 
        <table id="tblConsulta">
          <tr>
            <td id="tblTitulo" colspan="6">
              <h1>Consulta de Usuários</h1>
            </td>
          </tr>

          <tr id="tblLinhas">
             <td class="tblColunas destaque"> Nome </td>
              <td class="tblColunas destaque">Login </td>
              <td class="tblColunas destaque">Senha </td>
          </tr>
  
      </div>

      <?php 

        require_once('controller/controllerUsuario.php');

      
        $listUsuario = listarUsuario();

         //estrutura de repetição para retornar os dados do array e printar na tela
         foreach($listUsuario as $item){
        

          ?>
       <tr id="tblLinhas">
                  <td class="tblColunas registros"><?= $item['nome'] ?></td>
                  <td class="tblColunas registros"><?= $item['login'] ?></td>
                  <td class="tblColunas registros"><?= $item['senha']?></td>
                  
      </tr>
      
      
      <?php  
        }
        ?>
</body>
</html>