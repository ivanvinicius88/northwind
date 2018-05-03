<?php
include_once("conexao.php");
include_once("library-operation.php");

  $conexao = new BancoDeDados("localhost","root","","northwind");
  $OperationDto = new OperationDto($conexao);

	$id =$_POST['id'];
	$sobrenome =$_POST['sobrenome'];
	$nome =$_POST['nome'];
	$titulo =$_POST['titulo'];
    $titulocortesia = $_POST['titulocortesia'];
    $nascimento = $_POST['nascimento'];
    $admissao = $_POST['admissao'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $regiao = $_POST['regiao'];
    $cep = $_POST['cep'];
    $pais = $_POST['pais'];
    $telefone = $_POST['telefone'];
    $extensao = $_POST['extensao'];
    $notas = $_POST['notas'];

    $add = $OperationDto->UpdtFun($id, $sobrenome, $nome, $titulo, $titulocortesia, $nascimento, $admissao, $endereco, $cidade, $regiao, $cep, $pais, $telefone,$extensao,$notas);
     if($add) {
       ?>
      <script>
           alert("O Funcionário Foi Atualizado Com Sucesso!");
           window.location.href = 'index.php';
       </script>

       <?php
       } else {
       ?>
       <script>
           alert("Erro Ao Atualizar Funcionário, Tente Novamente!");
           window.location.href = 'funcionario-update-form.php';
       </script>

       <?php
       }
   ?>

