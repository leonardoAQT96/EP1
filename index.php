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
    <link rel="stylesheet" href="./assets/css/style.css">
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
            <div class="headerLogo" onClick="window.location='./index.php'"></div>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="./views/admin/productos.php" class="tama">administrador</a></li>
            </ul>
          <center>
            <ul class="nav navbar-nav" style="margin-top: 4%; margin-left: 31%">
              <li><a href="#" class="tama">Menú</a></li>
							<li><a href="./views/menu/carrito.php" class="tama">Carrito</a></li>
            </ul>
					</center>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </header>

    <script src="./assets/js/jssor.slider-23.1.6.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            jssor_1_slider_init = function() {

                var jssor_1_SlideshowTransitions = [
                  {$Duration:1200,$Opacity:2}
                ];

                var jssor_1_options = {
                  $AutoPlay: 1,
                  $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                  },
                  $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                  },
                  $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                  }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                /*responsive code begin*/
                /*remove responsive code if you don't want the slider scales while window resizing*/
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 600);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                /*responsive code end*/
            };
        </script>

        <div id="jssor_1" class="possSli" >
            <!-- Loading Screen -->
            <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">
                <div>
                    <img data-u="image" src="./public/img1.jpg" />
                </div>
                <div>
                    <img data-u="image" src="./public/img2.jpg" />
                </div>
                <div>
                    <img data-u="image" src="./public/img3.png" />
                </div>
                <a data-u="any" href="https://www.jssor.com" style="display:none">js slider</a>
            </div>
            <!-- Bullet Navigator -->
            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                <!-- bullet navigator item prototype -->
                <div data-u="prototype" style="width:16px;height:16px;"></div>
            </div>
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora12l" style="top:0px;left:0px;width:30px;height:46px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora12r" style="top:0px;right:0px;width:30px;height:46px;" data-autocenter="2"></span>
        </div>
        <script type="text/javascript">jssor_1_slider_init();</script>
        <!-- #endregion Jssor Slider End -->

  <div class="row vertical-center" >
    <div class="col-md-5" >
          <img src="./public/especialidades.jpg" alt="" class="sizeImg" onclick="window.location='./views/	menu/especialidades.php'">
    </div>
    <div class="col-md-5">
        <img src="./public/pizzas.jpg" alt="" class="sizeImg" onclick="window.location='./views/menu/pizzas.php'">
    </div>
  </div>

  <div class="row vertical-center">
    <div class="col-md-5" >
      <img src="./public/paquetes.jpg" alt="" class="sizeImg" onclick="window.location='./views/menu/paquetes.php'">
    </div>
    <div class="col-md-5">
      <img src="./public/entradas.jpg" alt="" class="sizeImg" onclick="window.location='./views/menu/entradas.php'">
    </div>
  </div>

  <div class="row vertical-center">
    <div class="col-md-5 " >
      <img src="./public/postres.jpg" alt="" class="sizeImg" onclick="window.location='./views/menu/postres.php'">
    </div>
    <div class="col-md-5">
      <img src="./public/bebidas.jpg" alt="" class="sizeImg" onclick="window.location='./views/menu/bebidas.php'">
    </div>
  </div>
</html>
