<?php require_once ("core/conn.php"); ?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Sistema Controle</title>
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
        <h1 style="color:black">Lista de Obras</h1>
	<table class="table table-striped" width="100%">
    <thead>
        <tr>
          <th scope="col" width="101">Obra</th>
          <th scope="col" width="200">CNPJ</th>
          <th scope="col" width="200">Responsável</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $listar = ' SELECT * FROM tb_obra ';
            foreach($conn->query($listar) as $key => $campo){
        ?>
        <tr>
            <th scope="col" ><?=  $campo['obra'] ?></th>
            <th scope="col" ><?=  $campo['cnpj'] ?></th>
            <th scope="col" ><?=  $campo['resp'] ?></th>
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