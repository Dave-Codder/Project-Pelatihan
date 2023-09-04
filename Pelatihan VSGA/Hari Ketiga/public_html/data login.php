<?php
$gm = $_POST['gmail'];
$psw = $_POST['password'];



function datalogin($gm, $psw){
	if ($gm = true){
		echo "<br/> Gmail : ". $gm;
	} else {
		echo "Gmail gagal di load <br/>";
	}

	if ($psw = true){
		echo "<br/> Password : ". $psw;
	} else {
		echo "password gagal di load";
	}
};

echo datalogin($gm, $psw);



?>