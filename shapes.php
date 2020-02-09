<!DOCTYPE html>
<?php 
	for($i=0;$i<3;$i++){

		for($j=0;$j<=$i;$j++){
			echo "* ";
		}

		echo "<br>";
	}

	echo"<br> <br>";

	for($i2=3;$i2>0;$i2--){
		$c =1;
		for($j2=0;$j2<$i2;$j2++){
			echo $c;
			$c++;
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