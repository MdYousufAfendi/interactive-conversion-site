<?php
 if($_SERVER['REQUEST_METHOD'] === "POST"){
 	if(empty($_POST['result'])){
 		echo "<h1 style='color:red'> Field empty</h1>";
 	}
 	else{
 	echo "<h1> Result is: ".$_POST['result'] . "</h1>";
 }
 }
 ?>