<!doctype html>
<?php
include "array.php";
?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="styles.css">

  <title>Hello, world!</title>
</head>
<body>
  <nav class="navbar navbar-light justify-content-between">
    <a class="navbar-brand"><h6>Photohgraph</h6></a>
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
    </form>
  </nav>
  <div class="container">
    <div class="wrapper">
      
      <div id='foto' class='carousel slide mb-5' data-ride='carousel'>
        <div class='carousel-inner'>
          <?php $i=0; foreach ($data_carousel as $row): ?>
          <?php if ($i==0) {$set_ = 'active'; } else {$set_ = ''; } ?> 
          <div class='carousel-item <?php echo $set_; ?>'>
            <div class="text-center">
              <img src='<?php echo $row->gambar; ?>' class='carousel-img d-block w-100 img-fluid rounded' alt="Responsive image">
            </div>
          </div>
          <?php $i++; endforeach ?>
        </div>

        <a class='carousel-control-prev' href='#foto_villa' role='button' data-slide='prev'>
          <span class='carousel-control-prev-icon' aria-hidden='true'></span>
          <span class='sr-only'>Previous</span>
        </a>
        <a class='carousel-control-next' href='#foto_villa' role='button' data-slide='next'>
          <span class='carousel-control-next-icon' aria-hidden='true'></span>
          <span class='sr-only'>Next</span>
        </a>
      </div>
      

      <div class="row">
        <?php      foreach ($data_artikel as $data){        ?>

        <div class="col-sm-6 mb-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?= $data->judul ?></h5>
              <p class="card-text"><?= $data->text ?></p>
              <img src="<?= $data->gambar ?>">
              <a href="#" class="btn btn-primary mt-3">Go somewhere</a>
            </div>
          </div>
        </div>

        <?php } ?>      
      </div>

    </div>
  </div>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>