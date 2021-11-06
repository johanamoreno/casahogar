<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Mascotas</title>
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
    			<a class="navbar-brand fuente" href="<?= site_url('/') ?>">
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
          					<a class="nav-link" href="<?= site_url('/mascota/registro') ?>">Registro Mascota</a>
        				</li>
                        <li class="nav-item">
          					<a class="nav-link" href="<?= site_url('/productos/listado') ?>">Productos</a>
        				</li>
                        <li class="nav-item">
          					<a class="nav-link active" href="<?= site_url('/mascota/listado') ?>">Mascotas</a>
        				</li>
      				</ul>
    			</div>
  			</div>
		</nav>
	</header>
<br>
<main>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <?php foreach($mascotas as $mascota):?>  
                <div class="col">
                    <div class="card h-100 p-3">
                        <img src="<?= $mascota["foto"]?>"class="card-img-top h-100" alt="foto">
                        <div class="card-body">
                            <h5 class="card-title"><?=$mascota["nombre"]?></h5>
                            <p class="card-text"><?=$mascota["descripcion"]?></p>
                            <a data-bs-toggle="modal" data-bs-target="#confirmacion<?=$mascota["id"]?>" href="#" class="btn btn-primary"><i class="fas fa-trash-alt"></i></a>
                            <a data-bs-toggle="modal" data-bs-target="#editar<?=$mascota["id"]?>"href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        </div>
                    </div>

                    <section>
                        <div class="modal fade" id="confirmacion<?=$mascota["id"]?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header fondo text-white">
                                        <h5 class="modal-title">Confirmar Elimar</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                <div class="modal-body">
                                    <p>¿Esta seguro de eliminar esta mascota?</p>
                                    <p><?=$mascota["id"]?></p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="<?= site_url('/mascota/eliminar/'.$mascota["id"])?>" class="btn btn-danger">Aceptar</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="modal fade" id="editar<?=$mascota["id"]?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header fondo text-white">
                                        <h5 class="modal-title">Editar Mascota</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                <div class="modal-body">
                                <div class="row">
                                        <div class="col-3 align-self-center">
                                            <img src="<?=$mascota["foto"]?>" alt="" class="img-fluid w-100">
                                        </div>
                                        <div class="col-9">
                                            <form action="<?= site_url('/mascota/editar/'.$mascota["id"])?>" method="POST">
                                            <div class="mb-3">
                                                <label class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name="nombre" value="<?=$mascota["nombre"]?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Edad</label>
                                                <input type="text" class="form-control" name="edad" value="<?=$mascota["edad"]?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Foto</label>
                                                <input type="text" class="form-control" name="foto" value="<?=$mascota["foto"]?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Descripcion</label>
                                                <input type="text" class="form-control" name="descripcion" value="<?=$mascota["descripcion"]?>">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Tipo</label>
                                                <input type="text" class="form-control" name="tipo" value="<?=$mascota["tipo"]?>">
                                            </div>

                                            <button type="submit" class="btn btn-primary">Modificar Producto</button>

                                            </form>
                                        </div>
                                    </div>

                                
                                
                                </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            <?php endforeach?>
                
        </div>
    </div>

</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
</body>
</html>