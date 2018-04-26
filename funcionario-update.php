<?php
include_once("conexao.php");
include_once("library-operation.php");

  $conexao = new BancoDeDados("localhost","root","","northwind");
  $OperationDto = new OperationDto($conexao);
?>

<?php
  $id = $_GET['idfuncionario'];
  $sobrenome = $_GET['sobrenome'];
  $nome= $_GET['nome'];
  $titulo = $_GET['titulo'];

  $up = $OperationDto->UpdtFun($id, $sobrenome, $nome, $titulo);
  if($up){
    ?>
   <script>
        alert("O funcionário foi atualizado com Sucesso!");
        window.location.href = 'index.php';
    </script>

    <?php
    } else {
    ?>
    <script>
        alert("O funcionário não foi atualizado com sucesso!");
        window.location.href = 'funcionario-update-form.php';
    </script>

    <?php
    }

?>
