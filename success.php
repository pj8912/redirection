<?php

if(isset($_POST['sbtn'])){
	$name = $_POST['flname'];
	echo $name;
}
else{
	header("Location: index.php");
	exit();
}


?>

