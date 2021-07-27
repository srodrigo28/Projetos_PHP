<?php require_once ("core/conn.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Sistema Controle</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/tabela.css"/>
    <link rel="stylesheet" href="css/conteudo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>Beta :: V1</header>
  <?php require_once ("menu.php"); ?>
</div>
 <section>
   <div class="container">
   <h1>Cadastro de Obras</h1>
   <?php
       
      

    ?>
    <form action="index.php">    
        <table class="table table-striped" width="100%">
    <thead>
        <tr>
        <th scope="col" width="101">Código</th>
        <th scope="col" width="300">Obra</th>
        <th scope="col" width="100">CNPJ</th>
        <th scope="col" width="200">Endereço</th>
        <th scope="col" width="200">Cidade</th>
        <th scope="col" width="300">Responsável</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@mdo</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        <td>@mdo</td>
        <td>@mdo</td>
        </tr>
    </tbody>
    </table>

        <button class="btn btn-danger"  style="width:100px; font-weight: 700;">Voltar</button>
        
    </form>
    </div>
 </section>
  </body>
</html>