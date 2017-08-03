<?php
$link_address_01 = '<a href="index.php">Home</a>';
$link_address_02 = 'automotor.php';
$link_address_03 = 'arquitectura.php';
$link_address_04 = 'otros-productos.php';

?>
<nav id="nav">
	<ul>
		<li><?= $link_address_01?></li>
		<li>
			<a href="">Productos</a>
			<ul>
				<li><a href="<?= $link_address_02?>">Automotr&iacute;z</a>
					<ul>
						<li><a href="<?= $link_address_02?>#control_solar">Control Solar</a></li>
						<li><a href="<?= $link_address_02?>#seguridad_auto">Seguridad</a></li>
						<li><a href="<?= $link_address_02?>#nanoceramica_auto">Nanocer&aacute;mico</a></li>
					</ul>
				</li>
				<li><a href="<?=$link_address_03?>">Arquitectura</a>
					<ul>
						<li><a href="<?=$link_address_03?>#reflectivas">Reflectivas</a></li>
						<li><a href="<?=$link_address_03?>#privacidad">Privacidad</a></li>
						<li><a href="<?=$link_address_03?>#seguridad">Seguridad</a></li>
						<li><a href="<?=$link_address_03?>#nanoceramica">Nanocer&aacute;mico</a></li>
					</ul>
				</li>
				<li><a href="<?=$link_address_04?>">Otros Productos</a>
					<ul>
						<li><a href="<?=$link_address_04?>#posicionador">Papel Posicionador</a></li>
						<li><a href="<?=$link_address_04?>#herramientas">Herramientas</a></li>
						<li><a href="<?=$link_address_04?>#decorativas">Cintas Decorativas</a></li>
						<li><a href="<?=$link_address_04?>#doble_">Cintas Doble Faz</a></li>
						<li><a href="<?=$link_address_04?>#resinados">Resinados</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li><a href="contact-form.php" class="button special">Contacto</a></li>
	</ul> 
</nav>