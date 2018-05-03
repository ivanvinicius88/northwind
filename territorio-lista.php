<?php 
include_once("cabecalho.php");
include_once("conexao.php");
include_once("library-operation.php");

    $conexao = new BancoDeDados ("localhost","root","","northwind");
    $OperationDto = new OperationDto($conexao);


?>

	<div class="container">
		<table class="table table-striped table-bordered ">
			<tr>
				<td>ID Territorio</td>
				<td>Descrição</td>
				<td>ID Região</td>
				<td>Acões</td>
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
							<a class="btn btn-primary" href="produto-update-form.php">Update</a>
							<a class="btn btn-danger" href="produto-delete.php">Delete</a>

						</td>
					</tr>
			<?php
				endforeach
			?>
		</table>
    </div>