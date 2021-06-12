<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Data Buku</title>
  </head>
  <body>
<br>
<div class="container">
    <h3 class="text-center">Data Buku Ahmad Abdul Aziz (1461900094)</h3>
    <br>

    <a href="/export" class="btn btn-success mb-3"><i class="fa fa-file-excel"aria-hidden="true"> </i> &nbsp; Export Excel</a>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Jenis Buku</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $no = 1;
        foreach ($katalog as $key => $item) {
    ?>
    <tr>
      <th scope="row"><?php echo $no; ?></th>
      <td><?php echo $item->judul ?></td>
      <td><?php echo $item->tahun_terbit ?></td>
      <td><?php echo $item->jenis['jenis'] ?></td>
    </tr>

    <?php 
    $no++;
              }
     ?>
  </tbody>
</table>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>