<?php 
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Control de Secciones';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/barranav.inc.php';
?>	

<div class="container">
	<div class="jumbotron">
		<h1 class="text-center">Formulario de Registro</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Instrucciones
					</h3>					
				</div>
				<div class="panel-body">
					<br>
					<p class="text-justify"> 
						¿Qué poner aquí?
					</p>
					<br>
					<a href="#">¿Ya tienes cuenta?</a>
					<br>
					<br>
					<a href="#">¿Olvidaste tu contraseña?</a>
					<br>
					<br>
				</div>
			</div>
		</div>
		<div class="col-md-6 text-center">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						Introduce tus datos
					</h3>					
				</div>
				<div class="panel-body">
					<form role="form" method="post" action="registro_accion.php">
						<div class="form-group">
							<label>Nombre:</label>
							<input type="text" class="form-control" name="nombre" placeholder="admin">
						</div>
						<div class="form-group">
							<label>Email:</label>
							<input type="text" class="form-control" name="email" placeholder="usuario@mail.com">
						</div>
						<div class="form-group">
							<label>Clave:</label>
							<input type="password" class="form-control" name="clave" placeholder="*********">
						</div>
						<div class="form-group">
							<label>Repite la clave:</label>
							<input type="password" class="form-control" name="clave2" placeholder="*********">
						</div>
						<br>
						<button type="submit" class="btn btn-default btn-primary" name="Enviar">Enviar Datos</button>
						<button type="reset" class="btn btn-default btn-primary">Limpiar Datos</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
include_once 'plantillas/documento-cierre.inc.php';
?>