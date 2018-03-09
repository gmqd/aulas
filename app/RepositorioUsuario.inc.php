<?php 
	
	class RepositorioUsuario {
		
		public static function get_todos($conexion) {
			
			$usuarios = array();

			if (isset($conexion)){
				try {

					include_once 'Usuario.inc.php';

					$sql = "SELECT * FROM usuarios";

					$sentencia = $conexion -> prepare($sql);
					$sentencia -> execute();
					$resultado = $sentencia -> fetchALL();

					if (count($resultado)) {
						foreach ($resultado as $fila){
							$usuarios[] = new Usuario($fila['id_usuario'], $fila['nombre'], $fila['apellido'], $fila['username'], $fila['clave']);
						} 
					}else {
						print 'No hay usuarios';
					}

				} catch (PDOException $e) {
					print "ERROR" . $e -> getMessage();			
				}
			}
			return $usuarios;
		}

		public static function get_num_usuarios($conexion){
			$total_usuarios = null;

			if (isset($conexion)) {
				try {
					$sql = "SELECT count(*) as total FROM usuarios";

					$sentencia = $conexion -> prepare($sql);
					$sentencia -> execute();
					$resultado = $sentencia -> fetch();

					$total_usuarios = $resultado['total'];

				} catch (PDOException $e) {
					print 'ERROR' . $e -> getMessage();
				}
			}

			return $total_usuarios;
		}
	}

 ?>