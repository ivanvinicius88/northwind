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
				<td>Ações</td>
			  </tr>
			  <?php
				  $funcionarios = $OperationDto->listaFunTer();
				  foreach ($funcionarios as $funcionario) :
			  ?>

				  <tr>
					  <td><?=$funcionario["IDFuncionario"]?></td>
					  <td><?=$funcionario["IDTerritorio"]?></td>
					  <td>

						  <div class="form-row">
							<form class="mx-1" action = "funcionario-update-form.php" method="post">
								<input type="hidden" name="IDFuncionario"  value="<?=$funcionario['IDFuncionario']?>"/>
								<button class="btn btn-primary">Update</button>
							</form>

							<form class="mx-1" action = "funcionario-delete-confirma.php" method="post">
								<input type="hidden" name="IDFuncionario" value="<?=$funcionario['IDFuncionario']?>"/>
								<button class="btn btn-danger">Remover</button>
							</form>
						  </div>
					  </td>
				</tr>
				  <?php
					endforeach
				  ?>
		</table>
	</div>
