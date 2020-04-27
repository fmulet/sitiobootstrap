<?php

$mysqli = new mysqli("localhost", "root", "", "usuarios_ciisahot");

switch($_POST['funcion']){

	case "ingresar":
	   	$nombre_usuario = $_POST['nombre_usuario'];
		$password_usuario = $_POST['password_usuario'];

		if ($mysqli -> connect_errno) {
			echo "Lo sentimos, este sitio web esta experimentando problemas.";
			echo " Error: Fallo al conectarse a MySQL";
			echo " Codigo de Error: " . $mysqli -> connect_errno . "\n";
			echo "Detalle del Error: " . $mysqli -> connect_error . "\n";
			exit;
		}

		$sql = "SELECT * FROM usuarios WHERE nombre='".$nombre_usuario."' AND password_usuario='".$password_usuario."'";

		if (!$resultado = $mysqli -> query($sql)) {
			echo "Lo sentimos, este sitio web esta experimentando problemas.";
			echo "Error: La ejecucion de la consulta fallo debido a: \n";
			echo "Query: " . $sql . "\n";
			echo "Errno: " . $mysqli -> errno . "\n";
			echo "Error: " . $mysqli -> error . "\n";
			exit;
		}else{
			if ($resultado -> num_rows > 0) {
			    header('Location: ../acceso_correcto.php');
			}else{
			    header('Location: ../error.php');
			}
		}

		$resultado -> free();
		$mysqli -> close();
	break;
	
	case "correo":
		$nombre_usuario=$_POST['nombre_usuario'];
	
		if ($mysqli->connect_errno) {
			echo "Lo sentimos, este sitio web esta experimentando problemas.";
			echo " Error: Fallo al conectarse a MySQL";
			echo " Codigo de Error: " . $mysqli->connect_errno . "\n";
			echo "Detalle del Error: " . $mysqli->connect_error . "\n";
			exit;
		}

		$sql = "SELECT nombre_usuario FROM usuarios WHERE nombre='".$nombre_usuario."'";
		
		if (!$resultado = $mysqli->query($sql)) {
			echo "Lo sentimos, este sitio web esta experimentando problemas.";
			echo "Error: La ejecucion de la consulta fallo debido a: \n";
			echo "Query: " . $sql . "\n";
			echo "Errno: " . $mysqli->errno . "\n";
			echo "Error: " . $mysqli->error . "\n";
			exit;
		}else{
			if ($resultado-> num_rows > 0) {
				$row = $resultado -> fetch_array(MYSQLI_ASSOC);
				$correo = $row["correo_usuario"];
					
				$asunto='Aviso de Nuevo Correo';

				$mensaje='Hola ' . $nombre_usuario;
				$mensaje = $mensaje . '<br><br>Estamos haciendo pruebas !';
				$mensaje = $mensaje . '<br>' ;
				$mensaje = $mensaje . 'Gracias !' ;
				$mensaje=$mensaje . '<br><br><br>' ;
				$mensaje=$mensaje . '<b>Equipo 2019</b>' ;

				$mensaje=$mensaje . '<table>';
				$mensaje=$mensaje . '<tr>';
				$mensaje=$mensaje . '<td><img src="http://www.ibilbao.informaticaciisa.cl/imagenes/logo.png" alt="Logo CIISA HOT" width=130 /></td>';
				$mensaje=$mensaje . '</tr>';
				$mensaje=$mensaje . '</table>';

				$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
				$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$cabeceras .= 'From: CIISA-HOT <contacto@ciisahot.cl>' . "\r\n" ;
				$cabeceras .= 'Reply-To:' . 'contacto@ciisahot.cl' . "\r\n";
				$cabeceras .= 'Cc: '. $correo . "\r\n";
				$cabeceras .= 'X-Mailer:PHP/' . phpversion();

				mail($correo,$asunto,$mensaje,$cabeceras);
				
				$mensaje = 'Correo enviado exitosamente';
				echo $mensaje;

				}else{
				    $mensaje = 'Lo sentimos, no fue posible enviar el correo. Favor verificar los datos del correo';
				    echo $mensaje;
				}
			}
	    break;	
    }   
?>