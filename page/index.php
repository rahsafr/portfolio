<!doctype html>
<?php $nav_en_cours = 'index'; ?>

<html lang="fr">
  <head>
    <?php include("../build/css.php"); ?>
    <link rel="stylesheet" type="text/css" href="../css/index.css">
  </head>

  <body>
    <?php include("../build/menu.php"); ?>

      <div class="container-fluid text-center index-top-text welcome animated fadeInLeft fast">
        <h1 class="animated fadeInRight slow">Bienvenue sur mon portfolio</h1>
        <img class="animated fadeInLeft slow" src="../img/work.png" />
      </div>

      <div class="container-fluid index-top-text intro">
        <h1>Je m'appelle Thomas. Je suis <span class="color_blue">étudiant en DUT Informatique</span> à l'université de Caen. Ce portfolio a pour but de présenter mon parcours et les différents projets sur lesquels j'ai travaillé.</h1>
      </div>

       <div class="container-fluid index-top-text actualite">
        <h1>Mes derniers projets</h1>
        <div id="actualite_flex">
        <div class="card " 
                        data-aos="fade-up"
                        data-aos-duration="1000"
                        data-aos-once="true"
        >
            <img class="card-img-top" src="../img/ocovoit.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">O'Covoit</h5>
              <p class="card-text">Site de covoiturage écologique local réalisé dans le cadre des études.</p>
              <a href="#" class="float-right">Découvrir le projet </a>
            </div>
      </div>
      <div class="card" 
                data-aos="fade-up"
                data-aos-duration="1000"
                data-aos-once="true"
        >
        <img class="card-img-top" src="../img/rahsa.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">RaSha</h5>
          <p class="card-text">Site de photographie sur le prêt-à-porter et les avis communautaire</p>
          <a href="#" class="float-right">Découvrir le projet</a>

        </div>
      </div>
    </div>  
  </div>

  <?php include("../build/footer.php"); ?>
      
<?php include("../build/script.php"); ?>
  </body>
</html>