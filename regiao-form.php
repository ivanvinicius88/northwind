<?php 
		include_once("cabecalho.php");
		include_once("conexao.php");
		include_once("library-operation.php");

    $conexao = new BancoDeDados("localhost","root","","northwind");
    $OperationDto = new OperationDto($conexao);

?>

	<div class="container">

		<h1 class="my-4 ">Cadastrar Região</h1>
		<form method="get" action="regiao-cadastra.php">
		  <div class="form-row">
				<div class="form-group my-4 mx-3 col-md-1">
					<label for="inputEmail4">ID</label>
					<input name="idreg" type="text" class="form-control" id="inputEmail4" placeholder="ID">
				</div>
				<div class="form-group my-4 mx-3 col-md-4">
					<label for="inputPassword4">Nome</label>
					<input name="descreg" type="text" class="form-control" id="inputPassword4" placeholder="South">
				</div>
		  </div>
			<div class="form-row">
		    <button type="submit" class="my-4 mx-3 btn btn-primary">Cadastrar</button>
		    <button type="reset" class="my-4 mx-0 btn btn-danger">Limpar</button>
			</div>
		</form>

	</div>




