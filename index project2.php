<!DOCTYPE html>
<html>
<head> 
<meta charset = "UTF-8">
<title> Title of document </title>
</head>
<body> 
<form> 
<input type = "text" name="num1" placeholder = "Number1">
<input type = "text" name = "num2" placeholder = "Number2">
<select name = "operator">
<option>None </option>
<option>Add </option>
<option>Subtract </option>
<option> Multipily </option>
<option > Divide </option>
 </select>
 <br>
 <button  type = "submit" name = "submit" value="submit"> Caculate </button>
</form>
<p> The anwser is :</p>
<?php
if(isset($_GET['submit'])){
	$result1 = $_GET['num1'];
	$result2 = $_GET['num2'];
	$operator = $_GET['operator'];
	switch($operator){
		case "None":
			echo "You need to select a method!";
		break;
		case "Add":
			echo $result1 + $result2;
		break;
		case "Subtract":
			echo $result1 - $result2;
		break;
		case "Multipily":
			echo $result1 * $result2;
		break;
		case "Divide":
			echo $result1 / $result2;
		break;
		
		
	}
	
	
}
?>
</body>
 </html>