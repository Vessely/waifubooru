<div class="container-fluid fill-height">
	<h1 class="text-center">Subir una imagen.</h1>
	<div class="container w-50 help-form p-10">
		<form class="container w-60 p-10 upload-form" enctype="multipart/form-data">
			<input type="text" class="form-control p-10" name="title" placeholder="Titulo de la imagen">
			<input type="file" class="p-10" name="image">
			<textarea class="image-description p-10"></textarea>
			<p class="text-center p-10 image-upload main-color">Subir</p>
		</form>
	</div>
</div>
<script type="text/javascript" src="<?php echo UPLOAD_JS; ?>"></script>
