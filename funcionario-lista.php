<?php
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");

    $conexao = new BancoDeDados ("localhost","root","","northwind");
    $OperationDto = new OperationDto($conexao);


?>


    <table class="table table-striped table-bordered">
        <tr>
            <td>IDFuncionário</td>
            <td>Sobrenome</td>
            <td>Nome</td>
            <td>Título</td>
            <td>Acões</td>
            </tr>
        <?php
            $funcionarios = $OperationDto->listaFun();
            foreach ($funcionarios as $funcionario) :
        ?>

                <tr>
                    <td><?=$funcionario["IDFuncionario"]?></td>
                    <td><?=$funcionario["Sobrenome"]?></td>
                    <td><?=$funcionario["Nome"]?></td>
                    <td><?=$funcionario["Titulo"]?></td>

                    <td>
                        <a class="btn btn-danger" href="funcionario-update-form.php">Update</a>
                        <a class="btn btn-danger" href="funcionario-delete-form.php">Delete</a>

                    </td>
                </tr>
        <?php
            endforeach
        ?>
    </table>
