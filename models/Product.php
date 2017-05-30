<?php
include_once("Database.php");
class Product {
	public $name;
	public $price;
	public $category;
	public $description;

	public function __construct($name, $price, $category, $description) {
      	$this->name = $name;
				$this->price = $price;
	    	$this->category = $category;
	    	$this->description = $description;
  }
	//mysqli->insert_id
	// return rows

	public function save(){
		$db = new Database();
		$sql = "INSERT INTO Producto(nombre, precio, categoria_id, descripcion) VALUES(
			'".$this->name."',
			$this->price,
	    $this->category,
			'".$this->description."'
		)";
		$db->query($sql);
		$lastId = (int)$db->mysqli->insert_id;
		echo $lastId;
		$db->close();
		return true;
		}
	static function get(){
		$sql ="SELECT * FROM Producto";
		$db = new Database();
		if ($rows = $db->query($sql)){
			return $rows;
		}
		return false;

	}

	/*para obtener las bebidas */
	static function getPizzas(){
		$sql ="SELECT * FROM Producto where categoria_id=1";
		$db = new Database();
		if ($rows = $db->query($sql)){
			return $rows;
		}
		return false;

	}
	static function getPostres(){
		$sql ="SELECT * FROM Producto where categoria_id=2";
		$db = new Database();
		if ($rows = $db->query($sql)){
			return $rows;
		}
		return false;

	}
	static function getEspecialidades(){
		$sql ="SELECT * FROM Producto where categoria_id=3";
		$db = new Database();
		if ($rows = $db->query($sql)){
			return $rows;
		}
		return false;

	}
	static function getBebidas(){
		$sql ="SELECT * FROM Producto where categoria_id=4";
		$db = new Database();
		if ($rows = $db->query($sql)){
			return $rows;
		}
		return false;

	}
	static function getEntradas(){
		$sql ="SELECT * FROM Producto where categoria_id=5";
		$db = new Database();
		if ($rows = $db->query($sql)){
			return $rows;
		}
		return false;

	}

	static function getPaquetes(){
		$sql ="SELECT * FROM Producto where categoria_id=6";
		$db = new Database();
		if ($rows = $db->query($sql)){
			return $rows;
		}
		return false;

	}


	static function setSelecter($id){
		$sql = "UPDATE Producto SET nombre='".$this->name."',precio=$this->price, categoria_id=$this->category, descripcion='".$this->description."' WHERE id = $id";
		$db = new Database();
		if ($rows = $db->query($sql)){
			return $rows;
		}
		return false;

	}


	public function update(){
		$sql = "UPDATE Producto SET
				nombre='".$this->name.
				"',precio=$this->price,
				categoria_id=$this->category,
				descripcion='".$this->description.
					"' WHERE id = $this->id";
		$db = new Database();
		if ($rows = $db->query($sql)){
			$db->close();
			return $rows;
		}
		return false;
	}

	public function delete(){
		$db = new Database();
		echo $this->id;
		$sql = "DELETE FROM Producto WHERE id= $this->id";
		$db->query($sql);
		$db->close();
		return true;
	}


}
?>
