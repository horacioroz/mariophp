<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<?php include 'head.php';?>
	<body>

		<!-- Header -->
			<?include ("menu-for-sidebar.php");?>

		<!-- Main -->
			<div id="main" class="wrapper style1">
				<div class="container">
					<header class="major">
						<h2>Cat&aacute;logo de Herramientas</h2>
						<p>Todo lo necesario para el colocador profesional</p>
					</header>

					<!-- Content -->
						<section id="content">

						<?php
							//definimos el path de acceso
							$path = "images/catalog/";
							//abrimos el directorio
							$dir = opendir($path);
							//Mostramos las informaciones
							while ($elemento=readdir($dir)){
								
								 // list($ancho, $alto, $tipo, $atributos) = getimagesize($path.$elemento);
								 
									// echo "<img src=\"'.$path.$elemento'\" $atributos alt=\"Ejemplo de getimagesize()\" />";

								if(($elemento!='.')&&($elemento!='..')){
									echo '
											<div class="tool_content">
												<div class="tool">
												<a target="_blank" href="'.$path.$elemento.'">
													<img src="'.$path.$elemento.'" alt="'.$path.$elemento.'" />
												</a>
											<p class="tool-name">'.basename($elemento,".jpg").'</p>
												</div>	
											</div>
										';
											// echo $atributos;
								}
							}
							//Cerramos el directorio
							closedir($dir);
						?>
<!-- 							
							<div class="tool">
								<a target="_blank" href="images/pic07.jpg"><img src="images/pic07.jpg" alt="" /></a>
							</div>
 -->						</section>

				</div>
			</div>

		<!-- Footer -->
			<?include ("footer.php");?>	</body>
</html>