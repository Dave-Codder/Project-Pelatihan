<html>
<head>
	<title>Login Siswa Polman BABEL</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>

	<style>
		.body {
			background-color: gray;
			display: flex;
			justify-content: center;

		}

		.main {
			background-color: white;
			border: 20px solid greenyellow;
			margin: center;
		}

		.form {
			padding-top: 20px;
			padding-bottom: 10px;
		}

		.tmbl {
			padding-bottom: 20px;
		}

		.pr {
			text-align: right, 50px;
		}

		#judul {
			border: 3px solid black;
		}

		#judul, .b{
			text-decoration: double;
		}

	</style>

</head>

<body>
  <div class="main">
	<form action="data.php" class="alert alert-primary" class="form" method="POST">

	<div id="judul" class="alert alert-primary" role="alert">
	<b>Form Registrasi</b>
	</div>

	<div class="container text-center">
	 <div class="row">
     <div class="col-3">
		Nama : <input class="form-control" type="text" name="nama">
		<br/>
	 </div>

	  <div class="col-3">
		NIM/NPM : <input class="form-control" type="number" name="nim">
		<br/>
	  </div>



	  <div class="col-3">
		Asal Daerah : <select name="asal" class="form-control" aria-label="Default select example">
		<option selected>Pilih</option>
		<option value="1">Pangkal Pinang</option>
		<option value="2">Kab Bangka</option>
		<option value="3">Kab. Bangka selatan</option>
		<option value="4">Kab Bangka Tengah</option>
		<option value="5">Belitung</option>
		</select>
		<br/>
	  </div>
	 </div>

	 	<div class="col-3">
		Prodi : <select name="prodi" class="form-select" aria-label="Default select example">
			<option selected>Pilih</option>
			<option value="Pilih">Pilih</option>
			<option value="D3 IT">D3 IT</option>
			<option value="D3 Ekonomi">D3 Ekonomi</option>
			<option value="S1 Hukum">S1 Hukum</option>
		</select>
		<br/>
		</div>
	  </div>

	  <div class="row">
		<div class="col-5">
		Jenis Kelamin :
			<input class="form-check-input" type="radio" name="jk" value="Laki - Laki ">Laki - Laki 
			<input class="form-check-input" type="radio" name="jk" value="Perempuan">Perempuan
		</div>
	  </div>
		
	

		<div class="row">
	 	<div class="col-5">
		Status : 
			<input class="form-check-input" type="radio" name="st" value="Belum Menikah"> Belum Menikah
			<input class="form-check-input" type="radio" name="st" value="Menikah" style="text-align: righ;"> Menikah
			<br/>
		</div>
		</div>
		<br/>

		<br/>
		<button type="submit" id="tmbl" class="btn btn-primary">Simpan</button>
		</div>
	</form>

  </div>
 </div>
</div>

</body>
</html>