<?php
include_once("conexao.php");
include_once("library-operation.php");

$conexao = new BancoDeDados("localhost","root","","northwind");
$OperationDto = new OperationDto($conexao);

	$idfuncionario =$_POST['idfuncionario'];
	$idterritorio =$_POST['idterritorio'];


    $add = $OperationDto->inserirFunTer($idfuncionario, $idterritorio);
     if($add) {
       ?>

      <script>
           alert("O Funcionário Território Foi Cadastrado Com Sucesso!");
           window.location.href = 'funcionario-territorio-lista.php';
       </script>

       <?php
       } else {
       ?>

       <script>
           alert("Erro Ao Cadastrar Funcionário Território, Tente Novamente!");
           window.location.href = 'funcionario-territorio-form.php';
       </script>

       <?php
       }
   ?>