<?php
	//	Instruksi Kerja Nomor 1.
	// Baris komentar: fungsi hitung_tagihan_awal adalah kelompok dari varibel harga dan jumlah barang yang dibeli yang dimana untuk total tagihan barang yang dibeli dengan mengkalikan harga barang dengan jumlah barang tersebut dan fungsi return akan mengembalkan nilai dari tagihan pertama
	
	function hitung_tagihan_awal($jumlahPesanan){
		$total_tagihan = (90000 * $jumlahPesanan);
		return $total_tagihan;
	}

	//	Instruksi Kerja Nomor 2.
	//	Variabel lokasi berisi data kota lokasi restoran dalam bentuk array.
    $lokasi = array("Jakarta", "Bogor", "Depok", "Tangerang", "Bekasi");

	//	Instruksi Kerja Nomor 3.
	//	Mengurutkan array lokasi sesuai abjad A-Z.
	sort($lokasi);


	//	Instruksi Kerja Nomor 4.
	//	Variabel untuk menyimpan harga satuan bento cake.
	$hargaSatuan = [90000];

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Form Pemesanan Bento Cake</title>
		<!-- Instruksi Kerja Nomor 5. -->
		<!-- Menghubungkan dengan library/berkas CSS. -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	</head>
	
	<body>
	<div class="container border">
		<!-- Menampilkan judul halaman -->
		<h3>Form Pemesanan Bento Cake</h3>
		
		<!-- Instruksi Kerja Nomor 6. -->
		<!-- Menampilkan logo restoran -->
		<img src="logo.jpg">
		
		<!-- Form untuk memasukkan data pemesanan. -->
		<form action="index.php" method="post" id="formPemesanan">
			<div class="row">
				<!-- Masukan data nama pelanggan. Tipe data text. -->
				<div class="col-lg-2"><label for="nama">Nama Pelanggan:</label></div>
				<div class="col-lg-2"><input type="text" id="nama" name="nama"></div>
			</div>
			<div class="row">
				<!-- Masukan data nomor HP pelanggan. Tipe data number. -->
				<div class="col-lg-2"><label for="nomor">Nomor HP:</label></div>
				<div class="col-lg-2"><input type="number" id="noHP" name="noHP" maxlength="16"></div>
			</div>
			<div class="row">
				<!-- Masukan data jumlah pesanan. Tipe data number. -->
				<div class="col-lg-2"><label for="nomor">Jumlah Pesanan:</label></div>
				<div class="col-lg-2"><input type="number" id="jumlahPesanan" name="jumlahPesanan" maxlength="4"></div>
			</div>
			<div class="row">
				<!-- Masukan pilihan lokasi lokasi resto. -->
				<div class="col-lg-2"><label for="tipe">Lokasi Pengiriman:</label></div>
				<div class="col-lg-2">
					<select id="lokasi" name="lokasi">
					<option value="">- Pilih lokasi -</option>
					<?php
						//	Instruksi Kerja Nomor 7.
						//	Menampilkan dropdown pilihan daerah pengiriman berdasarkan data pada array lokasi menggunakan perulangan.
						foreach ($lokasi as $lok) {
							echo "<option>$lok</option>";
						} 
					
									
					?>	
					</select>
				</div>
			</div>
			<div class="row">
				<!-- Tombol Submit -->
				<div class="col-lg-2"><button class="btn btn-primary" type="submit" form="formPemesanan" value="Pesan" name="Pesan">Pesan</button></div>
				<div class="col-lg-2"></div>		
			</div>
		</form>
	</div>
	<?php
		//	Kode berikut dieksekusi setelah tombol Hitung ditekan.
		if(isset($_POST['Pesan'])) {
			
			//	Variabel $dataPesanan berisi data-data pemesanan dari form dalam bentuk array.
			$dataPesanan = array(
				'nama' => $_POST['nama'],
				'noHP' => $_POST['noHP'],
				'jumlahPesanan' => $_POST['jumlahPesanan'],
				'lokasi' => $_POST['lokasi']
			);

			$lokasi = $_POST['lokasi'];
			$noHP = $_POST['noHP'];
			$nama = $_POST['nama'];
			$jumlahPesanan = $_POST['jumlahPesanan'];

			//	Variabel berisi path file data.json yang digunakan untuk menyimpan data pemesanan.
			$berkas = "json/data.json";
			
			//	Mengubah data pemesanan yang berbentuk array PHP menjadi bentuk JSON.
			$dataJson = json_encode($dataPesanan, JSON_PRETTY_PRINT);
			
			//	Instruksi Kerja Nomor 8.
			//	Menyimpan dan membaca data pemesanan yang berbentuk JSON
			file_put_contents("json/data.json", json_encode($dataJson));
			$dataJson = file_get_contents("json/data.json");
			
			//	Mengubah data pemesanan dalam format JSON ke dalam format array PHP.
			$dataPesanan = json_decode($dataJson, true);

			//	Variabel $tagihanAwal berisi nilai tagihan awal (sebelum ongkir) yang dihitung dengan menggunakan fungsi hitung_tagihan_awal().
			$tagihanAwal = hitung_tagihan_awal($jumlahPesanan, $hargaSatuan);

			//	Instruksi Kerja Nomor 9.
			//	Menghitung ongkos kirim berdasarkan lokasi dengan kontrol percabangan.

			if ($lokasi == "Tangerang") {
				$ongkir = 5000;
			} elseif ($lokasi == "Bogor") {
				$ongkir = 10000;
			} else {
				$ongkir = 0;
			} 

			// Instruksi Kerja Nomor 10.
			//	Variabel $totalTagihan berisi nilai total tagihan yang didapat dari nilai tagihan awal ditambah ongkir.
			

			$totalTagihan = ($tagihanAwal + $ongkir);
			
			//	Menampilkan data pemesanan dan hasil perhitungan diskon dan tagihan.
			echo "
				<br/>
				<div class='container'>
					<div class='row'>
						<!-- Menampilkan nama pelanggan. -->
						<div class='col-lg-2'>Nama Pelanggan:</div>
						<div class='col-lg-2'>".$nama."</div>
					</div>
					<div class='row'>
						<!-- Menampilkan nomor HP pelanggan. -->
						<div class='col-lg-2'>Nomor HP:</div>
						<div class='col-lg-2'>".$noHP."</div>
					</div>
					<div class='row'>
						<!-- Menampilkan jumlah kotak pesanan. -->
						<div class='col-lg-2'>Jumlah Pesanan:</div>
						<div class='col-lg-2'>".$jumlahPesanan." box</div>
					</div>
					<div class='row'>
						<!-- Menampilkan lokasi lokasi restoran. -->
						<div class='col-lg-2'>Lokasi Pengiriman:</div>
						<div class='col-lg-2'>".$lokasi."</div>
					</div>
					<div class='row'>
						<!-- Menampilkan tagihan awal (sebelum diskon). -->
						<div class='col-lg-2'>Tagihan Awal:</div>
						<div class='col-lg-2'>Rp".number_format($tagihanAwal, 0, ".", ".").",-</div>
					</div>
					<div class='row'>
						<!-- Menampilkan tarif pemesanan. -->
						<div class='col-lg-2'>Ongkos Kirim:</div>
						<div class='col-lg-2'>Rp".number_format($ongkir, 0, ".", ".").",-</div>
					</div>
					<div class='row'>
						<!-- Menampilkan tagihan akhir (setelah diskon). -->
						<div class='col-lg-2'>Total Tagihan:</div>
						<div class='col-lg-2'>Rp".number_format($totalTagihan, 0, ".", ".").",-</div>
					</div>
			</div>
			";
		}
	?>
	</body>
</html>