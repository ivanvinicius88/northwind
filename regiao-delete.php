<?php
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");

	$conexao = new BancoDeDados ("localhost","root","","northwind");
	$OperationDto = new OperationDto($conexao);

	$id = $_POST['IDRegiao'];

	$OperationDto->remReg($id);


	header("Location: regiao-lista.php?removido=true");
	die();

?>