<?php
require_once("conexao.php"); 
@session_start();
$usuario = $_SESSION['nome_usuario'];
if ($usuario == ''){
	header('Location: login.php');
}
//echo $usuario;
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="painel.php">PDO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="painel.php">Fornecedores <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produtos.php">Produtos</a>
      </li>
     
       <li class="nav-item">
        <a class="nav-link" href="logout.php">Sair</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="txtbuscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="buscar">Buscar</button>
    </form>
  </div>
</nav>

<div class="container">
	<div class="col-md-12">
		<button class="btn btn-info mt-4 mb-2" data-toggle="modal" data-target="#modal">Novo Produto</button>
	</div>
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">Nome</th>
	      <th scope="col">Descrição</th>
	      <th scope="col">Data Cadastro</th>
	      
	      <th scope="col">Ações</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php

	  		if(isset($_GET['buscar']) and $_GET['txtbuscar'] != ''){

	  			$nome_buscar = $_GET['txtbuscar'] . '%';

	  			
	  			$res = $conexao->query("SELECT * from produtos where nome LIKE '$nome_buscar' or descricao LIKE '$nome_buscar' order by nome asc");

	  		}else{
	  			$res = $conexao->query("SELECT * from produtos order by nome asc");
	  		} 

	  		


			$dados = $res->fetchAll(PDO::FETCH_ASSOC);
			$quantidade_produtos = count($dados);
			for ($i=0; $i < count($dados); $i++) { 
				foreach ($dados[$i] as $key => $value) {
				$id = $dados[$i]['id'];
				$nome = $dados[$i]['nome'];
				$descricao = $dados[$i]['descricao'];
				$data = $dados[$i]['data'];
				$data2 = implode('/', array_reverse(explode('-', $data)));
				}
				?>

			
	    <tr>
	      <td><?php echo $nome; ?></td>
	      <td><?php echo $descricao; ?></td>
	      <td><?php echo $data2; ?></td>
	      <td>
	      	<a href="produtos.php?acao=editar&id=<?php echo $id; ?>" class="text-info mr-1"><i class="far fa-edit"></i></a>
	      	<a href="produtos.php?acao=excluir&id=<?php echo $id; ?>" class="text-danger"><i class="far fa-trash-alt"></i></a>
	      </td>
	      
	    </tr>

	    <?php 	 }	  ?>
	   
	  </tbody>
	</table>

	<div class="col-md-12">
		
		<p class="text-muted" align="right"><?php echo $quantidade_produtos; ?> Produtos</p>
		
	</div>

</div>



</body>
</html>



<div class="modal fade" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Inserir Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       		<form method="post"> 
       		  <div class="form-group">
			    <label for="exampleFormControlInput1">Nome</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Nome">
			  </div>
			   <div class="form-group">
			    <label for="exampleFormControlInput1">Descrição</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" name="descricao" placeholder="Descrição">
			  </div>
			 
			 
			  
			
      </div>
     
	      <div class="modal-footer">
	        <button type="submit" name="salvar" class="btn btn-primary">Salvar</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

	      </div>
      </form>
    </div>
  </div>
</div>
 





<!--CADASTRO DOS PRODUTOS -->
<?php 
if(isset($_POST['salvar'])){

	


	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	
	

		//VERIFICAR SE O PRODUTO JÁ ESTÁ CADASTRADO
		$res = $conexao->query("SELECT * from produtos where nome = '$nome'");
		$dados = $res->fetchAll(PDO::FETCH_ASSOC);
		$linhas = count($dados);

		if($linhas == 0){
			
			$res = $conexao->prepare("insert into produtos (nome, descricao, data) values (:nome, :descricao, curDate())");

			$res->bindValue(":nome", $nome);
			$res->bindValue(":descricao", $descricao);
			
			
			$res->execute();

			echo "<script language='javascript'>window.alert('Produto Cadastrado!'); </script>";

			echo "<script language='javascript'>window.location='produtos.php'; </script>";
		}else{
			echo "<script language='javascript'>window.alert('Este produto já está cadastrado!'); </script>";
		}

		
		
	

	
}


?>




<!--EDIÇÃO DOS PRODUTOS -->
<?php 
if(@$_GET['acao'] == 'editar'){
	$id = $_GET['id'];
	$id_editar = $_GET['id'];

$res = $conexao->query("SELECT * from produtos where id = '$id'");
	  		
$dados = $res->fetch(PDO::FETCH_ASSOC);
			
foreach ($dados as $key => $value) {
				
	$nome = $dados['nome'];
	$descricao = $dados['descricao'];

	$nome_rec = $dados['nome'];
				
}

?>


<div class="modal" id="modalEditar" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Editar Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       		<form method="post"> 
       		  <div class="form-group">
			    <label for="exampleFormControlInput1">Nome</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
			  </div>
			   <div class="form-group">
			    <label for="exampleFormControlInput1">Descrição</label>
			    <input type="text" class="form-control" id="exampleFormControlInput1" name="descricao" placeholder="Descrição" value="<?php echo $descricao; ?>">
			  </div>
			 
			 
			  
			
      </div>
     
	      <div class="modal-footer">
	        <button type="submit" name="editar" class="btn btn-primary">Editar</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

	      </div>
      </form>
    </div>
  </div>
</div>


<?php 
if(isset($_POST['editar'])){

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	
		
		//VERIFICAR SE O NOME DO PRODUTO FOI MUDADO
		if($nome_rec != $nome){

			//VERIFICAR SE O PRODUTO JÁ ESTÁ CADASTRADO
			$res = $conexao->query("SELECT * from produtos where nome = '$nome'");
			$dados = $res->fetchAll(PDO::FETCH_ASSOC);
			$linhas = count($dados);

			if($linhas != 0){
				echo "<script language='javascript'>window.alert('Este produto já está cadastrado!'); </script>";
				exit();
			}

		}


			
			$res = $conexao->prepare("update produtos set nome = :nome, descricao = :descricao where id = '$id_editar'");

			$res->bindValue(":nome", $nome);
			$res->bindValue(":descricao", $descricao);
			
			
			$res->execute();

			echo "<script language='javascript'>window.alert('Produto Editado!'); </script>";

			echo "<script language='javascript'>window.location='produtos.php'; </script>";
		

			
}


?>


<?php } ?>




<!--EXCLUSÃO DOS PRODUTOS -->
<?php 
if(@$_GET['acao'] == 'excluir'){
	$id = $_GET['id'];

	$conexao->query("delete from produtos where id = '$id'");

	echo "<script language='javascript'>window.alert('Produto Excluido!'); </script>";

	echo "<script language='javascript'>window.location='produtos.php'; </script>";
		

}
?>


<script> $("#modalEditar").modal("show");</script>