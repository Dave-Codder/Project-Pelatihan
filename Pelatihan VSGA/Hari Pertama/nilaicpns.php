<?php
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$nilai3 = $_POST['nilai3'];


// Percabangan tipe 1
if($nilai1>=156 && $nilai2>=80 && $nilai3>=65){
	echo "Lulus Passing Grade <br/> ";
} 	else {
	echo "Tidak Lulus Passing Grade <br/>";
}


// Percabangan tipe 2
// if($nilai1>=156 && $nilai2>=80 && $nilai3>=65){
// 	echo "Lulus Passing Grade <br/> ";
// } 	else {
// 	echo "Tidak Lulus Passing Grade <br/>";
// }

echo "<br/> <a href=http://localhost/training/Program%20Cek%20Kelulusan%20CPNS.php> <button> Back </button></a>";
echo "<br/> <a href=http://localhost/training/> <button> Back Home </button></a>";
?>