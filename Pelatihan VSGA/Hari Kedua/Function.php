<?php
// membuat fungsi 1
function perkenalan($nama, $salam, $alamat){
	echo $salam.", ";
	echo "Perkenalkan, nama saya ".$nama."<br/>";
	echo "Saya Beralamat dari ".$alamat."<br/>";
	echo "Senang berkenalan dengan anda<br/>";
}

// memanggil fungsi yang sudah dibuat
perkenalan("Muhardian", "HI", "sungailiat");

	echo "<hr>";


// Variabel ke 2
	$saya = "Indry";
	$ucapanSalam = "Selamat pagi";
	$tinggal = "Pangkal-Pinang";

	// memanggilya lagi
	perkenalan($saya, $ucapanSalam, $tinggal);

	echo "<hr>";

// membuat fungsi 2
function kenalan($nama2, $salam2, $umur, $sekolah){
	echo $salam2. ", ";
	echo "nama gua ".$nama2.". umur saya ".$umur."<br/>";
	echo "asal sekolah gua ".$sekolah;
}

kenalan("Adi", "Hallo","19", "SMKN 2 Pangkal pinang");

echo "<hr/>";


 $nama3 = "Agung";
 $umur2= "18";
 $salam3 = "ya";
 $sekolah2= "SMAN 1 Pangkal-Pinang";

 kenalan($nama3, $salam3, $umur2, $sekolah2);


?>