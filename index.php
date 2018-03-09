<?php 
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';

$titulo = 'Control de Secciones';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/barranav.inc.php';
?>		
		<div class="container">
			<div class="jumbotron">
				<h1>Control de Secciones</h1>
				<p>Facultad de Ciencias Empresariales</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<span class="glyphicon glyphicon-search" aria-hidden="true"></span>    
									Búsqueda
								</div>
								<div class="panel-body">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="¿qué buscas?">
									</div>
									<button type="button" class="btn btn-primary">Buscar</button>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><span class="glyphicon glyphicon-filter" aria-hidden="true"></span>
								Filtro
							</div>
							<div class="panel-body">
								
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								Archivo
							</div>
							<div class="panel-body">
								
							</div>
						</div>
					</div>
				</div>
				</div>
				
				<div class="col-md-9">
					<div class="panel panel-default">
						<div class="panel-heading">
							<span class="glyphicon glyphicon-time" aria-hidden="true"></span>Últimas entradas
						</div>
						<div class="panel-body">
							<p>Todavía no hay entradas que mostrar</p>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php 
include_once 'plantillas/documento-cierre.inc.php';
?>