<!doctype html>
<?php $nav_en_cours = 'contact'; ?>

<html lang="fr">
  <head>
    <?php include("../build/css.php"); ?>
    <link rel="stylesheet" type="text/css" href="../css/contact.css">
  </head>

  <body>

    <?php include("../build/menu.php"); ?>

<div class="title">
  <h1>Contact</h1>
  <p>Besoin de plus de renseignements, de précisions sur mes compétences et mon travail ? Contactez-moi par ce formulaire et je vous répondrai dans les plus brefs délais.</p>
</div>

<form action="http://formspree.io/galliertpro@outlook.fr" method="post">
  <div class="container contact">
    <div class="row">
      <div class="col-md-9">
        <div class="contact-form">
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">NOM</label>
            <div class="col-sm-10">          
            <input type="text" class="form-control" id="name"name="name">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">EMAIL</label>
            <div class="col-sm-10">          
            <input type="email" class="form-control" id="email" name="_replyto">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="sujet">SUJET</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="sujet" name="sujet">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="comment">MESSAGE</label>
            <div class="col-sm-10">
            <textarea class="form-control" rows="5" id="comment"></textarea>
            </div>
          </div>
          <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Envoyer</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>





    <?php include("../build/footer.php"); ?>
      
    <?php include("../build/script.php"); ?>
  </body>
</html>