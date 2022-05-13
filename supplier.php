<?php
    function http_request($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}
    $data = http_request("http://localhost/db_pegawai/api/api_supplier_tampil.php");
    $data = json_decode($data, TRUE); 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="dist/favicon.ico">

    <title>Supplier</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">UAS Pemrograman 3</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="../db_pegawai/index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../db_pegawai/supplier.php">Supplier</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../db_pegawai/about.html">About</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container pt-4">
        <div class="container">
            <h4>
                <a href="../db_pegawai/tambah.php" class="badge badge-secondary px-2 py-2 float-right mb-2"><img src="../db_pegawai/image/tambah.ico" alt="Tambah" style="width: 20px; height: 20px"> Supplier</a>
            </h4>
        </div>
        <table class="table table-striped mt-5" style="width:100%">
            <tr class="text-center bg-dark text-light">
                <th>ID</th>
                <th>Nama Supplier</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            <?php foreach ($data as $data) { ?>
            <tr class="table-secondary">
                <td class="text-center">
                    <?= $data["id"] ?>
                </td>
                <td>
                    <?= $data["nama_supplier"] ?>
                </td>
                <td class="text-center">
                    <?= $data["hp"] ?>
                </td>
                <td>
                    <?= $data["alamat"] ?>
                </td>         
                <td colspan="2" class="text-center">
                    <button class="badge badge-primary border-primary p-1 w-25">
                      <a class="text-light" href="http://localhost/db_pegawai/edit.php?id=<?= $data['id'] ?>">
                        Edit
                      </a> 
                    </button>
                    <button class="badge badge-primary border-primary p-1 w-25"> 
                      <a class="text-light" href="http://localhost/db_pegawai/api/api_supplier_hapus.php?id=<?= $data['id'] ?>">
                        Hapus
                      </a>
                    </button>
                </td>
            </tr>
            <?php } ?>
            </table>
        </div>       
    </div>

    <footer class="container fixed-bottom">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2021 Zidan Azhari Ramadhan, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>