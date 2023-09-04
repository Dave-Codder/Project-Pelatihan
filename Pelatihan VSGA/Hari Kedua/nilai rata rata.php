<?php
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$tugas = $_POST['tugas'];


function nilaiakhir2($uts, $uas, $tugas){
	$nilaiakhir = ($uts * 40/100) + ($uas * 30/100) + ($tugas * 40/100)	;
	return $nilaiakhir;
}

$nilaiakhir = nilaiakhir2($uts, $uas, $tugas);

echo "Nilai UTS = ". $uts . "<br/>";
echo "Nilai UAS = ". $uas . "<br/>";
echo "Nilai Tugas = ". $tugas . "<br/>";
echo "Nilai Total = ". $nilaiakhir ."<br/>";

function indeks($nilaiakhir){
	if ($nilaiakhir >= 80){
		echo "Hasil Grade = A";
	} elseif ($nilaiakhir >= 75){
		echo "Hasil Grade = B";
	} elseif ($nilaiakhir >= 60){
		echo "Hasil Grade = C";
	} elseif ($nilaiakhir <= 60){
		echo "Hasil Grade = D";
	}

}

echo indeks($nilaiakhir);
echo "<br/><a href=http://localhost/Hari%20Kedua/Nilai%20Rata%20Rata.html><button> Back </button></a>";
?>