<!doctype html>
<?php $nav_en_cours = 'portfolio'; ?>

<html lang="fr">
  <head>
    <?php include("../build/css.php"); ?>
    <link rel="stylesheet" type="text/css" href="../css/portfolio.css">
  </head>

  <body>

    <?php include("../build/menu.php"); ?>

<section>
  <div class="container gal-container">
    <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#1">
          <img src="../img/ocovoit.jpg">
        </a>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#2">
          <img src="../img/portfolio.png">
        </a>
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#3">
          <img src="../img/petitchevaux.png">
        </a>
      </div>
    </div>
    <div class="col-md-7 col-sm-6 co-xs-12 gal-item">
      <div class="box">
        <a href="#" data-toggle="modal" data-target="#4">
          <img src="../img/rahsa.jpg">
        </a>
      </div>
    </div>
  </div>
</section>
  

    <?php include("../build/footer.php"); ?>
      
    <?php include("../build/script.php"); ?>
  </body>
</html>