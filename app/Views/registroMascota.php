<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Animalandia</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('public/styles/estilos.css')?>">
</head>
    <body>
    <header>
		<nav class="navbar navbar-expand-lg navbar-dark fondo">
  			<div class="container-fluid">
    			<a class="navbar-brand fuente" href="#">
				<i class="fas fa-paw"></i>
					Casa Hogar
				</a>
    			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
    			</button>
   				<div class="collapse navbar-collapse" id="navbarSupportedContent">
      				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
        				<li class="nav-item">
							<a class="nav-link" aria-current="page" href="<?= site_url('/') ?>">Home</a>
        				</li>
       			 		<li class="nav-item">
          					<a class="nav-link" href="<?= site_url('/productos/registro') ?>">Registro Producto</a>
        				</li>
						<li class="nav-item">
          					<a class="nav-link active" href="<?= site_url('/mascota/registro') ?>">Registro Mascota</a>
        				</li>
      				</ul>
    			</div>
  			</div>
		</nav>
	</header>
    <h2 class="text-center">Registro de Mascotas</h2>
    <div class="container mt-8">
    <form action="<?= site_url('/mascota/registro/nuevo') ?>" method="POST">
    
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nombre</label>
      <input type="text" name="nombre" class="form-control" placeholder="Digite nombre de la mascota">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Edad</label>
      <input type="text" name="edad" class="form-control" placeholder="Edad mascota">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Foto</label>
      <input type="text" name="foto" class="form-control" placeholder="Foto mascota">
    </div>
    <div class="mb-3">
    <label for="disabledTextInput" class="form-label">Descripcion</label>
    <textarea class="form-control" placeholder="Descripcion de la mascota" name="descripcion"></textarea>
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Tipo de mascota</label>
      <select class="form-select" aria-label="Default select example" name="tipo">
        <option selected>Tipo de mascota</option>
        <option value="1">Perro</option>
        <option value="2">Gato</option>
        <option value="3">Ave</option>
        <option value="4">Caballo</option>
        <option value="5">Reptil</option>
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Registrar Mascota</button>
  
</form>
</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
    </body>
</html>