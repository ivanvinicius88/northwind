<?php
	include_once("cabecalho.php");
	include_once("conexao.php");
	include_once("library-operation.php");

	$conexao = new BancoDeDados ("localhost","root","","northwind");
	$OperationDto = new OperationDto($conexao);

	$id = $_POST['IDFuncionario'];
	$OperationDto->remFunTer($id);

    ?>

    <script>
           alert("A Região Foi Deletada Com Sucesso");
           window.location.href = 'regiao-lista.php';
    </script>