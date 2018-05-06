<?php

	include_once("cabecalho.php");
	include_once("conexao.php");
	include_once("library-operation.php");

	$conexao = new BancoDeDados ("localhost", "root", "", "northwind");
	$OperationDto = new OperationDto($conexao);

	$id = $_POST['id'];
	$desc = $_POST['desc'];
    $reg = $_POST['reg'];

	$add = $OperationDto->UpdtTer($id, $desc, $reg);
	if($add){
		?>

		<script>
			alert("O Território Foi Atualizado Com Sucesso!");
			window.location.href = "territorio-lista.php";
		</script>
		
		<?php
	}
	else{
		?>
		
		<script>
			alert("Erro Ao Atualizar o Território, Tente Novamente!");
			window.location.href = "territorio-lista.php";
		</script>
		
		<?php
	}

?>