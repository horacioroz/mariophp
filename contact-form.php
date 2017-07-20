<!DOCTYPE HTML>
<!--
	Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

	<?php include 'head.php';?>

	<body class="landing">

		<!-- Header -->
			<?php include 'menu-for-sidebar.php';?>
			<?php include ('mailer.php');?>


		<div id="main" class="wrapper style1" style="padding: 4.5em 0 2.5em;">
			<div class="container">


					<!-- Form -->
						<section>
							<h3  class="form-title">Contacto</h3>
							<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
								<div class="row uniform 50%">
									<div class="6u 12u$(3)">
										<input type="text" name="name" id="name" value="<?php $name ?>" placeholder="Nombre" />
										<span class="error"><?= $name_error ?></span>
									</div>
									<div class="6u$ 12u$(3)">
										<input type="text" name="email" id="email" value="<?php $email ?>" placeholder="Email" />
										<span class="error"><?= $email_error; ?></span>
									</div>
									<div class="6u 12u$(3)">
										<div class="select-wrapper">
											<select name="category" id="category">
												<option value="">- Categor&iacute;a -</option>
												<option value="Automotor">Automotor</option>
												<option value="Arquitectura">Arquitectura</option>
												<option value="Otros productos">Otros productos</option>
												<option value="Otro Tema">Otro Tema</option>
											</select>
										</div>

									</div>
									<div class="6u$ 12u$(3)">
										<input type="text" name="phone" id="phone" value="<?php $phone ?>" placeholder="Tel&eacute;fono" />
										<span class="error"><?= $phone_error ?></span>
									</div>
									<!-- <div class="4u 12u$(2)">
										<input type="radio" id="priority-low" name="priority" checked>
										<label for="priority-low">Low Priority</label>
									</div>
									<div class="4u 12u$(2)">
										<input type="radio" id="priority-normal" name="priority">
										<label for="priority-normal">Normal Priority</label>
									</div>
									<div class="4u$ 12u$(2)">
										<input type="radio" id="priority-high" name="priority">
										<label for="priority-high">High Priority</label>
									</div> -->
									<!-- <div class="6u 12u$(2)">
										<input type="checkbox" id="copy" name="copy">
										<label for="copy">Enviar una copia de este mensaje a mi email</label>
									</div>
									<div class="6u$ 12u$(2)">
										<input type="checkbox" id="human" name="human" >
										<label for="human">No soy un robot</label>
									</div> -->
									<div class="12u$">
										<textarea type= "text" name="message" id="message" value="<?php $name ?>" placeholder="Escriba su mensaje" rows="6"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input name="submit" type="submit" value="Enviar" class="special" /></li>
											<li><input type="reset" value="Borrar" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
			</div>
		</div>
	</body>
</html>
