<!doctype html>
<html lang="en">
  <head>
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
	
    <title>North Wind</title>
  </head>


  <body>
   			
  	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark  ">
		<div class="container">
			<a href="index.php" class="navbar-brand bg-danger mb-0"><h4>&nbsp;North Wind&nbsp;</h4></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsite">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarsite">
					<ul class="navbar-nav mr-auto">
					<!--Menu Items-->
                     	<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Funcionários</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="funcionario-form.php">Cadastrar</a>
								<a class="dropdown-item" href="funcionario-lista.php">Listar</a>
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
							 <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Funcionário-Territórios</a>
							 <div class="dropdown-menu">
								<a class="dropdown-item" href="funcionario-territorio-lista.php">Listar</a>
					    	 </div>
					   </li>                       
                       <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Região</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="regiao-form.php">Cadastrar</a>
								<a class="dropdown-item" href="regiao-lista.php">Listar</a>
							</div>
                       </li>                         
          			 </ul>
				</div>
			</div>
		</div>	
	</nav>
    <div class="container">
	<div class="mb-5"></div><br>
    <div class="container ">
        <div class="principal">
