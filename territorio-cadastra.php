<?php
include_once("conexao.php");
include_once("library-operation.php");

$conexao = new BancoDeDados("localhost","root","","northwind");
$OperationDto = new OperationDto($conexao);


	$id =$_POST['id'];
    $desc = $_POST['nome'];
    $reg =$_POST['regiao'];
	
    $add = $OperationDto->cadTer($id, $desc, $reg);
     if($add) {
       ?>
      <script>
           alert("O Território Foi Cadastrado Com Sucesso!");
           window.location.href = 'territorio-lista.php';
       </script>

       <?php
       } else {
       ?>
       <script>
           alert("Erro Ao Cadastrar o Território, Tente Novamente!");
           window.location.href = 'territorio-form.php';
       </script>

       <?php
       }
   ?>


