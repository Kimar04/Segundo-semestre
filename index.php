<?php include ('views/front/templates/head.php');
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}
?> 
<section>
	<article>
		<p>Manos expertas en el desarrollo de eventos</p>
	</article>
	<fieldset>
		<legend>Formulario de Registro</legend>
		<form name="register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" required>
			<p>
				<label for="nambre">Nombre</label>
				<input type="text" name="nombre" placeholder="Nombre completo.." required>
			</p>
			<p>
				<label for="correo">Correo</label>
				<input type="email" name="correo" placeholder="you@example.com.." required>
			</p>
			<p>
				<label for="password">Contraseña</label>
				<input type="password" name="password" placeholder="Crear contraseña.." required>
			</p>
			<p>
				<label for="conf_pass">Nombre</label>
				<input type="password" name="conf_pass" placeholder="Confirmar contraseña.." required>
			</p>
			<p>
				<input type="submit" name="btn-register" value="Registrar usuario">
				<input type="reset" value="Limpiar datos">
			</p>
		</form>
	</fieldset>
	</section>
<?php include ('views/front/templates/foot.php'); ?>