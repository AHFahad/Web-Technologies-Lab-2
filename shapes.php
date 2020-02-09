<!DOCTYPE html>
<?php 
	for($i=0;$i<3;$i++){

		for($j=0;$j<=$i;$j++){
			echo "* ";
		}

		echo "<br>";
	}

	echo"<br> <br>";

	for($i=3;$i>0;$i--){
		$a =1;
		for($j=0;$j<$i;$j++){
			echo $a;
			$a++;
		}

		echo "<br>";
	}


	echo"<br> <br>";
	$n=65;
	for($i=0;$i<3;$i++){

		for($j=0;$j<=$i;$j++){
			echo Chr($n++)." ";

		}

		echo "<br>";
	}


 ?>