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
        alert("A região foi cadastrada com Sucesso!");
        window.location.href = 'index.php';
    </script>

    <?php
    } else {
    ?>
    <script>
        alert("Produto não cadastrado!");
        window.location.href = 'regioa-form.php';
    </script>

    <?php
    }

?>