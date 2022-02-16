<?php

require_once '../../modelo/redireccion.php';
require_once '../../modelo/datos-productos.php';
require_once '../../modelo/datosInventarios.php';
require_once '../../modelo/funcionesClientes.php';
$inventarios = new Inventarios();
$productos = new Productos();
$clientes = new Clientes();
?>
<link rel="stylesheet" href="../../librerias/css/bootstrap.min.css">

	<div class="container">
		<div class="row"><br>
			<br>
			<br>
			<div class="col-sm-12">
				<img src="../../imagenes/bascula-15kg.jpg" alt="" width="100px" style="float: right;">
				<p style="float: right; color: crimson;">Debes de pesar la referencia por talla. <br>toda la cantidad de prendas por talla ingresada debe ser pesada<br>COMANDOS PARA INTERARTUAR<br>CTRL = Actualizar stock X peso<br>SHIFT = Actualizar stock X cantidad directamente<br>BLOG MAYUS = Actualizar peso inicial directamente<br>ALT = Actualizar stock inicial directamente<br>F8 = Acumular nuevo peso<br></p>
			<?php
			foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $keyV) {
			?>		
				<h4>Reinventariado version 2.0 </h4>
				<br>
				<legend>Reinventariando referencia: <?php echo $keyV['referencia']; ?><br><?php echo $keyV['descripcion']; ?><br>color: <?php echo $productos->color_hexa($keyV['color']); ?></legend>
			<?php 
			}
			?>
			</div>
			<div class="col-sm-4">
			
			</div>
			<div class="col-sm-4">
			<?php

				if (@$_POST['accion'] == 'verificarInventario') {
					
					$pesoTotal6 = (double) @$_POST['peso_R6'];
					$pesoTotal8 = (double) @$_POST['peso_R8'];
					$pesoTotal10 = (double) @$_POST['peso_R10'];
					$pesoTotal12 = (double) @$_POST['peso_R12'];
					$pesoTotal14 = (double) @$_POST['peso_R14'];
					$pesoTotal16 = (double) @$_POST['peso_R16'];
					$pesoTotal18 = (double) @$_POST['peso_R18'];
					$pesoTotal20 = (double) @$_POST['peso_R20'];
					$pesoTotal26 = (double) @$_POST['peso_R26'];
					$pesoTotal28 = (double) @$_POST['peso_R28'];
					$pesoTotal30 = (double) @$_POST['peso_R30'];
					$pesoTotal32 = (double) @$_POST['peso_R32'];
					$pesoTotal34 = (double) @$_POST['peso_R34'];
					$pesoTotal36 = (double) @$_POST['peso_R36'];
					$pesoTotal38 = (double) @$_POST['peso_R38'];
					$pesoTotals = (double) @$_POST['peso_Rs'];
					$pesoTotalm = (double) @$_POST['peso_Rm'];
					$pesoTotall = (double) @$_POST['peso_Rl'];
					$pesoTotalxl = (double) @$_POST['peso_Rxl'];
					$pesoTotalu = (double) @$_POST['peso_Ru'];
					$pesoTotalest = (double) @$_POST['peso_Rest'];

					// Talla 6
						if ($pesoTotal6 == 0){

							$pesoTotal6 = 0;

						}else{

							$pesoTalla6 = (double) @$_POST['pesoTalla6Subida'];
							$talla6 = (double) @$_POST['talla6Subida'];

							
							if($pesoTalla6 == NULL || $pesoTalla6 == '' || $talla6 == NULL || $talla6 == ''){

								$comprobar6 = "<strong style='color:crimson;'>No se puede actualizar</strong>";

							}else{

							$pesoUnitarioT6 = $pesoTalla6 / $talla6;

							$cantidadT6 = $pesoTotal6 / $pesoUnitarioT6;
							$cantidadT6 = round($cantidadT6);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla6 = '$cantidadT6' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R6 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 8
						if ($pesoTotal8 == 0){

							$pesoTotal8 = 0;

						}else{

							$pesoTalla8 = (double) @$_POST['pesoTalla8Subida'];
							$talla8 = (double) @$_POST['talla8Subida'];

							
							if($pesoTalla8 == NULL || $pesoTalla8 == '' || $talla8 == NULL || $talla8 == ''){

								$comprobar8 = "<strong style='color:crimson;'>La TALLA 8<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT8 = $pesoTalla8 / $talla8;

							$cantidadT8 = $pesoTotal8 / $pesoUnitarioT8;
							$cantidadT8 = round($cantidadT8);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla8 = '$cantidadT8' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R8 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 10
						if ($pesoTotal10 == 0){

							$pesoTotal10 = 0;

						}else{

							$pesoTalla10 = (double) @$_POST['pesoTalla10Subida'];
							$talla10 = (double) @$_POST['talla10Subida'];

							
							if($pesoTalla10 == NULL || $pesoTalla10 == '' || $talla10 == NULL || $talla10 == ''){

								$comprobar10 = "<strong style='color:crimson;'>La TALLA 10<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT10 = $pesoTalla10 / $talla10;

							$cantidadT10 = $pesoTotal10 / $pesoUnitarioT10;
							$cantidadT10 = round($cantidadT10);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla10 = '$cantidadT10' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R10 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 12
						if ($pesoTotal12 == 0){

							$pesoTotal12 = 0;

						}else{

							$pesoTalla12 = (double) @$_POST['pesoTalla12Subida'];
							$talla12 = (double) @$_POST['talla12Subida'];

							
							if($pesoTalla12 == NULL || $pesoTalla12 == '' || $talla12 == NULL || $talla12 == ''){

								$comprobar12 = "<strong style='color:crimson;'>La TALLA 12<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT12 = $pesoTalla12 / $talla12;

							$cantidadT12 = $pesoTotal12 / $pesoUnitarioT12;
							$cantidadT12 = round($cantidadT12);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla12 = '$cantidadT12' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R12 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 14
						if ($pesoTotal14 == 0){

							$pesoTotal14 = 0;

						}else{

							$pesoTalla14 = (double) @$_POST['pesoTalla14Subida'];
							$talla14 = (double) @$_POST['talla14Subida'];

							
							if($pesoTalla14 == NULL || $pesoTalla14 == '' || $talla14 == NULL || $talla14 == ''){

								$comprobar14 = "<strong style='color:crimson;'>La TALLA 14<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT14 = $pesoTalla14 / $talla14;

							$cantidadT14 = $pesoTotal14 / $pesoUnitarioT14;
							$cantidadT14 = round($cantidadT14);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla14 = '$cantidadT14' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R14 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 16
						if ($pesoTotal16 == 0){

							$pesoTotal16 = 0;

						}else{

							$pesoTalla16 = (double) @$_POST['pesoTalla16Subida'];
							$talla16 = (double) @$_POST['talla16Subida'];

							
							if($pesoTalla16 == NULL || $pesoTalla16 == '' || $talla16 == NULL || $talla16 == ''){

								$comprobar16 = "<strong style='color:crimson;'>La TALLA 16<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT16 = $pesoTalla16 / $talla16;

							$cantidadT16 = $pesoTotal16 / $pesoUnitarioT16;
							$cantidadT16 = round($cantidadT16);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla16 = '$cantidadT16' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R16 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 18
						if ($pesoTotal18 == 0){

							$pesoTotal18 = 0;

						}else{

							$pesoTalla18 = (double) @$_POST['pesoTalla18Subida'];
							$talla18 = (double) @$_POST['talla18Subida'];

							
							if($pesoTalla18 == NULL || $pesoTalla18 == '' || $talla18 == NULL || $talla18 == ''){

								$comprobar18 = "<strong style='color:crimson;'>La TALLA 18<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT18 = $pesoTalla18 / $talla18;

							$cantidadT18 = $pesoTotal18 / $pesoUnitarioT18;
							$cantidadT18 = round($cantidadT18);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla18 = '$cantidadT18' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R18 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 20
						if ($pesoTotal20 == 0){

							$pesoTotal20 = 0;

						}else{

							$pesoTalla20 = (double) @$_POST['pesoTalla20Subida'];
							$talla20 = (double) @$_POST['talla20Subida'];

							
							if($pesoTalla20 == NULL || $pesoTalla20 == '' || $talla20 == NULL || $talla20 == ''){

								$comprobar20 = "<strong style='color:crimson;'>La TALLA 20<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT20 = $pesoTalla20 / $talla20;

							$cantidadT20 = $pesoTotal20 / $pesoUnitarioT20;
							$cantidadT20 = round($cantidadT20);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla20 = '$cantidadT20' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R20 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 26
						if ($pesoTotal26 == 0){

							$pesoTotal26 = 0;

						}else{

							$pesoTalla26 = (double) @$_POST['pesoTalla26Subida'];
							$talla26 = (double) @$_POST['talla26Subida'];

							
							if($pesoTalla26 == NULL || $pesoTalla26 == '' || $talla26 == NULL || $talla26 == ''){

								$comprobar26 = "<strong style='color:crimson;'>La TALLA 26<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT26 = $pesoTalla26 / $talla26;

							$cantidadT26 = $pesoTotal26 / $pesoUnitarioT26;
							$cantidadT26 = round($cantidadT26);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla26 = '$cantidadT26' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R26 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 28
						if ($pesoTotal28 == 0){

							$pesoTotal28 = 0;

						}else{

							$pesoTalla28 = (double) @$_POST['pesoTalla28Subida'];
							$talla28 = (double) @$_POST['talla28Subida'];

							
							if($pesoTalla28 == NULL || $pesoTalla28 == '' || $talla28 == NULL || $talla28 == ''){

								$comprobar28 = "<strong style='color:crimson;'>La TALLA 28<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT28 = $pesoTalla28 / $talla28;

							$cantidadT28 = $pesoTotal28 / $pesoUnitarioT28;
							$cantidadT28 = round($cantidadT28);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla28 = '$cantidadT28' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R28 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 30
						if ($pesoTotal30 == 0){

							$pesoTotal30 = 0;

						}else{

							$pesoTalla30 = (double) @$_POST['pesoTalla30Subida'];
							$talla30 = (double) @$_POST['talla30Subida'];

							
							if($pesoTalla30 == NULL || $pesoTalla30 == '' || $talla30 == NULL || $talla30 == ''){

								$comprobar30 = "<strong style='color:crimson;'>La TALLA 30<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT30 = $pesoTalla30 / $talla30;

							$cantidadT30 = $pesoTotal30 / $pesoUnitarioT30;
							$cantidadT30 = round($cantidadT30);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla30 = '$cantidadT30' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R30 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 32
						if ($pesoTotal32 == 0){

							$pesoTotal32 = 0;

						}else{

							$pesoTalla32 = (double) @$_POST['pesoTalla32Subida'];
							$talla32 = (double) @$_POST['talla32Subida'];

							
							if($pesoTalla32 == NULL || $pesoTalla32 == '' || $talla32 == NULL || $talla32 == ''){

								$comprobar32 = "<strong style='color:crimson;'>La TALLA 32<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT32 = $pesoTalla32 / $talla32;

							$cantidadT32 = $pesoTotal32 / $pesoUnitarioT32;
							$cantidadT32 = round($cantidadT32);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla32 = '$cantidadT32' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R32 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 34
						if ($pesoTotal34 == 0){

							$pesoTotal34 = 0;

						}else{

							$pesoTalla34 = (double) @$_POST['pesoTalla34Subida'];
							$talla34 = (double) @$_POST['talla34Subida'];

							
							if($pesoTalla34 == NULL || $pesoTalla34 == '' || $talla34 == NULL || $talla34 == ''){

								$comprobar34 = "<strong style='color:crimson;'>La TALLA 34<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT34 = $pesoTalla34 / $talla34;

							$cantidadT34 = $pesoTotal34 / $pesoUnitarioT34;
							$cantidadT34 = round($cantidadT34);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla34 = '$cantidadT34' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R34 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 36
						if ($pesoTotal36 == 0){

							$pesoTotal36 = 0;

						}else{

							$pesoTalla36 = (double) @$_POST['pesoTalla36Subida'];
							$talla36 = (double) @$_POST['talla36Subida'];

							
							if($pesoTalla36 == NULL || $pesoTalla36 == '' || $talla36 == NULL || $talla36 == ''){

								$comprobar36 = "<strong style='color:crimson;'>La TALLA 36<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT36 = $pesoTalla36 / $talla36;

							$cantidadT36 = $pesoTotal36 / $pesoUnitarioT36;
							$cantidadT36 = round($cantidadT36);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla36 = '$cantidadT36' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R36 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla 38
						if ($pesoTotal38 == 0){

							$pesoTotal38 = 0;

						}else{

							$pesoTalla38 = (double) @$_POST['pesoTalla38Subida'];
							$talla38 = (double) @$_POST['talla38Subida'];

							
							if($pesoTalla38 == NULL || $pesoTalla38 == '' || $talla38 == NULL || $talla38 == ''){

								$comprobar38 = "<strong style='color:crimson;'>La TALLA 38<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioT38 = $pesoTalla38 / $talla38;

							$cantidadT38 = $pesoTotal38 / $pesoUnitarioT38;
							$cantidadT38 = round($cantidadT38);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla38 = '$cantidadT38' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_R38 = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla s
						if ($pesoTotals == 0){

							$pesoTotals = 0;

						}else{

							$pesoTallas = (double) @$_POST['pesoTallasSubida'];
							$tallas = (double) @$_POST['tallasSubida'];

							
							if($pesoTallas == NULL || $pesoTallas == '' || $tallas == NULL || $tallas == ''){

								$comprobars = "<strong style='color:crimson;'>La TALLA S<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioTs = $pesoTallas / $tallas;

							$cantidadTs = $pesoTotals / $pesoUnitarioTs;
							$cantidadTs = round($cantidadTs);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallas = '$cantidadTs' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_Rs = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla m
						if ($pesoTotalm == 0){

							$pesoTotalm = 0;

						}else{

							$pesoTallam = (double) @$_POST['pesoTallamSubida'];
							$tallam = (double) @$_POST['tallamSubida'];

							
							if($pesoTallam == NULL || $pesoTallam == '' || $tallam == NULL || $tallam == ''){

								$comprobarm = "<strong style='color:crimson;'>La TALLA M<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioTm = $pesoTallam / $tallam;

							$cantidadTm = $pesoTotalm / $pesoUnitarioTm;
							$cantidadTm = round($cantidadTm);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallam = '$cantidadTm' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_Rm = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla l
						if ($pesoTotall == 0){

							$pesoTotall = 0;

						}else{

							$pesoTallal = (double) @$_POST['pesoTallalSubida'];
							$tallal = (double) @$_POST['tallalSubida'];

							
							if($pesoTallal == NULL || $pesoTallal == '' || $tallal == NULL || $tallal == ''){

								$comprobarl = "<strong style='color:crimson;'>La TALLA L<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioTl = $pesoTallal / $tallal;

							$cantidadTl = $pesoTotall / $pesoUnitarioTl;
							$cantidadTl = round($cantidadTl);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallal = '$cantidadTl' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_Rl = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla xl
						if ($pesoTotalxl == 0){

							$pesoTotalxl = 0;

						}else{

							$pesoTallaxl = (double) @$_POST['pesoTallaxlSubida'];
							$tallaxl = (double) @$_POST['tallaxlSubida'];

							
							if($pesoTallaxl == NULL || $pesoTallaxl == '' || $tallaxl == NULL || $tallaxl == ''){

								$comprobarxl = "<strong style='color:crimson;'>La TALLA XL<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioTxl = $pesoTallaxl / $tallaxl;

							$cantidadTxl = $pesoTotalxl / $pesoUnitarioTxl;
							$cantidadTxl = round($cantidadTxl);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallaxl = '$cantidadTxl' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_Rxl = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla u
						if ($pesoTotalu == 0){

							$pesoTotalu = 0;

						}else{

							$pesoTallau = (double) @$_POST['pesoTallauSubida'];
							$tallau = (double) @$_POST['tallauSubida'];

							
							if($pesoTallau == NULL || $pesoTallau == '' || $tallau == NULL || $tallau == ''){

								$comprobaru = "<strong style='color:crimson;'>La TALLA U<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioTu = $pesoTallau / $tallau;

							$cantidadTu = $pesoTotalu / $pesoUnitarioTu;
							$cantidadTu = round($cantidadTu);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallau = '$cantidadTu' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_Ru = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}

					// Talla est
						if ($pesoTotalest == 0){

							$pesoTotalest = 0;

						}else{

							$pesoTallaest = (double) @$_POST['pesoTallaestSubida'];
							$tallaest = (double) @$_POST['tallaestSubida'];

							
							if($pesoTallaest == NULL || $pesoTallaest == '' || $tallaest == NULL || $tallaest == ''){

								$comprobarest = "<strong style='color:crimson;'>La TALLA EST<br>no se Reinventarea</strong>";

							}else{

							$pesoUnitarioTest = $pesoTallaest / $tallaest;

							$cantidadTest = $pesoTotalest / $pesoUnitarioTest;
							$cantidadTest = round($cantidadTest);
							require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET tallaest = '$cantidadTest' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
								$consulta = "UPDATE inventarios_productos SET peso_Rest = '0' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);

							}

						}
					// fin				

				}elseif(@$_POST['accion'] == 'sumarPeso') {

					// Talla 6
						$pesoTotalT6 = (double) @$_POST['peso_R6'];
						$pesoXsumarT6 = $pesoTotalT6 + (double) @$_POST['talla6Ingreso'];
						
						$pesoTalla6 = (double) @$_POST['pesoTalla6Subida'];
						$talla6 = (double) @$_POST['talla6Subida'];

						if($pesoTalla6 == NULL || $pesoTalla6 == '' || $talla6 == NULL || $talla6 == ''){

							$comprobar6 = "<strong style='color:crimson;'>No se puede actualizar</strong>";

						}else{

							$pesoUnitarioT6 = $pesoTalla6 / $talla6;
							$XcantidadT6 = $pesoXsumarT6 / $pesoUnitarioT6;
							$XcantidadT6 = round($XcantidadT6);

						}

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R6 = '$pesoXsumarT6' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
						
					// Talla 8
						$pesoTotalT8 = (double) @$_POST['peso_R8'];
						$pesoXsumarT8 = $pesoTotalT8 + (double) @$_POST['talla8Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R8 = '$pesoXsumarT8' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 10
						$pesoTotalT10 = (double) @$_POST['peso_R10'];
						$pesoXsumarT10 = $pesoTotalT10 + (double) @$_POST['talla10Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R10 = '$pesoXsumarT10' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 12
						$pesoTotalT12 = (double) @$_POST['peso_R12'];
						$pesoXsumarT12 = $pesoTotalT12 + (double) @$_POST['talla12Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R12 = '$pesoXsumarT12' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 14
						$pesoTotalT14 = (double) @$_POST['peso_R14'];
						$pesoXsumarT14 = $pesoTotalT14 + (double) @$_POST['talla14Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R14 = '$pesoXsumarT14' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 16
						$pesoTotalT16 = (double) @$_POST['peso_R16'];
						$pesoXsumarT16 = $pesoTotalT16 + (double) @$_POST['talla16Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R16 = '$pesoXsumarT16' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 18
						$pesoTotalT18 = (double) @$_POST['peso_R18'];
						$pesoXsumarT18 = $pesoTotalT18 + (double) @$_POST['talla18Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R18 = '$pesoXsumarT18' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 20
						$pesoTotalT20 = (double) @$_POST['peso_R20'];
						$pesoXsumarT20 = $pesoTotalT20 + (double) @$_POST['talla20Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R20 = '$pesoXsumarT20' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 26
						$pesoTotalT26 = (double) @$_POST['peso_R26'];
						$pesoXsumarT26 = $pesoTotalT26 + (double) @$_POST['talla26Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R26 = '$pesoXsumarT26' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 28
						$pesoTotalT28 = (double) @$_POST['peso_R28'];
						$pesoXsumarT28 = $pesoTotalT28 + (double) @$_POST['talla28Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R28 = '$pesoXsumarT28' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 30
						$pesoTotalT30 = (double) @$_POST['peso_R30'];
						$pesoXsumarT30 = $pesoTotalT30 + (double) @$_POST['talla30Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R30 = '$pesoXsumarT30' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 32
						$pesoTotalT32 = (double) @$_POST['peso_R32'];
						$pesoXsumarT32 = $pesoTotalT32 + (double) @$_POST['talla32Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R32 = '$pesoXsumarT32' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 34
						$pesoTotalT34 = (double) @$_POST['peso_R34'];
						$pesoXsumarT34 = $pesoTotalT34 + (double) @$_POST['talla34Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R34 = '$pesoXsumarT34' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 36
						$pesoTotalT36 = (double) @$_POST['peso_R36'];
						$pesoXsumarT36 = $pesoTotalT36 + (double) @$_POST['talla36Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R36 = '$pesoXsumarT36' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla 38
						$pesoTotalT38 = (double) @$_POST['peso_R38'];
						$pesoXsumarT38 = $pesoTotalT38 + (double) @$_POST['talla38Ingreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_R38 = '$pesoXsumarT38' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla s
						$pesoTotalTs = (double) @$_POST['peso_Rs'];
						$pesoXsumarTs = $pesoTotalTs + (double) @$_POST['tallasIngreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rs = '$pesoXsumarTs' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla m
						$pesoTotalTm = (double) @$_POST['peso_Rm'];
						$pesoXsumarTm = $pesoTotalTm + (double) @$_POST['tallamIngreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rm = '$pesoXsumarTm' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla l
						$pesoTotalTl = (double) @$_POST['peso_Rl'];
						$pesoXsumarTl = $pesoTotalTl + (double) @$_POST['tallalIngreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rl = '$pesoXsumarTl' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla xl
						$pesoTotalTxl = (double) @$_POST['peso_Rxl'];
						$pesoXsumarTxl = $pesoTotalTxl + (double) @$_POST['tallaxlIngreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rxl = '$pesoXsumarTxl' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla u
						$pesoTotalTu = (double) @$_POST['peso_Ru'];
						$pesoXsumarTu = $pesoTotalTu + (double) @$_POST['tallauIngreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Ru = '$pesoXsumarTu' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }

					// Talla est
						$pesoTotalTest = (double) @$_POST['peso_Rest'];
						$pesoXsumarTest = $pesoTotalTest + (double) @$_POST['tallaestIngreso'];

						require_once("../../modelo/db.php");
							$conexion = new Conexion();
							$consulta = "UPDATE inventarios_productos SET peso_Rest = '$pesoXsumarTest' WHERE id_inventario =".$_GET['id_inventario'];
							$modules = $conexion->query($consulta);
							if($modules){
							}else{ echo "<script> alert('NO Sumado'); </script>"; }
					// fin
				}elseif(@$_POST['accion'] == 'actualizarDirectoSTOCK'){
					if(@$_POST['nuevaTalla6Ingreso'] != ''){
						$nuevaCantidadT6 = @$_POST['nuevaTalla6Ingreso'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla6 = '$nuevaCantidadT6' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}
				}elseif(@$_POST['accion'] == 'actualizarDirectoPeso'){
					if(@$_POST['nuevoPesoT6'] != ''){
						$nuevaCantidadT6 = @$_POST['nuevoPesoT6'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET peso_talla6 = '$nuevaCantidadT6' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}
				}elseif(@$_POST['accion'] == 'actualizarDirectoSTOCKinicial'){
					if(@$_POST['nuevaTalla6Inicial'] != ''){
						$nuevaCantidadT6Inicial = @$_POST['nuevaTalla6Inicial'];
						require_once("../../modelo/db.php");
								$conexion = new Conexion();
								$consulta = "UPDATE inventarios_productos SET talla6D = '$nuevaCantidadT6Inicial' WHERE id_inventario =".$_GET['id_inventario'];
								$modules = $conexion->query($consulta);
					}
				}

				// Serializando talla6
					if(@$_POST['serializadoT6'] != ''){

						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla6 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT6'] = '';

					}
				
				// Serializando talla6 R
					if(@$_POST['serializadoT6R'] != ''){

						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_R6 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT6R'] = '';

					}
				
				// Serializando Stock Inicial talla6
					if(@$_POST['serializadoStockInicialT6'] != ''){

						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET talla6D = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoStockInicialT6'] = '';

					}

				// Serializando Stock actual talla6
					if(@$_POST['serializadoStockT6'] != ''){

						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET talla6 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoStockT6'] = '';

					}

				// Serializando talla18
					if(@$_POST['serializadoT18'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla18 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT18'] = '';

					}

				// Serializando talla34
					if(@$_POST['serializadoT34'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla34 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT34'] = '';

					}

				// Serializando tallaxl
					if(@$_POST['serializadoTxl'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_tallaxl = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoTxl'] = '';

					}

				// Serializando talla8
					if(@$_POST['serializadoT8'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla8 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT8'] = '';

					}

				// Serializando talla20
					if(@$_POST['serializadoT20'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla20 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT20'] = '';

					}

				// Serializando talla36
					if(@$_POST['serializadoT36'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla36 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT36'] = '';

					}

				// Serializando tallau
					if(@$_POST['serializadoTu'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_tallau = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoTu'] = '';

					}

				// Serializando talla10
					if(@$_POST['serializadoT10'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla10 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT10'] = '';

					}

				// Serializando talla26
					if(@$_POST['serializadoT26'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla26 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT26'] = '';

					}

				// Serializando talla38
					if(@$_POST['serializadoT38'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla38 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT38'] = '';

					}

				// Serializando tallaest
					if(@$_POST['serializadoTest'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_tallaest = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoTest'] = '';

					}

				// Serializando talla12
					if(@$_POST['serializadoT12'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla12 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT12'] = '';

					}

				// Serializando talla28
					if(@$_POST['serializadoT28'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla28 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT28'] = '';

					}

				// Serializando tallas
					if(@$_POST['serializadoTs'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_tallas = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoTs'] = '';

					}

				// Serializando talla14
					if(@$_POST['serializadoT14'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla14 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT14'] = '';

					}

				// Serializando talla30
					if(@$_POST['serializadoT30'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla30 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT30'] = '';

					}

				// Serializando tallam
					if(@$_POST['serializadoTm'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_tallam = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoTm'] = '';

					}

				// Serializando talla16
					if(@$_POST['serializadoT16'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla16 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT16'] = '';

					}

				// Serializando talla32
					if(@$_POST['serializadoT32'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_talla32 = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoT32'] = '';

					}

				// Serializando tallal
					if(@$_POST['serializadoTl'] != ''){
						
						require_once("../../modelo/db.php");
						$conexion = new Conexion();
						$consulta = "UPDATE inventarios_productos SET peso_tallal = '0' WHERE id_inventario =".$_GET['id_inventario'];
						$modules = $conexion->query($consulta);
						@$_POST['serializadoTl'] = '';

					}

			?>
			</div>
			<div class="col-sm-12">
			<form action="" method="post" onkeyup="onKeyDownHandler(event);">
				<div id="espacioTallas">
					<div class="col-sm-12">
						<legend>Tallas</legend>
					</div>
					<?php
					foreach ($inventarios->verInventarioId($_GET['id_inventario']) as $key) {
					?>
						<div class="col-sm-3">
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding:10px;margin:20px 0px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php 
																							echo "<strong style='color: #D75A58;font-weight:900;font-size:20px;'>TALLA 6</strong><br>";
																							if (empty($comprobar6)){
																							}else {
																								echo $comprobar6;
																								$comprobar6 = "";
																							}
																							echo "<br>STOCK ACTUAL: ".$key['talla6']."<br>STOCK INICIAL: ".$key['talla6D']."<br>PESO ACTUAL: ".$key['peso_R6']."<br>PESO INICIAL: ".$key['peso_talla6']."<br>-------------------------------------------------<br>";
																							echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR STOCK</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR X PESO</strong><br>Se actualizaron:";
																							if (empty($cantidadT6)){
																								echo 0;
																							}else {
																								echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT6</strong>";
																							}
																							echo "<br>";
																							echo "Por actualizar:";
																							if (empty($XcantidadT6)){
																								echo 0;
																							}else {
																								echo $XcantidadT6;
																							}
																							echo "<br>";
																							echo 'Nuevo Peso :';
																							if (empty($key['peso_R6'])) {
																								echo 0;
																							} else {
																									echo $key['peso_R6'];
																							}
																							echo "<br>";
																					?>
									<input type="text" required="" value="0" name="talla6Ingreso" id="talla6Ingreso" class="form-control" placeholder="Peso">
									<input type="hidden" required="" value="<?php echo $key['peso_talla6'] ?>" name="pesoTalla6Subida" id="pesoTalla6" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla6D'] ?>" name="talla6Subida" id="talla6" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R6'] ?>" name="peso_R6" id="talla6" class="form-control">
									<br>
									<?php
										echo "<strong style='color: #D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevaTalla6Ingreso" id="nuevaTalla6Ingreso" class="form-control" placeholder="Nuevo stock actual">
									<input type="text" value="" name="nuevaTalla6Inicial" id="nuevaTalla6Inicial" class="form-control" placeholder="Nuevo stock inicial">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>ACTUALIZAR PESO</strong><br><strong style='color:#D75A58;font-weight:900;font-size:10px;'>ACTUALIZAR DIRECTAMENTE</strong><br>";
									?>
									<input type="text" value="" name="nuevoPesoT6" id="nuevoPesoT6" class="form-control" placeholder="Peso Nuevo">
									<?php
										echo "-------------------------------------------------<br>";
										echo "<strong style='color:#D75A58;font-weight:900;font-size:20px;'>INICIALIZAR</strong><br>";
									?>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoT6" value="" id="serializarT6">
										<input type="butom" class="btn btn-success" value="Peso Inicial" id="serializarT6" style="width:110px;background-color: #F67280;border-color: #F67280;" onclick="serializarTalla6(event)">
										<input type="hidden" name="serializadoT6R" value="" id="serializarT6R">
										<input type="butom" class="btn btn-success" value="Peso Actual" id="serializarT6R" style="width:110px;background-color: #B4D47A;border-color: #B4D47A;" onclick="serializarTalla6R(event)">
									</div>
									<div style="display: flex;align-items: center;justify-content: space-around;padding: 2.5px 0px;">
										<input type="hidden" name="serializadoStockInicialT6" value="" id="serializadoStockInicialT6">
										<input type="butom" class="btn btn-success" value="Stock Inicial" id="serializadoStockInicialT6" style="width:110px;background-color: #9CCACC;border-color: #9CCACC;" onclick="serializarStockInicialTalla6(event)">
										<input type="hidden" name="serializadoStockT6" value="" id="serializadoStockT6">
										<input type="butom" class="btn btn-success" value="Stock Actual" id="serializadoStockT6" style="width:110px;background-color: #EDC58E;border-color: #EDC58E;" onclick="serializarStockTalla6(event)">
									</div>
								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar18)){
																						echo 'de la talla 18 <br> Entraron:';
																						if (empty($cantidadT18)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT18</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R18'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R18'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar18;
																					}?>
									<input type="text" required="" value="0" name="talla18Ingreso" id="talla18Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla18'] ?>" name="pesoTalla18Subida" id="pesoTalla18" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla18D'] ?>" name="talla18Subida" id="talla18" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R18'] ?>" name="peso_R18" id="talla18" class="form-control">
									<input type="hidden" name="serializadoT18" value="" id="serializarT18">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT18" style="width:130px;" onclick="serializarTalla18(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar34)){
																						echo 'de la talla 34 <br> Entraron:';
																						if (empty($cantidadT34)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT34</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R34'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R34'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar34;
																					}?>
									<input type="text" required="" value="0" name="talla34Ingreso" id="talla34Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla34'] ?>" name="pesoTalla34Subida" id="pesoTalla34" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla34D'] ?>" name="talla34Subida" id="talla34" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R34'] ?>" name="peso_R34" id="talla34" class="form-control">
									<input type="hidden" name="serializadoT34" value="" id="serializarT34">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT34" style="width:130px;" onclick="serializarTalla34(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobarxl)){
																						echo 'de la talla xl <br> Entraron:';
																						if (empty($cantidadTxl)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadTxl</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_Rxl'])) {
																							echo 0;
																							} else {
																								echo $key['peso_Rxl'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobarxl;
																					}?>
									<input type="text" required="" value="0" name="tallaxlIngreso" id="tallaxlIngreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_tallaxl'] ?>" name="pesoTallaxlSubida" id="pesoTallaxl" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['tallaxlD'] ?>" name="tallaxlSubida" id="tallaxl" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_Rxl'] ?>" name="peso_Rxl" id="tallaxl" class="form-control">
									<input type="hidden" name="serializadoTxl" value="" id="serializarTxl">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarTxl" style="width:130px;" onclick="serializarTallaxl(event)">

								</label>
							</div>
						</div>

						<div class="col-sm-2">
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar8)){
																						echo 'de la talla 8 <br> Entraron:';
																						if (empty($cantidadT8)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT8</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R8'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R8'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar8;
																					}?>
									<input type="text" required="" value="0" name="talla8Ingreso" id="talla8Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla8'] ?>" name="pesoTalla8Subida" id="pesoTalla8" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla8D'] ?>" name="talla8Subida" id="talla8" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R8'] ?>" name="peso_R8" id="talla8" class="form-control">
									<input type="hidden" name="serializadoT8" value="" id="serializarT8">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT8" style="width:130px;" onclick="serializarTalla8(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar20)){
																						echo 'de la talla 20 <br> Entraron:';
																						if (empty($cantidadT20)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT20</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R20'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R20'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar20;
																					}?>
									<input type="text" required="" value="0" name="talla20Ingreso" id="talla20Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla20'] ?>" name="pesoTalla20Subida" id="pesoTalla20" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla20D'] ?>" name="talla20Subida" id="talla20" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R20'] ?>" name="peso_R20" id="talla20" class="form-control">
									<input type="hidden" name="serializadoT20" value="" id="serializarT20">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT20" style="width:130px;" onclick="serializarTalla20(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar36)){
																						echo 'de la talla 36 <br> Entraron:';
																						if (empty($cantidadT36)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT36</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R36'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R36'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar36;
																					}?>
									<input type="text" required="" value="0" name="talla36Ingreso" id="talla36Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla36'] ?>" name="pesoTalla36Subida" id="pesoTalla36" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla36D'] ?>" name="talla36Subida" id="talla36" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R36'] ?>" name="peso_R36" id="talla36" class="form-control">
									<input type="hidden" name="serializadoT36" value="" id="serializarT36">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT36" style="width:130px;" onclick="serializarTalla36(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobaru)){
																						echo 'de la talla u <br> Entraron:';
																						if (empty($cantidadTu)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadTu</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_Ru'])) {
																							echo 0;
																							} else {
																								echo $key['peso_Ru'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobaru;
																					}?>
									<input type="text" required="" value="0" name="tallauIngreso" id="tallauIngreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_tallau'] ?>" name="pesoTallauSubida" id="pesoTallau" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['tallauD'] ?>" name="tallauSubida" id="tallau" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_Ru'] ?>" name="peso_Ru" id="tallau" class="form-control">
									<input type="hidden" name="serializadoTu" value="" id="serializarTu">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarTu" style="width:130px;" onclick="serializarTallau(event)">

								</label>
							</div>
						</div>

						<div class="col-sm-2">
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar10)){
																						echo 'de la talla 10 <br> Entraron:';
																						if (empty($cantidadT10)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT10</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R10'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R10'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar10;
																					}?>
									<input type="text" required="" value="0" name="talla10Ingreso" id="talla10Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla10'] ?>" name="pesoTalla10Subida" id="pesoTalla10" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla10D'] ?>" name="talla10Subida" id="talla10" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R10'] ?>" name="peso_R10" id="talla10" class="form-control">
									<input type="hidden" name="serializadoT10" value="" id="serializarT10">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT10" style="width:130px;" onclick="serializarTalla10(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar26)){
																						echo 'de la talla 26 <br> Entraron:';
																						if (empty($cantidadT26)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT26</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R26'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R26'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar26;
																					}?>
									<input type="text" required="" value="0" name="talla26Ingreso" id="talla26Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla26'] ?>" name="pesoTalla26Subida" id="pesoTalla26" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla26D'] ?>" name="talla26Subida" id="talla26" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R26'] ?>" name="peso_R26" id="talla26" class="form-control">
									<input type="hidden" name="serializadoT26" value="" id="serializarT26">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT26" style="width:130px;" onclick="serializarTalla26(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar38)){
																						echo 'de la talla 38 <br> Entraron:';
																						if (empty($cantidadT38)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT38</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R38'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R38'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar38;
																					}?>
									<input type="text" required="" value="0" name="talla38Ingreso" id="talla38Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla38'] ?>" name="pesoTalla38Subida" id="pesoTalla38" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla38D'] ?>" name="talla38Subida" id="talla38" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R38'] ?>" name="peso_R38" id="talla38" class="form-control">
									<input type="hidden" name="serializadoT38" value="" id="serializarT38">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT38" style="width:130px;" onclick="serializarTalla38(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobarest)){
																						echo 'de la talla est <br> Entraron:';
																						if (empty($cantidadTest)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadTest</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_Rest'])) {
																							echo 0;
																							} else {
																								echo $key['peso_Rest'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobarest;
																					}?>
									<input type="text" required="" value="0" name="tallaestIngreso" id="tallaestIngreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_tallaest'] ?>" name="pesoTallaestSubida" id="pesoTallaest" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['tallaestD'] ?>" name="tallaestSubida" id="tallaest" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_Rest'] ?>" name="peso_Rest" id="tallaest" class="form-control">
									<input type="hidden" name="serializadoTest" value="" id="serializarTest">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarTest" style="width:130px;" onclick="serializarTallaest(event)">

								</label>
							</div>
						</div>

						<div class="col-sm-2">
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar12)){
																						echo 'de la talla 12 <br> Entraron:';
																						if (empty($cantidadT12)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT12</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R12'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R12'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar12;
																					}?>
									<input type="text" required="" value="0" name="talla12Ingreso" id="talla12Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla12'] ?>" name="pesoTalla12Subida" id="pesoTalla12" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla12D'] ?>" name="talla12Subida" id="talla12" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R12'] ?>" name="peso_R12" id="talla12" class="form-control">
									<input type="hidden" name="serializadoT12" value="" id="serializarT12">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT12" style="width:130px;" onclick="serializarTalla12(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar28)){
																						echo 'de la talla 28 <br> Entraron:';
																						if (empty($cantidadT28)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT28</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R28'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R28'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar28;
																					}?>
									<input type="text" required="" value="0" name="talla28Ingreso" id="talla28Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla28'] ?>" name="pesoTalla28Subida" id="pesoTalla28" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla28D'] ?>" name="talla28Subida" id="talla28" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R28'] ?>" name="peso_R28" id="talla28" class="form-control">
									<input type="hidden" name="serializadoT28" value="" id="serializarT28">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT28" style="width:130px;" onclick="serializarTalla28(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobars)){
																						echo 'de la talla s <br> Entraron:';
																						if (empty($cantidadTs)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadTs</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_Rs'])) {
																							echo 0;
																							} else {
																								echo $key['peso_Rs'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobars;
																					}?>
									<input type="text" required="" value="0" name="tallasIngreso" id="tallasIngreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_tallas'] ?>" name="pesoTallasSubida" id="pesoTallas" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['tallasD'] ?>" name="tallasSubida" id="tallas" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_Rs'] ?>" name="peso_Rs" id="tallas" class="form-control">
									<input type="hidden" name="serializadoTs" value="" id="serializarTs">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarTs" style="width:130px;" onclick="serializarTallas(event)">

								</label>
							</div>
						</div>

						<div class="col-sm-2">
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar14)){
																						echo 'de la talla 14 <br> Entraron:';
																						if (empty($cantidadT14)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT14</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R14'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R14'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar14;
																					}?>
									<input type="text" required="" value="0" name="talla14Ingreso" id="talla14Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla14'] ?>" name="pesoTalla14Subida" id="pesoTalla14" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla14D'] ?>" name="talla14Subida" id="talla14" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R14'] ?>" name="peso_R14" id="talla14" class="form-control">
									<input type="hidden" name="serializadoT14" value="" id="serializarT14">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT14" style="width:130px;" onclick="serializarTalla14(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar30)){
																						echo 'de la talla 30 <br> Entraron:';
																						if (empty($cantidadT30)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT30</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R30'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R30'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar30;
																					}?>
									<input type="text" required="" value="0" name="talla30Ingreso" id="talla30Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla30'] ?>" name="pesoTalla30Subida" id="pesoTalla30" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla30D'] ?>" name="talla30Subida" id="talla30" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R30'] ?>" name="peso_R30" id="talla30" class="form-control">
									<input type="hidden" name="serializadoT30" value="" id="serializarT30">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT30" style="width:130px;" onclick="serializarTalla30(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobarm)){
																						echo 'de la talla m <br> Entraron:';
																						if (empty($cantidadTm)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadTm</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_Rm'])) {
																							echo 0;
																							} else {
																								echo $key['peso_Rm'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobarm;
																					}?>
									<input type="text" required="" value="0" name="tallamIngreso" id="tallamIngreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_tallam'] ?>" name="pesoTallamSubida" id="pesoTallam" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['tallamD'] ?>" name="tallamSubida" id="tallam" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_Rm'] ?>" name="peso_Rm" id="tallam" class="form-control">
									<input type="hidden" name="serializadoTm" value="" id="serializarTm">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarTm" style="width:130px;" onclick="serializarTallam(event)">

								</label>
							</div>
						</div>

						<div class="col-sm-2">
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar16)){
																						echo 'de la talla 16 <br> Entraron:';
																						if (empty($cantidadT16)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT16</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R16'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R16'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar16;
																					}?>
									<input type="text" required="" value="0" name="talla16Ingreso" id="talla16Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla16'] ?>" name="pesoTalla16Subida" id="pesoTalla16" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla16D'] ?>" name="talla16Subida" id="talla16" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R16'] ?>" name="peso_R16" id="talla16" class="form-control">
									<input type="hidden" name="serializadoT16" value="" id="serializarT16">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT16" style="width:130px;" onclick="serializarTalla16(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobar32)){
																						echo 'de la talla 32 <br> Entraron:';
																						if (empty($cantidadT32)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadT32</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_R32'])) {
																							echo 0;
																							} else {
																								echo $key['peso_R32'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobar32;
																					}?>
									<input type="text" required="" value="0" name="talla32Ingreso" id="talla32Ingreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_talla32'] ?>" name="pesoTalla32Subida" id="pesoTalla32" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['talla32D'] ?>" name="talla32Subida" id="talla32" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_R32'] ?>" name="peso_R32" id="talla32" class="form-control">
									<input type="hidden" name="serializadoT32" value="" id="serializarT32">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarT32" style="width:130px;" onclick="serializarTalla32(event)">

								</label>
							</div>
							<div style="border-width: 1px;border-style: dashed;border-color: black;padding: 10px;margin:5px;">
								<label style="color: gray; text-transform: uppercase;" for=""><?php if (empty($comprobarl)){
																						echo 'de la talla l <br> Entraron:';
																						if (empty($cantidadTl)){
																							echo 0;
																						}else {
																							echo "<strong style='color:green;font-weight:900;font-size:16px;'> $cantidadTl</strong>";
																						}
																						echo "<br>";
																						echo 'Peso :';
																						if (empty($key['peso_Rl'])) {
																							echo 0;
																							} else {
																								echo $key['peso_Rl'];
																							}
																							
																						echo "<br>";

																					}else {
																						echo $comprobarl;
																					}?>
									<input type="text" required="" value="0" name="tallalIngreso" id="tallalIngreso" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_tallal'] ?>" name="pesoTallalSubida" id="pesoTallal" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['tallalD'] ?>" name="tallalSubida" id="tallal" class="form-control">
									<input type="hidden" required="" value="<?php echo $key['peso_Rl'] ?>" name="peso_Rl" id="tallal" class="form-control">
									<input type="hidden" name="serializadoTl" value="" id="serializarTl">
									<input type="butom" class="btn btn-success" value="Inicializar Peso" id="serializarTl" style="width:130px;" onclick="serializarTallal(event)">

								</label>
							</div>
							<input type="hidden" name="accion" value="" id="botonEnviarF">
							<input type="hidden" name="id_inventario" value="<?php echo $_GET['id_inventario']; ?>">
							<input type="submit" class="btn btn-success" value="" id="enviarF" style="width:0px;heigth:0px;background-color: white; color: white;border-color:white;">
						</div>
					<?php
					}
					?>

				</div>


			</div>
			
		</div>
	</div>
</form>
<script src="../../librerias/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
	// $('#espacioTallas').slideUp();
	// $('#tallas').click(function(){
	// 	$('#espacioTallas').slideToggle();
	// });

	// Peso talla 6
		function serializarTalla6(event){
			var i=document.getElementById("serializarT6").value = "serializarT6";
			document.getElementById("enviarF").click();
			var i=document.getElementById("serializarT6").value = "";
		}
	
	// Peso talla 6 R
		function serializarTalla6R(event){
			var i=document.getElementById("serializarT6R").value = "serializarT6R";
			document.getElementById("enviarF").click();
			var i=document.getElementById("serializarT6R").value = "";
		}
	
	// Stock inicial talla 6
		function serializarStockInicialTalla6(event){
			var i=document.getElementById("serializadoStockInicialT6").value = "serializadoStockInicialT6";
			document.getElementById("enviarF").click();
			var i=document.getElementById("serializarT6R").value = "";
		}

	// Stock actual talla 6
	
	function serializarStockTalla6(event){
			var i=document.getElementById("serializadoStockT6").value = "serializadoStockT6";
			document.getElementById("enviarF").click();
			var i=document.getElementById("serializarT6R").value = "";
		}
	// talla 18
		function serializarTalla18(event){
			var i=document.getElementById("serializarT18").value = "serializarT18";
			document.getElementById("enviarF").click();
		}

	// talla 34
		function serializarTalla34(event){
			var i=document.getElementById("serializarT34").value = "serializarT34";
			document.getElementById("enviarF").click();
		}

	// talla XL
		function serializarTallaxl(event){
			var i=document.getElementById("serializarTxl").value = "serializarTxl";
			document.getElementById("enviarF").click();
		}

	// talla 8
		function serializarTalla8(event){
			var i=document.getElementById("serializarT8").value = "serializarT8";
			document.getElementById("enviarF").click();
		}

	// talla 20
		function serializarTalla20(event){
			var i=document.getElementById("serializarT20").value = "serializarT20";
			document.getElementById("enviarF").click();
		}

	// talla 36
		function serializarTalla36(event){
			var i=document.getElementById("serializarT36").value = "serializarT36";
			document.getElementById("enviarF").click();
		}

	// talla U
		function serializarTallau(event){
			var i=document.getElementById("serializarTu").value = "serializarTu";
			document.getElementById("enviarF").click();
		}

	// talla 10
		function serializarTalla10(event){
			var i=document.getElementById("serializarT10").value = "serializarT10";
			document.getElementById("enviarF").click();
		}

	// talla 26
		function serializarTalla26(event){
			var i=document.getElementById("serializarT26").value = "serializarT26";
			document.getElementById("enviarF").click();
		}

	// talla 38
		function serializarTalla38(event){
			var i=document.getElementById("serializarT38").value = "serializarT38";
			document.getElementById("enviarF").click();
		}

	// talla EST
		function serializarTallaest(event){
			var i=document.getElementById("serializarTest").value = "serializarTest";
			document.getElementById("enviarF").click();
		}

	// talla 12
		function serializarTalla12(event){
			var i=document.getElementById("serializarT12").value = "serializarT12";
			document.getElementById("enviarF").click();
		}

	// talla 28
		function serializarTalla28(event){
			var i=document.getElementById("serializarT28").value = "serializarT28";
			document.getElementById("enviarF").click();
		}

	// talla S
		function serializarTallas(event){
			var i=document.getElementById("serializarTs").value = "serializarTs";
			document.getElementById("enviarF").click();
		}

	// talla 14
		function serializarTalla14(event){
			var i=document.getElementById("serializarT14").value = "serializarT14";
			document.getElementById("enviarF").click();
		}

	// talla 30
		function serializarTalla30(event){
			var i=document.getElementById("serializarT30").value = "serializarT30";
			document.getElementById("enviarF").click();
		}

	// talla M
		function serializarTallam(event){
			var i=document.getElementById("serializarTm").value = "serializarTm";
			document.getElementById("enviarF").click();
		}

	// talla 16
		function serializarTalla16(event){
			var i=document.getElementById("serializarT16").value = "serializarT16";
			document.getElementById("enviarF").click();
		}

	// talla 32
		function serializarTalla32(event){
			var i=document.getElementById("serializarT32").value = "serializarT32";
			document.getElementById("enviarF").click();
		}

	// talla l
		function serializarTallal(event){
			var i=document.getElementById("serializarTl").value = "serializarTl";
			document.getElementById("enviarF").click();
		}

	// Funciones de teclado
		function onKeyDownHandler(event) {

			var codigo = event.which || event.keyCode;

			console.log(codigo);

			if(codigo === 119){
				var i=document.getElementById("botonEnviarF").value = "sumarPeso";
				document.getElementById("enviarF").click();


				const boton6 = document.getElementById("talla6Ingreso");
				boton6.style.backgroundColor = '#F08080';

				const boton18 = document.getElementById("talla18Ingreso");
				boton18.style.backgroundColor = '#F08080';

				const boton34 = document.getElementById("talla34Ingreso");
				boton34.style.backgroundColor = '#F08080';

				const botonxl = document.getElementById("tallaxlIngreso");
				botonxl.style.backgroundColor = '#F08080';

				const boton8 = document.getElementById("talla8Ingreso");
				boton8.style.backgroundColor = '#F08080';

				const boton20 = document.getElementById("talla20Ingreso");
				boton20.style.backgroundColor = '#F08080';

				const boton36 = document.getElementById("talla36Ingreso");
				boton36.style.backgroundColor = '#F08080';

				const botonu = document.getElementById("tallauIngreso");
				botonu.style.backgroundColor = '#F08080';

				const boton10 = document.getElementById("talla10Ingreso");
				boton10.style.backgroundColor = '#F08080';

				const boton26 = document.getElementById("talla26Ingreso");
				boton26.style.backgroundColor = '#F08080';

				const boton38 = document.getElementById("talla38Ingreso");
				boton38.style.backgroundColor = '#F08080';

				const botonest = document.getElementById("tallaestIngreso");
				botonest.style.backgroundColor = '#F08080';

				const boton12 = document.getElementById("talla12Ingreso");
				boton12.style.backgroundColor = '#F08080';

				const boton28 = document.getElementById("talla28Ingreso");
				boton28.style.backgroundColor = '#F08080';

				const botons = document.getElementById("tallasIngreso");
				botons.style.backgroundColor = '#F08080';

				const boton14 = document.getElementById("talla14Ingreso");
				boton14.style.backgroundColor = '#F08080';

				const boton30 = document.getElementById("talla30Ingreso");
				boton30.style.backgroundColor = '#F08080';

				const botonm = document.getElementById("tallamIngreso");
				botonm.style.backgroundColor = '#F08080';

				const boton16 = document.getElementById("talla16Ingreso");
				boton16.style.backgroundColor = '#F08080';

				const boton32 = document.getElementById("talla32Ingreso");
				boton32.style.backgroundColor = '#F08080';

				const botonl = document.getElementById("tallalIngreso");
				botonl.style.backgroundColor = '#F08080';

			}

			if(codigo === 17){
				var i=document.getElementById("botonEnviarF").value = "verificarInventario";
				var opcion = confirm("Seguro que quiere reinventariar la referencia?");
				if(opcion == true){
					document.getElementById("enviarF").click();
				}else{
				alert("Los cambios no se realizaron");
				}
			
			}

			if(codigo === 16){
				var i=document.getElementById("botonEnviarF").value = "actualizarDirectoSTOCK";
				var opcion = confirm("Seguro que quiere actualizar directamente el STOCK de la referencia?");
				if(opcion == true){
					document.getElementById("enviarF").click();
				}else{
				}
			}

			if(codigo === 20){
				var i=document.getElementById("botonEnviarF").value = "actualizarDirectoPeso";
				var opcion = confirm("Seguro que quiere actualizar directamente el Peso inicial de la referencia?");
				if(opcion == true){
					document.getElementById("enviarF").click();
				}else{
				}
			}

			if(codigo === 18){
				
				var i=document.getElementById("botonEnviarF").value = "actualizarDirectoSTOCKinicial";
				var opcion = confirm("Seguro que quiere actualizar directamente el stock inicial de la referencia?");
				if(opcion == true){
					document.getElementById("enviarF").click();
				}else{
				}
			}
		}

	//fin
</script>