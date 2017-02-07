<?php
	require('conexion.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	  	<div class="navbar-header">
	      <a class="navbar-brand">
	        <img id="logo" alt="Brand" src="img/logo.png">
	      </a>
	    </div>
	    <ul class="nav nav-pills">
		  <li role="presentation"><a href="index.php">Importar</a></li>
		  <li role="presentation" class="active"><a href="#">Combustible</a></li>
		  <li role="presentation"><a href="#">Admin Usuarios</a></li>
		  <li role="presentation"><a href="#">Captura</a></li>
		  <li role="presentation"><a href="#">Estadisticas</a></li>
		  <li role="presentation"><a href="#">Reportes</a></li>
		  <li role="presentation"><a href="#">Exportar</a></li>
		  <li role="presentation"><a href="#">Productividad</a></li>
		  <li role="presentation"><a href="#">Cerrar Sesion</a></li>
		</ul>
	  </div>
	</nav>
	<div class="panel panel-default">
		<div class="panel-heading">Combustible</div>
		<div class="panel-body">
			<div class="row">
			  <div class="col-lg-6">
			    <div class="input-group">
			    	<div class="table-responsive">
				    	<table class="table table-hover table-bordered">
				    		<tr>
				    			<th>Placa</th>
				    			<th>ID Vehículo</th>
				    			<th>Vehículo</th>
				    			<th>Fecha</th>
				    			<th>Centro</th>
				    			<th>Comprobante</th>
				    			<th>Código Pemex</th>
				    			<th>Mercancia</th>
				    			<th>Cantidad</th>
				    			<th>Importe</th>
				    		</tr>
				    		<?php
				    			$sql="SELECT placa, idVehiculo, descVehiculo, fecha, centro, noComprobante, codPemex, mercancia, cantMercancia, (cantMercancia*precioUni) as importe FROM data ORDER BY fecha ASC";
				    			$result = mysql_query($sql, $conn);
				    			while ($row = mysql_fetch_array($result)) {
				    				echo "<tr>";
				    				echo "<td>".$row['placa']."</td>";
				    				echo "<td>".$row['idVehiculo']."</td>";
				    				echo "<td>".$row['descVehiculo']."</td>";
				    				echo "<td>".$row['fecha']."</td>";
				    				echo "<td>".$row['centro']."</td>";
				    				echo "<td>".$row['noComprobante']."</td>";
				    				echo "<td>".$row['codPemex']."</td>";
				    				echo "<td>".$row['mercancia']."</td>";
				    				echo "<td>".$row['cantMercancia']."</td>";
				    				echo "<td>$".$row['importe']."</td>";
				    				echo "</tr>";
				    			}
				    		?>
				    	</table>
				    </div>
			    </div><!-- /input-group -->
			  </div><!-- /.col-lg-6 -->
			</div><!-- /.row -->
		</div>
	</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>