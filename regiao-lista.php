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
						<div class="form-row">
							<form class="mx-1 my-1" action = "regiao-update-form.php" method="post">
								<input type="hidden" name="IDRegiao"  value="<?=$regiao['IDRegiao']?>"/>
								<button class="btn btn-primary">Atualizar</button>
							</form>
							<form class="mx-1 my-1" action = "regiao-delete-confirma.php" method="post">
								<input type="hidden" name="IDRegiao" value="<?=$regiao['IDRegiao']?>"/>
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