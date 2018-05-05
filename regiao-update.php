<?php

	include_once("cabecalho.php");
	include_once("conexao.php");
	include_once("library-operation.php");

	$conexao = new BancoDeDados ("localhost", "root", "", "northwind");
	$OperationDto = new OperationDto($conexao);


	$id = $_POST['id'];
	$nome = $_POST['descricaoregiao'];

	$add = $OperationDto->UpdtReg($id,$nome);
	if($add){
		?>
		<script>
			alert("A Região Foi Atualizada Com Sucesso!");
			window.location.href = "index.php";
		</script>
		
		<?php
	}
	else{
		?>
		<script>
			alert("Erro Ao Atualizar A Região, Tente Novamente!");
			window.location.href = "regiao-update-form.php";
		</script>
		
		<?php
	}

?>