<?php
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");

    $conexao = new BancoDeDados ("localhost","root","","northwind");
    $OperationDto = new OperationDto($conexao);


?>
	<div class="container">
		<table class="table table-striped table-bordered">
			<tr>
				<td>IDFuncionário</td>
				<td>IDTerritorio</td>
			  </tr>

			  <?php
				  $funcionarios = $OperationDto->listaFunTer();
				  foreach ($funcionarios as $funcionario) :
			  ?>

				  <tr>
					  <td><?=$funcionario["IDFuncionario"]?></td>
					  <td><?=$funcionario["IDTerritorio"]?></td>
				</tr>
				
				  <?php
					endforeach
				  ?>
		</table>
	</div>
