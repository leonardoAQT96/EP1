<?php

if( isset($_POST['funcion']) ) {
	//echo 'Hola AJAX '.$_POST['funcion'];

	switch ($_POST['funcion']) {
		case 'insertarProductos':
			require_once("../models/Product.php");
			require_once("../models/Cleaner.php");

			$productos = json_decode($_POST['productos']);

			foreach ($productos as $item) {
				$nombre = Cleaner::cleanInput($item->_nombre);
				$categoria =(int)Cleaner::cleanInput($item->_categoria);
				$producto = new Product($item->_nombre,$item->_precio,$item->_categoria,$item->_descripcion);
				$producto->save();
			}
			break;
		case 'funcionUpdate':
			require_once("../models/Product.php");
			require_once("../models/Cleaner.php");

			$productos = json_decode($_POST['productos']);

			foreach ($productos as $item) {
				$id =  Cleaner :: cleanInput($item->_id);
				$nombre = Cleaner::cleanInput($item->_nombre);
				$categoria =(int)Cleaner::cleanInput($item->_categoria);
				$producto = new Product($item->_id,$item->_nombre,$item->_precio,$item->_categoria,$item->_descripcion);
				$producto->update();
			}
			break;
			case 'funcionUpdate':
				require_once("../models/Product.php");
				require_once("../models/Cleaner.php");

				$productos = json_decode($_POST['productos']);

				foreach ($productos as $item) {
					$id =  Cleaner :: cleanInput($item->_id);
					$nombre = Cleaner::cleanInput($item->_nombre);
					$categoria =(int)Cleaner::cleanInput($item->_categoria);
					$producto = new Product($item->_id,$item->_nombre,$item->_precio,$item->_categoria,$item->_descripcion);
					$producto->update();
				}
				break;
			case 'eliminarProducto':
				require_once("../models/Product.php");
				require_once("../models/Cleaner.php");
				$producto = json_decode($_POST['productos']);
				$product = new Product($producto,"",0,0,"");
				$product->delete();

				break;
	}

} else {
	include_once("../../models/Product.php");
	$productos = Product::get();
	$pizzas = Product::getPizzas();
	$postres = Product::getPostres();
	$especialidades = Product::getEspecialidades();
	$bebidas = Product::getBebidas();
	$entradas = Product::getEntradas();
	$paquetes = Product::getPaquetes();
}
?>
