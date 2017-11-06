<?php require '../views/header.php'; ?>

<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Nuevo Articulo</h2>
			<form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" name="" enctype="multipart/form-data">
				<input type="text" name="titulo" placeholder="Título del Artículo">
				<input type="text" name="extracto" placeholder="Extracto del Artículo">
				<textarea name="texto" placeholder="Texto del Artículo"></textarea>
				<input type="file" name="thumb">

				<input type="submit" value="Crear Artículo">
			</form>
		</article>
	</div>
</div>

<?php require '../views/footer.php'; ?>