<?php
	/*
		Web Service RESTful en PHP con MySQL (CRUD)
		Códigos de Programación
	*/
	include 'conexion.php';
	
	$pdo = new Conexion();
	
	//Listar registros
	if($_SERVER['REQUEST_METHOD'] == 'GET'){
		if(isset($_GET['id']))
		{
			/*$sql = $pdo->prepare("SELECT * FROM paises WHERE id=:id");
			$sql->bindValue(':id', $_GET['id']);
			$sql->execute();
			$sql->setFetchMode(PDO::FETCH_ASSOC);
			header("HTTP/1.1 200 hay datos");
			echo json_encode($sql->fetchAll());
			exit;				
			*/
			switch (htmlentities( $_GET['id'])) { //Proteccion ante inyeccion sql
				case 1:
					$sql = $pdo->prepare("SELECT * FROM paises");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 2:
					$sql = $pdo->prepare("SELECT * FROM provincias");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 3:
					$sql = $pdo->prepare("SELECT * FROM ciudades");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 4:
					$sql = $pdo->prepare("SELECT * FROM estudiantes");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 5:
					$sql = $pdo->prepare("SELECT * FROM familiares");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 6:
					$sql = $pdo->prepare("SELECT * FROM parentescos");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 7:
					$sql = $pdo->prepare("SELECT * FROM proyectos");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 8:
					$sql = $pdo->prepare("SELECT * FROM detalle_proyectos");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 9:
					$sql = $pdo->prepare("SELECT * FROM unidades");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 10:
					$sql = $pdo->prepare("SELECT * FROM unidad_estudiantes");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 11:
					$sql = $pdo->prepare("SELECT * FROM cargos");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 12:
					$sql = $pdo->prepare("SELECT * FROM usuarios");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 13:
					$sql = $pdo->prepare("SELECT * FROM etapas");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 14:
					$sql = $pdo->prepare("SELECT * FROM insignias");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 15:
					$sql = $pdo->prepare("SELECT * FROM detalle_insignias");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 16:
					$sql = $pdo->prepare("SELECT * FROM tipo_actividades");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 17:
					$sql = $pdo->prepare("SELECT * FROM actividades");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 18:
					$sql = $pdo->prepare("SELECT * FROM registro_actividades");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 19:
					$sql = $pdo->prepare("SELECT * FROM participantes_actividades");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				case 20:
					$sql = $pdo->prepare("SELECT * FROM notas_objetivos");
					$sql->execute();
					$sql->setFetchMode(PDO::FETCH_ASSOC);
					header("HTTP/1.1 200 hay datos");
					echo json_encode($sql->fetchAll());
					exit;	
					break;
				
			}						
		}
	}

	//Insertar registros
	if($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		switch ($_POST['table']) {
			case 1:
				$sql = "INSERT INTO paises (nombre) VALUES(:nombre); commit;";
				$stmt = $pdo->prepare($sql);				
				$stmt->bindValue(':nombre', $_POST['nombre']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 2:
				$sql = "INSERT INTO provincias (nombre,id_pais) VALUES(:nombre, :id_pais); commit;";
				$stmt = $pdo->prepare($sql);				
				$stmt->bindValue(':nombre', $_POST['nombre']);
				$stmt->bindValue(':id_pais', $_POST['id_pais']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 3:
				$sql = "INSERT INTO ciudades (nombre, id_provincia) VALUES(:nombre, :id_provincia); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':nombre', $_POST['nombre']);
				$stmt->bindValue(':id_provincia', $_POST['id_provincia']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 4:
				$sql = "INSERT INTO estudiantes ( cedula, nombres, apellidos,fec_nac, genero, direccion, correo, cont_emergencia, tip_sangre, alergias, num_hermanos, idioma_prin, idioma_sec, colegio, direccion_col, nivel_col, padecimientos, id_ciudad) 
				VALUES(:cedula, :nombres, :apellidos, :fec_nac, :genero, :direccion, :correo, :cont_emergencia, :tip_sangre, :alergias, :num_hermanos, :idioma_prin, :idioma_sec, :colegio, :direccion_col, :nivel_col, :padecimientos, :id_ciudad); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':cedula', $_POST['cedula']);
				$stmt->bindValue(':nombres', $_POST['nombres']);
				$stmt->bindValue(':apellidos',$_POST['apellidos']); 
				$stmt->bindValue(':fec_nac', $_POST['fec_nac']);
				$stmt->bindValue(':genero', $_POST['genero']);
				$stmt->bindValue(':direccion', $_POST['direccion']);
				$stmt->bindValue(':correo', $_POST['correo']);
				$stmt->bindValue(':cont_emergencia', $_POST['cont_emergencia']);
				$stmt->bindValue(':tip_sangre', $_POST['tip_sangre']);
				$stmt->bindValue(':alergias', $_POST['alergias']);
				$stmt->bindValue(':num_hermanos', $_POST['num_hermanos']);
				$stmt->bindValue(':idioma_prin', $_POST['idioma_prin']);
				$stmt->bindValue(':idioma_sec', $_POST['idioma_sec']);
				$stmt->bindValue(':colegio', $_POST['colegio']);
				$stmt->bindValue(':direccion_col', $_POST['direccion_col']);
				$stmt->bindValue(':nivel_col', $_POST['nivel_col']);
				$stmt->bindValue(':padecimientos', $_POST['padecimientos']);
				$stmt->bindValue(':id_ciudad',$_POST['id_ciudad']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 5:
				$sql = "INSERT INTO familiares (cedula, nombre, apellido, fec_nac, lug_trabajo, tel_trabajo, profesion, celular, correo) 
				VALUES(:cedula, :nombre, :apellido, :fec_nac, :lug_trabajo, :tel_trabajo, :profesion, :celular, :correo); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':cedula', $_POST['cedula']); 
				$stmt->bindValue(':nombre', $_POST['nombre']); 
				$stmt->bindValue(':apellido', $_POST['apellido']); 
				$stmt->bindValue(':fec_nac', $_POST['fec_nac']); 
				$stmt->bindValue(':lug_trabajo', $_POST['lug_trabajo']); 
				$stmt->bindValue(':tel_trabajo', $_POST['tel_trabajo']); 
				$stmt->bindValue(':profesion', $_POST['profesion']); 
				$stmt->bindValue(':celular', $_POST['celular']); 
				$stmt->bindValue(':correo',$_POST['correo']); 
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 6:
				$sql = "INSERT INTO parentescos (id_estudiante, id_familiar, relacion) 
				VALUES(:id_estudiante, :id_familiar, :relacion); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':id_estudiante', $_POST['id_estudiante']);
				$stmt->bindValue(':id_familiar', $_POST['id_familiar']);
				$stmt->bindValue(':relacion', $_POST['relacion']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 7:
				$sql = "INSERT INTO proyectos (nombre, descripcion, fec_ini, fec_fin) 
				VALUES(:nombre, :descripcion, :fec_ini, :fec_fin); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':nombre',$_POST['nombre']); 
				$stmt->bindValue(':descripcion',$_POST['descripcion']); 
				$stmt->bindValue(':fec_ini',$_POST['fec_ini']); 
				$stmt->bindValue(':fec_fin',$_POST['fec_fin']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 8:
				$sql = "INSERT INTO detalle_proyectos (id_proyecto, id_estudiante) 
				VALUES(:id_proyecto, :id_estudiante); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':id_proyecto', $_POST['id_proyecto']);
				$stmt->bindValue(':id_estudiante', $_POST['id_estudiante']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 9:
				$sql = "INSERT INTO unidades (nombre, lim_edad, descripcion) 
				VALUES(:nombre, :lim_edad, :descripcion); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':nombre', $_POST['nombre']);
				$stmt->bindValue(':lim_edad', $_POST['lim_edad']);
				$stmt->bindValue(':descripcion', $_POST['descripcion']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 10:
				$sql = "INSERT INTO unidad_estudiantes (id_unidad, id_estudiante, funcion, fecha) 
				VALUES(:id_unidad, :id_estudiante, :funcion, :fecha); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':id_unidad',$_POST['id_unidad']); 
				$stmt->bindValue(':id_estudiante', $_POST['id_estudiante']);
				$stmt->bindValue(':funcion', $_POST['funcion']);
				$stmt->bindValue(':fecha', $_POST['fecha']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 11:
				$sql = "INSERT INTO cargos (nombre) 
				VALUES(:nombre); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':nombre', $_POST['nombre']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 12:
				$sql = "INSERT INTO usuarios (nombres, apellidos, fec_nac, ocupacion, telefono, correo, password, id_cargo, id_unidad) 
				VALUES(:nombres, :apellidos, :fec_nac, :ocupacion, :telefono, :correo, :password, :id_cargo, :id_unidad); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':nombres', $_POST['nombres']); 
				$stmt->bindValue(':apellidos',  $_POST['apellidos']);
				$stmt->bindValue(':fec_nac',  $_POST['fec_nac']);
				$stmt->bindValue(':ocupacion',  $_POST['ocupacion']);
				$stmt->bindValue(':telefono',  $_POST['telefono']);
				$stmt->bindValue(':correo',  $_POST['correo']);
				$stmt->bindValue(':password',  $_POST['password']);
				$stmt->bindValue(':id_cargo',  $_POST['id_cargo']);
				$stmt->bindValue(':id_unidad', $_POST['id_unidad']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 13:
				$sql = "INSERT INTO etapas (nombre, id_unidad) 
				VALUES(:nombre, :id_unidad); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':nombre', $_POST['nombre']);
				$stmt->bindValue(':id_unidad', $_POST['id_unidad']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 14:
				$sql = "INSERT INTO insignias (nombre, id_etapa) 
				VALUES(:nombre, :id_etapa); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':nombre', $_POST['nombre']);
				$stmt->bindValue(':id_etapa', $_POST['id_etapa']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 15:
				$sql = "INSERT INTO detalle_insignias (id_insignia, id_estudiante, fecha) 
				VALUES(:id_insignia, :id_estudiante, :fecha); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':id_insignia', $_POST['id_insignia']);
				$stmt->bindValue(':id_estudiante', $_POST['id_estudiante']);
				$stmt->bindValue(':fecha', $_POST['fecha']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 16:
				$sql = "INSERT INTO tipo_actividades (nombre) 
				VALUES(:nombre); commit;";
				$stmt = $pdo->prepare($sql);				
				$stmt->bindValue(':nombre', $_POST['nombre']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 17:
				$sql = "INSERT INTO actividades (nombre, descripcion, id_tip_actividad, id_etapa) 
				VALUES(:nombre, :descripcion, :id_tip_actividad, :id_etapa); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':nombre', $_POST['nombre']);
				$stmt->bindValue(':descripcion', $_POST['descripcion']);
				$stmt->bindValue(':id_tip_actividad', $_POST['id_tip_actividad']);
				$stmt->bindValue(':id_etapa', $_POST['id_etapa']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 18:
				$sql = "INSERT INTO registro_actividades(fec_ini, fec_fin, id_actividad) 
				VALUES(:fec_ini, :fec_fin, :id_actividad); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':fec_ini', $_POST['fec_ini']);
				$stmt->bindValue(':fec_fin', $_POST['fec_fin']);
				$stmt->bindValue(':id_actividad', $_POST['id_actividad']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 19:
				$sql = "INSERT INTO participantes_actividades (id_estudiante, id_reg_actividad) 
				VALUES(:id_estudiante, :id_reg_actividad); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':id_estudiante', $_POST['id_estudiante']);
				$stmt->bindValue(':id_reg_actividad', $_POST['id_reg_actividad']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;
			case 20:
				$sql = "INSERT INTO notas_objetivos (id_etapa, id_estudiante, corporalidad, creatividad, caracter, efectividad, sociabilidad, espiritualidad, fecha) 
				VALUES(:id_etapa, :id_estudiante, :corporalidad, :creatividad, :caracter, :efectividad, :sociabilidad, :espiritualidad, :fecha); commit;";
				$stmt = $pdo->prepare($sql);
				$stmt->bindValue(':id_etapa', $_POST['id_etapa']);
				$stmt->bindValue(':id_estudiante', $_POST['id_estudiante']);
				$stmt->bindValue(':corporalidad', $_POST['corporalidad']);
				$stmt->bindValue(':creatividad', $_POST['creatividad']);
				$stmt->bindValue(':caracter', $_POST['caracter']);
				$stmt->bindValue(':efectividad', $_POST['efectividad']);
				$stmt->bindValue(':sociabilidad', $_POST['sociabilidad']);
				$stmt->bindValue(':espiritualidad', $_POST['espiritualidad']);
				$stmt->bindValue(':fecha',$_POST['fecha']);
				$stmt->execute();
				$idPost = $pdo->lastInsertId(); 
				if($idPost)
				{
					header("HTTP/1.1 200 Ok");
					echo json_encode($idPost);
					exit;
				}
			break;

		}


		
	}
	
	//Actualizar registros
	if($_SERVER['REQUEST_METHOD'] == 'PUT')
	{		
		switch ($_GET['id_tab']) {
		case 1:
			$sql = "UPDATE paises SET nombre=:nombre WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':nombre', $_GET['nombre']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 2:
			$sql = "UPDATE provincias SET nombre=:nombre, id_pais=:id_pais WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':nombre', $_GET['nombre']);
			$stmt->bindValue(':id_pais', $_GET['id_pais']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 3:
			$sql = "UPDATE ciudades SET nombre=:nombre, id_provincia=:id_provincia WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':nombre', $_GET['nombre']);
			$stmt->bindValue(':id_provincia', $_GET['id_provincia']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 4:
			$sql = "UPDATE estudiantes SET cedula=:cedula, nombres=:nombres, apellidos=:apellidos, fec_nac=:fec_nac, genero=:genero, direccion=:direccion, correo=:correo, cont_emergencia=:cont_emergencia, tip_sangre=:tip_sangre, alergias=:alergias, num_hermanos=:num_hermanos, idioma_prin=:idioma_prin, idioma_sec=:idioma_sec, colegio=:colegio, direccion_col=:direccion_col, nivel_col=:nivel_col, padecimientos=:padecimientos, id_ciudad=:id_ciudad WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':cedula', $_GET['cedula']);
			$stmt->bindValue(':nombres', $_GET['nombres']);
			$stmt->bindValue(':apellidos', $_GET['apellidos']);
			$stmt->bindValue(':fec_nac', $_GET['fec_nac']);
			$stmt->bindValue(':genero', $_GET['genero']);
			$stmt->bindValue(':direccion', $_GET['direccion']);
			$stmt->bindValue(':correo', $_GET['correo']);
			$stmt->bindValue(':cont_emergencia', $_GET['cont_emergencia']);
			$stmt->bindValue(':tip_sangre', $_GET['tip_sangre']);
			$stmt->bindValue(':alergias', $_GET['alergias']);
			$stmt->bindValue(':num_hermanos', $_GET['num_hermanos']);
			$stmt->bindValue(':idioma_prin', $_GET['idioma_prin']);
			$stmt->bindValue(':idioma_sec', $_GET['idioma_sec']);
			$stmt->bindValue(':colegio', $_GET['colegio']);
			$stmt->bindValue(':direccion_col', $_GET['direccion_col']);
			$stmt->bindValue(':nivel_col', $_GET['nivel_col']);
			$stmt->bindValue(':padecimientos', $_GET['padecimientos']);
			$stmt->bindValue(':id_ciudad) ', $_GET['id_ciudad) ']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 5:
			$sql = "UPDATE familiares SET cedula=:cedula, nombre=:nombre, apellido=:apellido, fec_nac=:fec_nac, lug_trabajo=:lug_trabajo, tel_trabajo=:tel_trabajo, profesion=:profesion, celular=:celular, correo=:correo WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':cedula', $_GET['cedula']);
			$stmt->bindValue(':nombre', $_GET['nombre']);
			$stmt->bindValue(':apellido', $_GET['apellido']);
			$stmt->bindValue(':fec_nac', $_GET['fec_nac']);
			$stmt->bindValue(':lug_trabajo', $_GET['lug_trabajo']);
			$stmt->bindValue(':tel_trabajo', $_GET['tel_trabajo']);
			$stmt->bindValue(':profesion', $_GET['profesion']);
			$stmt->bindValue(':celular', $_GET['celular']);
			$stmt->bindValue(':correo', $_GET['correo']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 6:
			$sql = "UPDATE parentescos SET id_estudiante=:id_estudiante, id_familiar=:id_familiar, relacion=:relacion WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':id_estudiante', $_GET['id_estudiante']);
			$stmt->bindValue(':id_familiar', $_GET['id_familiar']);
			$stmt->bindValue(':relacion', $_GET['relacion']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 7:
			$sql = "UPDATE proyectos SET nombre=:nombre, descripcion=:descripcion, fec_ini=:fec_ini, fec_fin=:fec_fin WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':nombre', $_GET['nombre']);
			$stmt->bindValue(':descripcion', $_GET['descripcion']);
			$stmt->bindValue(':fec_ini', $_GET['fec_ini']);
			$stmt->bindValue(':fec_fin', $_GET['fec_fin']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;

		// APROBAR ACTUALIZACION
		case 8:
			$sql = "UPDATE detalle_proyectos SET id_proyecto=:id_proyecto, id_estudiante=:id_estudiante WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':id_proyecto', $_GET['id_proyecto']);
			$stmt->bindValue(':id_estudiante', $_GET['id_estudiante']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 9:
			$sql = "UPDATE unidades SET nombre=:nombre, lim_edad=:lim_edad, descripcion=:descripcion WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':nombre', $_GET['nombre']);
			$stmt->bindValue(':lim_edad', $_GET['lim_edad']);
			$stmt->bindValue(':descripcion', $_GET['descripcion']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;

		// APROBAR ACTUALIZACION
		case 10:
			$sql = "UPDATE unidad_estudiantes SET id_unidad=:id_unidad, id_estudiante=:id_estudiante, funcion=:funcion, fecha=:fecha WHERE id=:id ";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->bindValue(':id_unidad', $_GET['id_unidad']);
			$stmt->bindValue(':id_estudiante', $_GET['id_estudiante']);
			$stmt->bindValue(':funcion', $_GET['funcion']);
			$stmt->bindValue(':fecha', $_GET['fecha']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 11:
			$sql = "UPDATE cargos SET nombre=:nombre WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':nombre', $_GET['nombre']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 12:
			$sql = "UPDATE usuarios SET nombres=:nombres, apellidos=:apellidos, fec_nac=:fec_nac, ocupacion=:ocupacion, telefono=:telefono, correo=:correo, password=:password, id_cargo=:id_cargo, id_unidad=:id_unidad WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':nombres', $_GET['nombres']);
			$stmt->bindValue(':apellidos', $_GET['apellidos']);
			$stmt->bindValue(':fec_nac', $_GET['fec_nac']);
			$stmt->bindValue(':ocupacion', $_GET['ocupacion']);
			$stmt->bindValue(':telefono', $_GET['telefono']);
			$stmt->bindValue(':correo', $_GET['correo']);
			$stmt->bindValue(':password', $_GET['password']);
			$stmt->bindValue(':id_cargo', $_GET['id_cargo']);
			$stmt->bindValue(':id_unidad', $_GET['id_unidad']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 13:
			$sql = "UPDATE etapas SET nombre=:nombre, id_unidad=:id_unidad WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':nombre', $_GET['nombre']);
			$stmt->bindValue(':id_unidad', $_GET['id_unidad']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 14:
			$sql = "UPDATE insignias SET nombre=:nombre, id_etapa=:id_etapa WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':nombre', $_GET['nombre']);
			$stmt->bindValue(':id_etapa', $_GET['id_etapa']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;

		// APROBAR ACTUALIZACION
		case 15:
			$sql = "UPDATE detalle_insignias SET id_insignia=:id_insignia, id_estudiante=:id_estudiante, fecha=:fecha WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':id_insignia', $_GET['id_insignia']);
			$stmt->bindValue(':id_estudiante', $_GET['id_estudiante']);
			$stmt->bindValue(':fecha', $_GET['fecha']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 16:
			$sql = "UPDATE tipo_actividades SET nombre=:nombre WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':nombre', $_GET['nombre']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 17:
			$sql = "UPDATE actividades SET nombre=:nombre, descripcion=:descripcion, id_tip_actividad=:id_tip_actividad, id_etapa=:id_etapa WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':nombre', $_GET['nombre']);
			$stmt->bindValue(':descripcion', $_GET['descripcion']);
			$stmt->bindValue(':id_tip_actividad', $_GET['id_tip_actividad']);
			$stmt->bindValue(':id_etapa', $_GET['id_etapa']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 18:
			$sql = "UPDATE registro_actividades SET fec_ini=:fec_ini, fec_fin=:fec_fin, id_actividad=:id_actividad WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':fec_ini', $_GET['fec_ini']);
			$stmt->bindValue(':fec_fin', $_GET['fec_fin']);
			$stmt->bindValue(':id_actividad', $_GET['id_actividad']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		// APROBAR ACTUALIZACION
		case 19:
			$sql = "UPDATE participantes_actividades SET id_estudiante=:id_estudiante, id_reg_actividad=:id_reg_actividad WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':id_estudiante', $_GET['id_estudiante']);
			$stmt->bindValue(':id_reg_actividad', $_GET['id_reg_actividad']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;
		case 20:
			$sql = "UPDATE notas_objetivos SET corporalidad=:corporalidad, creatividad=:creatividad, caracter=:caracter, efectividad=:efectividad, sociabilidad=:sociabilidad, espiritualidad=:espiritualidad, fecha=:fecha WHERE id=:id";
			$stmt = $pdo->prepare($sql);
			$stmt->bindValue(':corporalidad', $_GET['corporalidad']);
			$stmt->bindValue(':creatividad', $_GET['creatividad']);
			$stmt->bindValue(':caracter', $_GET['caracter']);
			$stmt->bindValue(':efectividad', $_GET['efectividad']);
			$stmt->bindValue(':sociabilidad', $_GET['sociabilidad']);
			$stmt->bindValue(':espiritualidad', $_GET['espiritualidad']);
			$stmt->bindValue(':fecha', $_GET['fecha']);
			$stmt->bindValue(':id_etapa', $_GET['id_etapa']);
			$stmt->bindValue(':id_estudiante', $_GET['id_estudiante']);
			$stmt->bindValue(':id', $_GET['id']);
			$stmt->execute();
			header("HTTP/1.1 200 Ok");
			exit;
			break;

		
		}
	}
	
	
	//Eliminar registros
	if($_SERVER['REQUEST_METHOD'] == 'DELETE')
	{
		switch ($_GET['id_tab']) {
			case 1:
		$sql = "DELETE FROM paises WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 2:
		$sql = "DELETE FROM provincias WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 3:
		$sql = "DELETE FROM ciudades WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 4:
		$sql = "DELETE FROM estudiantes WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 5:
		$sql = "DELETE FROM familiares WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 6:
				//TODO:
		$sql = "DELETE FROM parentescos WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 7:
		$sql = "DELETE FROM proyectos WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 8:
				//TODO:
		$sql = "DELETE FROM detalle_proyectos WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 9:
		$sql = "DELETE FROM unidades WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 10:
				//TODO:
		$sql = "DELETE FROM unidad_estudiantes WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 11:
		$sql = "DELETE FROM cargos WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 12:
		$sql = "DELETE FROM usuarios WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 13:
		$sql = "DELETE FROM etapas WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 14:
		$sql = "DELETE FROM insignias WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 15:
				//TODO:
		$sql = "DELETE FROM detalle_insignias WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 16:
		$sql = "DELETE FROM tipo_actividades WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 17:
		$sql = "DELETE FROM actividades WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 18:
		$sql = "DELETE FROM registro_actividades WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 19:
				//TODO:
		$sql = "DELETE FROM participantes_actividades WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			case 20:
				//TODO
		$sql = "DELETE FROM notas_objetivos WHERE id=:id";
		$stmt = $pdo->prepare($sql);
		$stmt->bindValue(':id', $_GET['id']);
		$stmt->execute();
		header("HTTP/1.1 200 Ok");
		exit;
		break;
			}
		}
	
	//Si no corresponde a ninguna opción anterior
	header("HTTP/1.1 400 Bad Request");
?>