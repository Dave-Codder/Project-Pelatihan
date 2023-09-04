<?php

$nama = ["Dono", "Dini", "DUDU"];
$buah = array("Apel","Mangga","Jeruk");

echo "Menggunakan Foreach";
echo "<ol>";
foreach ($nama as $nm) {
	echo "<li>$nm</li>";
}

echo "</ol>";

echo "Menggunakan for <br/>";
for ($i=0;$i<count($nama);$i++){
	echo $nama[$i];
}




?>