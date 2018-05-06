<?php

    include_once("conexao.php");
    include_once("library-operation.php");

    $conexao = new BancoDeDados("localhost", "root", "", "northwind");
    $OperationDto = new OperationDto($conexao);

    $idreg = $_GET['idreg'];
    $descreg = $_GET['descreg'];

  $add = $OperationDto->cadReg($idreg,$descreg);
  if($add) {
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