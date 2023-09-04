<?php
$nilai = $_POST['nilai'];

if($nilai>=80){
	echo "Lulus";
}	else {
	echo "Tidak Lulus";
}	

echo "<br/> <a href=http://localhost/training/form%20cek%20kelulusan.php> <button> Back </button></a>";

?>