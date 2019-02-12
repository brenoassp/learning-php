<!-- 
	Product Inventory Project - Create an application which manages an inventory of products. 
	Create a product class which has a price, id, and quantity on hand. Then create an inventory 
	class which keeps track of various products and can sum up the inventory value. 
-->

<?php 
	
	class Product
	{
		private $id;
		private $price;
		private $quantity;

	    public function __construct($id, $price, $quantity)
	    {
	        $this->id = $id;
	        $this->price = $price;
	        $this->quantity = $quantity;
	    }

	    public function __toString(){
	    	return 'id: ' . $this->id . ' price: ' . $this->price . ' quantity: ' . $this->quantity;
	    }

	    /**
	     * @return float
	     */
	    public function getPrice()
	    {
	        return $this->price;
	    }

	    /**
	     * @return int
	     */
	    public function getQuantity()
	    {
	        return $this->quantity;
	    }
	}

	class Inventory
	{
		private $products;

	    public function __construct()
	    {
	        $this->products = array();
	    }

	    public function add_product($product){
	    	array_push($this->products, $product);
	    }

	    public function total_value(){
	    	$total = 0.0;
	    	foreach ($this->products as $product) {
	    		$total += $product->getPrice() * $product->getQuantity();
	    	}
	    	return $total;
	    }
	}

	$inventory = new Inventory();
	$product_1 = new Product(1, 2.5, 10);
	$product_2 = new Product(2, 7, 4);
	$product_3 = new Product(3, 3, 6);
	$inventory->add_product($product_1);
	$inventory->add_product($product_2);
	$inventory->add_product($product_3);
	echo $product_1;
	echo "<br>";
	echo $product_2;
	echo "<br>";
	echo $product_3;
	echo "<br>";
	echo "Inventory total value: " . $inventory->total_value();

 ?>
