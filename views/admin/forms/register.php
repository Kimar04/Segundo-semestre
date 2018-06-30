	<fieldset>
		<legend>Formulario de Ingreso</legend>
		<form name="login" method="post" action="app/Http/Controllers/Controller.php" required>
			<p>
				<input type="email" name="correo_log" placeholder="Correo electronico.." required>
			</p>
			<p>
				<input type="password" name="pass_log" placeholder="contraseña.." required>
			</p>
			<p>
				<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
				<input type="hidden" name="correo" value="<?php echo $correo; ?>">
				<input type="hidden" name="password" value="<?php echo $password; ?>">

				<input type="submit" name="btn-login" value="Ingresar">
				<input type="reset" value="Cancelar">
			</p>
		</form>
	</fieldset>