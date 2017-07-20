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
											<li><a href="<?= $link_address_02?>">Control Solar</a></li>
											<li><a href="<?= $link_address_02?>">Seguridad</a></li>
											<li><a href="<?= $link_address_02?>">Nanocer&aacute;mico</a></li>
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
											<li><a href="<?=$link_address_04?>#doble_">Resinados</a></li>
										</ul>
									</li>
								</ul>
						</li>
						<!-- <li> 
							<a href="">Productos</a>
							<ul>
								<li><a href="left-sidebar.html">Nanocerámico</a></li>
								<li><a href="right-sidebar.html">Polarizado</a></li>
								<li><a href="no-sidebar.html">Otros Productos</a></li>
								<li>
									<a href="">Otros Productos</a>
									<ul>
										<li><a href="#">Option 1</a></li>
										<li><a href="#">Option 2</a></li>
										<li><a href="#">Option 3</a></li>
										<li><a href="#">Option 4</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="elements.html">Elements</a></li> -->
						<li><a href="contact-form.php" class="button special">Contacto</a></li>
					</ul> 
				</nav>