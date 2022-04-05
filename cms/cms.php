<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cms.css">
    <title>CMS</title>
</head>
<body>
   <header>

    <div class="header">
       <h1>C M S</h1>
       <h2> Gerenciamento de Conteudo do Site</h2>
    </div>
      
        <div class="img">
            <img src="fotos/Rectangle.png" alt="">
       </div>
      
   </header>

   <main>

    <section class="produto"> 
       <div class = "produtos">
           <h3>Adm. de Produtos</h3>
           <img src="fotos/Group 9.png" alt="">
        </div>

        <div class="categorias">
            <h3>Adm. de Categorias</h3>
            <img src="fotos/Group 9.png" alt="">
        </div>

        <div class="categorias">
          <a href=""><h3>Contatos</h3>
            <img src="fotos/ligar 1.png" alt="">
        </a>  
        </div>

        <div class="categorias">
            <h3>Usuário</h3>
            <img src="fotos/silhueta-de-multiplos-usuarios 1.png" alt="">
        </div>
       
        <div class="imagem">
            <h3>Bem vindo (a), </h3>
            <img src="fotos/logout 2.png" alt="">
        </div>
    </section>

    <section class="titulo">
        <div class="titulos">
            <h1>TITULO DA SESSÃO</h1>
        </div>
    </section>   
  
  <?php 

        require_once('controller/controllerContatos.php');

        $listContato = listarContato();

        //estrutura de repetição para retornar os dados do array e printar na tela
        foreach($listContato as $item){
            ?>
         <tr id="tblLinhas">
                    <td class="tblColunas registros"><?= $item['nome'] ?></td>
                    <td class="tblColunas registros"><?= $item['email'] ?></td>
                    <td class="tblColunas registros"><?= $item['mensagem'] ?></td>
        </tr>

        
      <?php  
        }
        ?>
 
    
   </main>

   <footer>
    <div class="container">
        <div class="copyright">
          <p>@Copyright 2021</p>
          <p>Todos os direitos reservados - Politica de privacidade</p>
        </div>
        <div class="info">
          <p>Desenvolvido por Nathalia Ramos</p>
          <p>versão 1.0.0</p>
        </div>
      </div>
    </footer>
         
</body>
</html>