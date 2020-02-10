<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
	$array=array("nusrat","songita","khan");
	echo "The array is: ";

	foreach($array as $a){
		echo " ".$a;
	}

	?>


	<form method="post">

	search:	<input type="text" name="input"><br>
		<input type="submit" value="submit" name="submit">
	</form>

	<?php 


		if(isset($_POST["submit"])){
			$c=1;
			$i=0;

			foreach($array as $a){
				if($a==$_POST["input"]){
			
				$c=0;
				break;
				}
				$i++;

			}
			if($c==0){
			echo "found in ".$i;
			}
			else{
				echo "not found";
			}

		}

	 ?>
</body>
</html>