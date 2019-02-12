<!-- Enter a number and have the program generate PI up to that many decimal 
	places. Keep a limit to how far the program will go. -->

<form action="find_pi_nth_digit.php" method="post">
	Decimal Places: <input type="text" name="decimal_places">
	<input type="submit" value="submit">
</form>

<h1>Result: 
	<?php 
		if ((int)$_POST["decimal_places"] >= 0 && (int)$_POST["decimal_places"] <= 8) {
			$pi_value = pi();
			$multiplicador = pow(10, (int)$_POST["decimal_places"]);
			$pi_with_n_decimal_places = intval($pi_value * $multiplicador) / $multiplicador;
			echo $pi_with_n_decimal_places;
		}else{
			echo "Decimal places should be x | 0 <= x <= 8";
		}
	?>
</h1>