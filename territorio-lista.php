<?php 
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");

    $conexao = new BancoDeDados ("localhost", "root", "", "northwind");
    $OperationDto = new OperationDto($conexao);


?>

	<div class="container">
    <table class="table table-striped table-bordered">
        <tr>
            <td>ID Território</td>
            <td>Descrição</td>
            <td>ID Região</td>
            <td>Ações</td>
        </tr>
        <?php
            $territorios = $OperationDto->listaTer();
            foreach ($territorios as $territorio) :
        ?>

            <tr>
                <td><?=$territorio["IDTerritorio"]?></td>
                <td><?=$territorio["DescricaoTerritorio"]?></td>
                <td><?=$territorio["IDRegiao"]?></td>

                <td>
                  <form action = "#" method="post">
                      <input type="hidden" name="IDTerritorio"  value="<?=$territorio['IDTerritorio']?>"/>
                      <button class="btn btn-primary my-1 mx-1">Update</button>
                  </form>

                  <form action = "#" method="post">
                      <input type="hidden" name="IDTerritorio" value="<?=$territorio['IDTerritorio']?>"/>
                      <button class="btn btn-danger my-1 mx-1">Remover</button>
                  </form>
                </td>
              </tr>
        <?php
            endforeach
        ?>
    </table>
</div>	