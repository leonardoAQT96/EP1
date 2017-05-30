<?php
	include_once("./../../controllers/ProductsController.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pizza</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="  crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- my css file -->
    <link rel="stylesheet" href="./../../assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- header -->
    <header>
      <nav class="navbar">
        <div class="container-fluid ">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="headerLogo" onClick="window.location='./../../index.php'"></div>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <center>
              <ul class="nav navbar-nav" style="margin-top: 4%; margin-left: 31%">
                <li><a href="./../../index.php" class="tama">Menú</a></li>
							
              </ul>
  					</center>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>

    <div class="col-mx-12 ">
      <div class="col-md-2"></div>
      <div class="col-md-8" style="margin: 10px">
      <div class="jumbotron">
        <table class="table table-striped table-hover ">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Precio</th>
              <th>Actualizar</th>
              <th>Eliminnar</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($productos as $producto) {
            ?>
          <tr class="active">
            <td><?php echo $producto['id']; ?></td>
            <td><?php echo $producto['nombre']; ?></td>
            <td><?php echo $producto['descripcion']; ?></td>
            <td>$ <?php echo $producto['precio']; ?></td>
            <td class="vertical-center">
              <button type="button" class="btn btn-outline-success glyphicon glyphicon-refresh" data-toggle="modal" data-target="#ModalUpdate-<?php echo $producto['id']; ?>"></button>
            </td>
            <div class="container">
              <div class="modal fade" id="ModalUpdate-<?php echo $producto['id']; ?>" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Modificar producto</h4>
                    </div>
                    <div class="modal-body">
                          <div class="">
                            <h2 class ="white-text" id="edit-<?php echo $producto['id']; ?>">Modificar producto</h2>
                            <input  type="text" class="form-control hidden" id="idU-<?php echo $producto['id']; ?>")>
                              <input type="text" class="form-control" id="nombre-<?php echo $producto['id']; ?>" value="<?php echo $producto['nombre']; ?>"><br>
                              <input type="number" class="form-control" id="precio-<?php echo $producto['id']; ?>" value="<?php echo $producto['precio']; ?>"><br>
                                <select id="categoria-<?php echo $producto['id']; ?>" class="form-control" name="" value="<?php echo $producto['categoria_id']; ?>">
                                <option value="1">Especialidades</option>
                                <option value="2">Pizzas</option>
                                <option value="3">Paquete</option>
                                <option value="4">Entradas</option>
                                <option value="5">Postres</option>
                                <option value="6">Bebidas</option>
                              </select><br>
                              <textarea class="form-control" id="descripcion-<?php echo $producto['id']; ?>" value="<?php echo $producto['descripcion']; ?>"></textarea>
                              <br>
                          </div>
                        </div>
                    <div class="modal-footer">
                      <button type="button" class="form-control btn-primary " data-dismiss="modal" id="actualizar-<?php echo $producto['id']; ?>">Guardar</button>
                      <br><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <td><button type="button" class="btn btn-outline-success glyphicon glyphicon-remove" id="eliminar-<?php echo $producto['id']; ?>" data-toggle="modal" data-target="#ModalDelete-<?php echo $producto['id']; ?>"></button></td>
						<div class="container">
              <div class="modal fade" id="ModalDelete-<?php echo $producto['id']; ?>" role="dialog">
                <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Eliminar producto</h4>
                    </div>
                    <div class="modal-body">
                      <div class="">
                        <h5 class ="">Estás seguro de eliminar el producto: <?php echo $producto['nombre']; ?></h2>
                        <br>
												<input type="number" class="hidden" id="idE-<?php echo $producto['id']; ?>" name="" value="<?php echo $producto['id']; ?>">
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary " data-dismiss="modal" id="eliminar-<?php echo $producto['id']; ?>">Eliminar</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
					</tr>
          <?php
          }
        ?>
        </tbody>
      </table>
			<!-- ***************************************** script para poder actualizar ******************************************************************************-->
			<script src="./../../assets/js/script.js" charset="utf-8"></script>
			    <script type="text/javascript">
			        let actualizar = document.querySelector("#actualizar");
			        actualizar.addEventListener('click',function(){
								let id = document.querySelector("#idU");
				        let nombre = document.querySelector("#nombre");
				        let precio = document.querySelector("#precio");
				        let categoria = document.querySelector("#categoria");
				        let descripcion = document.querySelector("#descripcion");
				        let producto = new Producto(id.value,nombre.value,precio.value,categoria.value,descripcion.value);
				        let listaproductosU = new Array();
				        listaproductosU.push(producto);
				        let prod_upd = JSON.stringify(listaproductosU);
				        console.log(prod_upd);
				        $.ajax({
				          method: "POST",
				          url: "./../../controllers/ProductsController.php",
				          data: { productos: prod_upd, funcion: "funcionUpdate" }
				        })
				        .done(function() {
									location.reload(true);

				           alert( "Datos modificados ");
				         });
			    });

			//<!-- ***************************************** script para poder actualizar ******************************************************************************-->

							let eliminar = document.querySelector("#eliminar");
			        eliminar.addEventListener('click',function(){
							let id = document.querySelector("#idE");
							let productoElim = JSON.stringify(id.value);
							console.log(productoElim);
							$.ajax({
							  method: "POST",
							  url: "./../../controllers/ProductsController.php",
							  data: { productos: productoElim, funcion: "eliminarProducto" }
							})
							.done(function() {
							   alert("Producto Eliminado");

								 <?php
								 		$productos = Product::get();
								  ?>
							 });
							 location.reload(true);
			        });
					</script>
    </div>
    </div>
    <div class="col-md-2"></div>
  </div>

<!-- ***************************************** Modal para poder registrar un nuevo producto******************************************************************************-->
  <div class="container">
    <!-- Trigger the modal with a button -->
    <div class="col-md-7"></div>
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ModalRegister">Registrar nuevo producto</button>
    <!-- Modal Registrar-->
    <div class="modal fade" id="ModalRegister" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Registrar Producto</h4>
          </div>
          <div class="modal-body">
                <div class="">
                  <h2 class ="white-text">Registrar nuevo producto</h2>
                    <input type="text" class="form-control" id="nombre" value="" placeholder="Escribe el nombre del producto" required><br>
                    <input type="number" class="form-control" id="precio" value="" placeholder="Escribe el precio del producto " required><br>
                    <select id="categoria" class="form-control" name="" required>
            					<option value="1">Especialidades</option>
            					<option value="2">Pizzas</option>
            					<option value="3">Paquete</option>
                    	<option value="4">Entradas</option>
                      <option value="5">Postres</option>
                      <option value="6">Bebidas</option>
                    </select><br>
            				<textarea class="form-control" id="descripcion" ></textarea>
            				<br>

                </div>
              </div>
          <div class="modal-footer">
            <button type="button" class="form-control btn-primary " data-dismiss="modal" id="guardar">Guardar</button>
            <br><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>

        <script type="text/javascript">
          let guardar = document.querySelector("#guardar");
          guardar.addEventListener('click',function(){
          let nombre = document.querySelector("#nombre");
          let precio = document.querySelector("#precio");
  				let categoria = document.querySelector("#categoria");
          let descripcion = document.querySelector("#descripcion");
          let producto = new Producto(0,nombre.value,precio.value,categoria.value,descripcion.value);
  				let listaproductos = new Array();
  				listaproductos.push(producto);
  				let prod_inser = JSON.stringify(listaproductos);
  				console.log(prod_inser);
  				$.ajax({
  				  method: "POST",
  				  url: "./../../controllers/ProductsController.php",
  				  data: { productos: prod_inser, funcion: "insertarProductos" }
  				})
  				.done(function() {
  				   alert( "Datos guardados ");
  				 });
        location.reload(true);});
        </script>
      </body>
</html>
