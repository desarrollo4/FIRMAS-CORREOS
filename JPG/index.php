<?php 
$dir = "./";
$directorio = opendir($dir);
$contador=0;
$carpetas = array();
$archivos = array();
$carpetasRest = array("diseno",".");
$archivosRest = array();
while ($archivo = readdir($directorio))
{ 
	//meto todo en arreglos para saber que es carpetas y que es archivos
	if(is_dir($dir.$archivo))
	{
		if(!in_array($archivo, $carpetasRest))
		{
			$array = array("nombre"=>$archivo,
					   "ruta"=>$dir.$archivo,
					   "tipo"=>"folder");
			array_push($carpetas,$array);
		}
	}
	else
	{
		if(!in_array($archivo, $archivosRest))
		{
			$array2 = array("nombre"=>$archivo,
						    "ruta"=>$dir.$archivo,
						    "tipo"=>"file");
			array_push($archivos,$array2);
		}
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Firmas IT Soluciones</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="container">
		  <div class="jumbotron">
		    <h1>Firmas It Soluciones</h1>
		    <img src="perfil.png" width="200px" class="thumbnail"/>
		    <p>Ubique la firma que le corresponde luego haga click sobre ella para que se despliegue una ventana en la cual aparecerá el enlace con la firma, después adjuntelo en la configuración de su cuenta de Gmail.</p>
		    <p>
		    	La imagen que se ve en la parte superior será la foto de perfil que deberán usar en las cuentas de correo.
		    </p>
		  </div>
		</div>
		<div class="container">
			<div class="row">
				<?php foreach($archivos as $firmas){?>
					<?php if($firmas['nombre'] != "index.php" && $firmas['nombre'] != "jquery-2.1.4.min.js" && $firmas['nombre'] != "perfil.png"){?>
						<div class="col-lg-4">
							<a onclick="copyToClipboard('https://www.tucomunidad.co/firmas/<?php echo $firmas['nombre'] ?>')">
								<img src="<?php echo $firmas['ruta'] ?>" width="100%" class="thumbnail"/>
							</a>
						</div>
					<?php } ?>		
				<?php } ?>	
			</div>
		</div>
	</div>
	<!-- Latest compiled and minified JavaScript -->
	<script type="text/javascript" src="jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script language="javascript" type="text/javascript">
		<!--
		    function copyToClipboard(text)
		    {
		        window.prompt("Copia este link:", text);
		        
		    }
		//-->
	</script> 
</body>
</html>
