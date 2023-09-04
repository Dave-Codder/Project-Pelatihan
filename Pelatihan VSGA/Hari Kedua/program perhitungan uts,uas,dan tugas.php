<?php
$nama = ["ali", "dono", "dini", "deni", "suci"];
$uts = [80, 100, 100, 70, 90];
$uas = [100, 70, 90, 85, 80];
$tugas = [100, 90, 65, 90, 40];

function hitung($uts, $uas, $tugas) {
    $jumlah = [];
    for ($i = 0; $i < count($uts); $i++) {
        $nilai = ($uts[$i]*40/100) + ($uas[$i]*30/100) + ($tugas[$i]*30/100);
        $jumlah[] = $nilai;
    }
    return $jumlah;
}

$hasil = hitung($uts, $uas, $tugas);

function minmax($hasil) {
    $min = min($hasil);
    $max = max($hasil);
    echo "Total nilai tertinggi adalah " . $max . "<br>";
    echo "Total nilai terendah adalah " . $min;
}

for ($i = 0; $i < count($nama); $i++) {
    echo $i + 1 . ". " . $nama[$i] . " : UTS = " . $uts[$i] . ", UAS = " . $uas[$i] . ", Tugas = " . $tugas[$i] . ", Total = " . $hasil[$i] . "<br/>";
}

minmax($hasil);
?>