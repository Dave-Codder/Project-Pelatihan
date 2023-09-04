<?php
$nm = $_POST['nama'];
$ni = $_POST['nim'];
$as = $_POST['asal'];
$pr = $_POST['prodi'];
$jk = $_POST['jk'];
$st = $_POST['st'];

echo "Nama : $nm <br/>NIM/NPM : $ni <br/>Asal Daerah : $as";
echo "<br/> Selamat Anda Memilih Prodi : $pr";
echo "<br/> Jenis Kelamin : $jk";
echo "<br/> Status: $st";
echo "<br/> <a href= http://localhost/Hari%20Pertama/Latihan%20Registras%20Siswa.php><button> Kembali </button></a>";
echo "<br/> <a href= http://localhost/training><button> Kembali ke Database </button></a>"
?>