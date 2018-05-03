<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   	<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script src="vendor/twbs/bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="vendor/twbs/bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
     <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })
	  </script>

    <title>northWind</title>
  </head>

  <body>


  <!--Navbar on top  -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark  ">


			<a href="index.php" class="navbar-brand bg-danger mb-0"><h4>&nbsp;North Wind&nbsp;</h4></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsite">
				<span class="navbar-toggler-icon"></span>
			</button>
		<div class="collapse navbar-collapse" id="navbarsite">
					<ul class="navbar-nav mr-auto">

					<!--Menu Items-->

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Categorias</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="">Cadastrar</a>
								<a class="dropdown-item" href="categoria-lista.php">Listar</a>
							</div>
                       </li>
                       <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Clientes</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="">Cadastrar</a>
								<a class="dropdown-item" href="clientes-lista.php">Listar</a>
							</div>
                       </li>
                       <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Fornecedores</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="">Cadastrar</a>
								<a class="dropdown-item" href="fornecedores-lista.php">Listar</a>
							</div>
                       </li>
                     	<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Funcionários</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="funcionario-form.php">Cadastrar</a>
								<a class="dropdown-item" href="funcionario-lista.php">Listar</a>
							</div>
                       </li>
                       <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Ordens</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="">Cadastrar</a>
								<a class="dropdown-item" href="ordens-lista.php">Listar</a>
							</div>
                       </li>

                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Produtos</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="">Cadastrar</a>
								<a class="dropdown-item" href="produtos-lista.php">Listar</a>
							</div>
                       </li>
                       <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Região</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="regiao-form.php">Cadastrar</a>
								<a class="dropdown-item" href="regiao-lista.php">Listar</a>
							</div>
                       </li>

               <li class="nav-item dropdown">
                	<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Funcionário-Territórios</a>
                	<div class="dropdown-menu">
                    	<a class="dropdown-item" href="funcionario-regiao-form.php">Cadastrar</a>
                    	<a class="dropdown-item" href="funcionario-regiao-lista.php">Listar</a>
                  </div>
                </li>


                    <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Territórios</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="">Cadastrar</a>
								<a class="dropdown-item" href="">Listar</a>
							</div>
                       </li>
                      <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Transportadoras</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="">Cadastrar</a>
								<a class="dropdown-item" href="">Listar</a>
							</div>
                       </li>
          			 </ul>

					</ul>

					<!--Campo de Busca-->
					<form action="" class="form-inline">
						<input placeholder="Buscar..." type="search" class="form-control ml-5 mr-1">
						<button class="btn btn-danger" type="submit">OK</button>
					</form>

				</div>
			</div>
	</nav>
    <div class="container">
	<div class="mb-5"></div><br>




    <div class="container ">

        <div class="principal">
