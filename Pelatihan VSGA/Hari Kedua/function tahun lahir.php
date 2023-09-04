<?php 
 // membuat fungsi
 function hitungUmur($thn_Lahir, $thn_sekarang){
 	$umur = $thn_sekarang - $thn_Lahir;
 	return $umur;
 }

 function perkenalan($nama, $salam="Assalamualaikum"){
 	echo $salam. ", <br/>";
 	echo "Perkenalkan, nama saya ".$nama."<br/>";
 	// memanggil fungsi lain
 	echo "Saya berusia ". hitungUmur(1994, 2015). " tahun <br/>";
 	echo "Senang berkenalan dengan anda<br/>";
 }

 // memanggil funtion
 perkenalan("Ardianta");
?>

