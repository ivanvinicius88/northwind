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
				<td>ID Região</td>
				<td>Descrição</td>
				<td>Acões</td>
				</tr>
			<?php
				$regioes = $OperationDto->listaReg();
				foreach ($regioes as $regiao) :
			?>

					<tr>
						<td><?=$regiao["IDRegiao"]?></td>
						<td><?=$regiao["DescricaoRegiao"]?></td>


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