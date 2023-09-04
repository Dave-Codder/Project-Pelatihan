<html>
<head>
	<title>Login Siswa Polman BABEL</title>
</head>
<body>
	<form action="data.php" method="POST">
		Nama : <input type="text" name="nama">
		<br/>
		NIM/NPM : <input type="number" name="nim">
		<br/>
		Asal Daerah : <select name="asal">
			<option value="Pilih">Pilih</option>
			<option value="Pangkal Pinang">Pangkal Pinang</option>
			<option value="Kab Bangka">Kab Bangka</option>
			<option value="Kab. Bangka Selatan">Kab. Bangka selatan</option>
			<option value="Kab Bangka Tengah">Kab Bangka Tengah</option>
			<option value="belitung">Belitung</option>		
		</select>
		<br/>
		Prodi : <select name="prodi">
			<option value="Pilih">Pilih</option>
			<option value="D3 IT">D3 IT</option>
			<option value="D3 Ekonomi">D3 Ekonomi</option>
			<option value="S1 Hukum">S1 Hukum</option>
		</select>
		<br/>
		Jenis Kelamin :
			<input type="radio" name="jk" value="Laki - Laki ">Laki - Laki 
			<input type="radio" name="jk" value="Wanita">Wanita
		<br/>
		Status :
			<input type="radio" name="st" value="Belum Menikah">Belum Menikah
			<input type="radio" name="st" value="Menikah">Menikah
		<br/>
		<input type="submit" value="SIMPAN" id="simpan">
	</form>

</body>
</html>