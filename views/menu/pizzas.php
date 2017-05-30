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
              <li><a href="./carrito.php" class="tama">Carrito</a></li>
            </ul>
          </center>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </header>


  <div class="col-xs-12">
    <h2 class ="white-text">Registrar nuevo pedido</h2>
    <?php
      $temporal = "";
    ?>

      <?php
        foreach ($pizzas as $producto) {
      ?>
        <div class="col-md-3">
          <form id="<?php echo $producto['id']; ?>" action="index.html" method="post">
            <span><?php echo $producto['descripcion']; ?></span>
            <input type="text" class="col-xs-12" name="" value="<?php echo $producto['id']; ?>">
            <input type="number" id="cantidad" onchange="document.getElementById('cantidad').value=this.value" class="input col-xs-12">
            <button onclick="addToCart(
                                        <?php echo $producto['id']?>
                                      )" type="button" id="AddCart" class="col-xs-12 btn btn-alert">Agregar al carrito</button>
          </form>

        </div>
      <?php

        }
      ?>


    <br>

    <button type="button" class="form-control" id="guardar">Hacer pedido</button>
  </div>




  <!-- container -->
  <script src="./../../assets/js/script.js" charset="utf-8"></script>
  <script type="text/javascript">
  let addCart = document.querySelector("#addCart");
    let guardar = document.querySelector("#guardar");
    let carrito = new Array()
    function addToCart(value) {
      let idProducto = value;
      let cantidad = document.querySelector("#cantidad");

      if(cantidad.value) {
        console.log("idProducto" +idProducto+ " cantidad: "+cantidad.value)
        carrito.push(idProducto)
      }else{
        console.log("no se hac")
      }


      $(".input").val("");
    }
    if(guardar) {
      guardar.addEventListener('click',function(){
        console.log(carrito)
      });
    }


  </script>
</body>
</html>
