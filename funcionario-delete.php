<?php
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");

	$conexao = new BancoDeDados ("localhost","root","","northwind");
	$OperationDto = new OperationDto($conexao);

	$id = $_POST['IDFuncionario'];
	$OperationDto->remFun($id);

    ?>

    <script>
           alert("O Funcionário Foi Deletado Com Sucesso");
           window.location.href = 'funcionario-lista.php';
    </script>
