<?php
$nilai = $_POST['nilai1'];

// Percabangan tipe 1
// if($nilai>=80){
// 	echo "Predikat Anda = A <br/> ";
// }	elseif($nilai >=75 && $nilai <80){
// 	echo "Predikat Anda = B <br/> ";
// } 	elseif($nilai >=60 && $nilai <75){
// 	echo "Predikat Anda = C <br/> ";
// } 	elseif($nilai <=60){
// 	echo "Predikat Anda = D <br/> ";
// }	else($nilai <=60){
// 	echo "D";
// }

// Percabangan tipe 2
if($nilai>=80){
	echo "A";
} 	elseif ($nilai >=75){
	echo "B";
}	elseif ($nilai >=60){
	echo "C";
} 	else {
	echo "D";
}


echo "<br/> <a href=http://localhost/training/konversi%20nilai.php> <button> Back </button></a>";
echo "<br/> <a href=http://localhost/training/> <button> Back Home </button></a>";
?>