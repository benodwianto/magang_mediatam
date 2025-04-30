<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Bootstrap dasar gans</title>
</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid mx-3">
      <a class="navbar-brand" href="#">Magang</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Contact</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">About</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- Navbar end -->

  <!-- form input -->
  <div class="container p-3">
    <div class="row">
      <h1 class="mt-2">Form</h1>
      <div class="col-lg-6">
        <?php
        include 'task9/functions.php';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $jenis_kelamin = $_POST['jenis_kelamin'];
          $usia = $_POST['usia'];
          $pesan = $_POST['pesan'];

          tambahUser($name, $email, $password, $usia, $jenis_kelamin, $pesan);
        }
        ?>

        <form action="" method="POST">
          <div class="mb-3 mt-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name"></label>
          </div>
          <div class="mb-3 mt-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">EAEOOEO</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
              <option selected>Pilih Jenis Kelamin</option>
              <option value="laki-laki">Laki - Laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="usia" class="form-label">
              Usia
              <input type="number" name="usia" class="form-control" id="usia" aria-describedby="emailHelp">
            </label>
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea name="pesan" class="form-control" cols="80" rows="5" id="pesan"></textarea>
          </div>
          <button type="submit" class="btn btn-dark">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <!-- End input -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>