<?php
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");

	$conexao = new BancoDeDados ("localhost","root","","northwind");
	$OperationDto = new OperationDto($conexao);

	$id = $_POST['IDTerritorio'];

	$OperationDto->remTer($id);
    ?>

    <script>
           alert("O Território Foi Deletado Com Sucesso");
           window.location.href = 'territorio-lista.php';
    </script>


<?php
	//header("Location: territorio-lista.php?removido=true");
	//die();

?>