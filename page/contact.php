<!doctype html>
<html lang="fr">
  <head>
    <?php include("../build/script.php"); ?>
    <link rel="stylesheet" type="text/css" href="../css/contact.css">

    <title>Thomas Gallier</title>

  </head>

  <body>

    <?php include("../build/menu.php"); ?>

<div class="title">
  <h1>Contact</h1>
  <p>Besoin de plus de renseignements, de précisions sur mes compétences et mon travail ? Contactez-moi par ce formulaire et je vous répondrai dans les plus brefs délais.</p>
</div>
<div class="container contact">
  <div class="row">
    <div class="col-md-9">
      <div class="contact-form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="fname">NOM</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="fname"name="fname">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="lname">EMAIL</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" name="lname">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">SUJET</label>
          <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email">
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






    <?php include("../build/footer.php"); ?>
  </body>
</html>