<!DOCTYPE html>b
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		Enter the amount :<input type="number" name="amount"><br>
		
		<input type="submit" value="submit" name="submit">
	</form>

	<?php 
		if(isset($_POST["submit"])){
			$a=$_POST["amount"]*0.15;
			echo "The vat is :".$a;
		}

	 ?>
</body>
</html>