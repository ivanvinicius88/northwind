<?php

include_once("conexao.php");
include_once("library-operation.php");

    $conexao = new BancoDeDados("localhost", "root", "", "northwind");
    $OperationDto = new OperationDto($conexao);

?>

<?php

$idreg = $_GET['idreg'];
$descreg = $_GET['descreg'];

  $adicionar = $OperationDto->cadReg($idreg,$descreg);

  if($adicionar) {
    ?>
   <script>
        alert("A Região Foi Cadastrada com Sucesso!");
        window.location.href = 'regiao-lista.php';
    </script>

    <?php
    } else {
    ?>
    <script>
        alert("A Região Não Foi cadastrada!");
        window.location.href = 'regiao-form.php';
    </script>

    <?php
    }

?>