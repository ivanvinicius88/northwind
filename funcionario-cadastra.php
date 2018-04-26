<?php
include_once("conexao.php");
include_once("library-operation.php");

$conexao = new BancoDeDados("localhost","root","","northwind");
$OperationDto = new OperationDto($conexao);


$id = $_GET['idfuncionario'];
$sobrenome = $_GET['sobrenome'];
$nome = $_GET['nome'];
$titulo = $_GET['titulo'];

$add = $OperationDto->cadFun($id, $sobrenome, $nome, $titulo);
if($add){
  ?>
  <script>
       alert("A Funcionário foi cadastrada com Sucesso!");
       window.location.href = 'index.php';
   </script>

<?php
}else{
  ?>
  <script>
      alert("O Funcionário não foi cadastrado!");
      window.location.href = 'funcionario-form.php';
  </script>

<?php
}

?>





















?>
