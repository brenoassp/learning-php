<!-- Fibonacci Sequence - Enter a number and have the program generate the 
	Fibonacci sequence to that number or to the Nth number. -->

<?php 
	function fibonacci_generator($n){
		if ($n == 1) {
			return 0;
		}
		if ($n == 2) {
			return 1;
		}
		return fibonacci_generator($n-1) + fibonacci_generator($n-2);
	}

	function fibonacci_generator_sequence($length){
		$fib_sequence = array();
		for ($i = 1; $i <= $length; $i++) {
			array_push($fib_sequence, fibonacci_generator($i));
		}
		return $fib_sequence;
	}
?>

<form action="fibonacci_sequence.php" method="post">
	Fibonacci sequence length: <input type="text" name="sequence_length">
	<input type="submit" value="submit">
</form>

<?php 
	$result = fibonacci_generator_sequence((int)$_POST["sequence_length"]);
	for ($i = 0; $i < count($result); $i++) {
		echo $result[$i];
		echo " ";
	}
?>