<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
	<link rel="icon" href="img/chat.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>

<body>

<!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Digital Talent</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Programming
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">PHP</a></li>
                  <li><a class="dropdown-item" href="#">Javascript</a></li>
                  <li><a class="dropdown-item" href="#">Python</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>


<!-- Login -->




<!-- Data -->
<div class="row">
  <div class="mb-3">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nama Anda</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat Anda</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Jenis Kelamin</label>
      <select class="form-select" aria-label="Default select example">
        <option selected>Pria</option>
        <option value="2">Perempuan</option>
      </select>
      </div>

      <button type="file" class="btn btn-primary">Simpan</button>

    </div>

</div>

</body>
</html>