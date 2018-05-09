<?php
	include_once("cabecalho.php");
	include_once("conexao.php");
	include_once("library-operation.php");

	$conexao = new BancoDeDados ("localhost", "root", "", "northwind");
	$OperationDto = new OperationDto($conexao);

	$idfuncionario = $_POST['idfuncionario'];
	$idterritorio = $_POST['idterritorio'];

	$add = $OperationDto->UpdtFunTer($idfuncionario,$idterritorio);
	if($add){
		?>

		<script>
			alert("A Região Foi Atualizada Com Sucesso!");
			window.location.href = "regiao-lista.php";
		</script>
		
		<?php
	}
	else{
		?>

		<script>
			alert("Erro Ao Atualizar A Região, Tente Novamente!");
			window.location.href = "regiao-lista.php";
		</script>
		
		<?php
	}
?>