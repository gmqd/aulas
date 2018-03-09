<?php
Conexion :: abrir_conexion();
$total_usuarios = RepositorioUsuario :: get_num_usuarios(Conexion::get_conexion());
Conexion :: cerrar_conexion();
?>
<nav class="navbar navbar-default navbar-static-left">
			<div class="container"> <!-- container-fluid para que el menú se pegue a los laterales -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" area-expanded="false" aria-controls="navbar">
						<span class="sr-only">Este botón despliega la barra de navegación</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">UNICAES</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Datos</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Reportes</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">
								<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								<?php
								echo $total_usuarios; 
								?>
							</a>
						</li>
						<li><a href="#"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Sesión</a></li>
						<li><a href="registro.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registro</a></li>
					</ul>
					<!--ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link active" href="#">Active</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="#">Link</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link disabled" href="#">Disabled</a>
						</li>
					</ul-->
					<!--ul class="nav nav-tabs">
  						<li class="nav-item"><a class="nav-link active" href="#">Active</a></li>
  						<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
		    				<div class="dropdown-menu">
		    					<a class="dropdown-item" href="#">Action</a>
							    <a class="dropdown-item" href="#">Another action</a>
							    <a class="dropdown-item" href="#">Something else here</a>
								<div class="dropdown-divider"></div>
							    <a class="dropdown-item" href="#">Separated link</a>
		   					</div>
  						</li>
	  					<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
	  					<li class="nav-item"><a class="nav-link disabled" href="#">Disabled</a></li>
  					</ul-->
				</div>
			</div>
		</nav>