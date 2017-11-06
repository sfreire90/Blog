<?php require 'views/header.php'; ?>

<div class="contenedor">
	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo">Iniciar Sesion</h2>
				<form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="">
					<input type="text" name="usuario" placeholder="Usuario">
					<input type="password" name="password" placeholder="Contraseña">
					<input type="submit" value="Iniciar Sesión">
				</form>
			</article>
		</div>
	</div>
</div>

<?php require 'views/footer.php'; ?>