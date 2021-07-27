<?php require_once ("core/conn.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Controle - Usuários</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conteudo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
 <section>
    <div class="container">
    <br><br>
    <div class="card" style="padding:10px">
        <h1 style="color:black">Lista de Equipamento</h1>
	<table class="table table-striped" width="100%">
    <thead>
        <tr>
          <th scope="col" width="101">Equipamento</th>
          <th scope="col" width="101">Capacidade</th>
          <th scope="col" width="200">Proprietário</th>
          <th scope="col" width="200">Placa</th>
          <th scope="col" width="101">Prefixo</th>
          <th scope="col" width="200">Operador</th>
          <th scope="col" width="101">Renumeração</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $listar = ' SELECT * FROM tb_equipamento ';
            foreach($conn->query($listar) as $key => $campo){
        ?>
        <tr>
            <th><?=  $campo['equipamento'] ?></th>
            <th><?=  $campo['capacidade'] ?></th>
            <th><?=  $campo['proprietario'] ?></th>
            <th><?=  $campo['placa'] ?></th>
            <th><?=  $campo['prefixo'] ?></th>
            <th><?=  $campo['operador'] ?></th>
            <th><?=  $campo['pagar'] ?></th>
        </tr>
      <?php
        }
      ?>
      </div>
      <a href="inicio.php" class="btn btn-danger"  style="width:100px; font-weight: 700;">Voltar</a>
    </div>
 </section>
  </body>
</html>