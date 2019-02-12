<!-- Shape Area and Perimeter Classes - Create an abstract class called Shape and then inherit 
from it other shapes like diamond, rectangle, circle, triangle etc. Then have each class override 
the area and perimeter functionality to handle each shape type.  -->

<?php 
	abstract class Shape
	{
		abstract public function getArea();
		abstract public function getPerimeter();
	}

	class Diamond extends Shape
	{
		private $base;
		private $height;
		private $side;

	    public function __construct($base, $height, $side)
	    {
	        $this->base = $base;
	        $this->height = $height;
	        $this->side = $side;
	    }

	    public function getArea(){
	    	return $this->base * $this->height / 2;
	    }

	    public function getPerimeter(){
	    	return 4 * $this->side;
	    }
	}

	class Rectangle extends Shape
	{
		private $width;
		private $length;

	    public function __construct($width, $length)
	    {
	        $this->width = $width;
	        $this->length = $length;
	    }

	    public function __toString(){
	    	return "Rectangle. width: " . $this->width . " length: " . $this->length;
	    }

	    public function getArea(){
	    	return $this->width * $this->length;
	    }

	    public function getPerimeter(){
	    	return 2 * $this->width + 2 * $this->length;
	    }
	}

	class Circle extends Shape
	{
		private $radius;

	    public function __construct($radius)
	    {
	        $this->radius = $radius;
	    }

	    public function __toString(){
	    	return "Circle. radius: " . $this->radius;
	    }

	    public function getArea(){
	    	return pi() * pow($this->radius, 2);
	    }

	    public function getPerimeter(){
	    	return 2 * pi() * $this->radius;
	    }
	}

	class Triangle extends Shape
	{
		private $side_a;
		private $side_b;
		private $side_c;

	    public function __construct($side_a, $side_b, $side_c)
	    {
	        $this->side_a = $side_a;
	        $this->side_b = $side_b;
	        $this->side_c = $side_c;
	    }

	    public function __toString(){
	    	return "Triangle. a: " . $this->side_a . " b: " . $this->side_b . " c: " . 
	    		$this->side_c;
	    }

	    public function getArea(){
	    	$p = $this->getPerimeter() / 2;
	    	return sqrt($p * ($p - $this->side_a) * ($p - $this->side_b) * ($p - $this->side_c));
	    }

	    public function getPerimeter(){
	    	return $this->side_a + $this->side_b + $this->side_c;
	    }
	}

	$tri = new Triangle(2,3,4);
	echo $tri;
	echo "<br>";
	echo "Area " . $tri->getArea();
	echo "<br>";
	echo "Perimeter " . $tri->getPerimeter();

	echo "<br>";
	echo "<br>";

	$circ = new Circle(5);
	echo $circ;
	echo "<br>";
	echo "Area " . $circ->getArea();
	echo "<br>";
	echo "Perimeter " . $circ->getPerimeter();

	echo "<br>";
	echo "<br>";

	$rec = new Rectangle(2, 5);
	echo $rec;
	echo "<br>";
	echo "Area " . $rec->getArea();
	echo "<br>";
	echo "Perimeter " . $rec->getPerimeter();
?>