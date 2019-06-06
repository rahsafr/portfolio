<!doctype html>
<?php $nav_en_cours = 'competence'; ?>

<html lang="fr">
  <head>
    <?php include("../build/css.php"); ?>
    <link rel="stylesheet" type="text/css" href="../css/competence.css">
  </head>

  <body>

    <?php include("../build/menu.php"); ?>


    <div class="tabs-wrapper">
        <input type="radio" name="tab" id="tab1" class="tab-head" checked="checked"/>
        <label for="tab1">Web</label>
        <input type="radio" name="tab" id="tab2" class="tab-head" />
        <label for="tab2">Logiciels et autres</label>


        <div class="tab-body-wrapper">
            <div id="tab-body-1" class="tab-body">
                <div class=" mb-3 py-5 container">
                  <h1>Mes compétences web</h1>
                  <h2>Du Front-End au Back-End</h2>
                </div>
      
              <div class="container-fluid mid-block">
                  <div class="col-md-6">
                    <h1>Front-End</h1>
                      
                      <div class="progress">
                          <div class="progress-bar  " role="progressbar"  aria-valuenow="90"  style="padding-right: 90%" aria-valuemin="0" aria-valuemax="100">
                          <span >HTML/CSS</span></div>
                        </div>

                     <div class="progress">
                          <div class="progress-bar  " role="progressbar" style="padding-right: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                          <span style="padding-right: 60%" >JAVASCRIPT</span></div>
                        </div>
                      
                      <div class="progress">
                          <div class="progress-bar  " role="progressbar" style="padding-right: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                          <span>SASS</span></div>
                        </div>
                      
                  </div>
                    
                  <div class="col-md-6">
                      <h1>Back-End</h1>
                      
                      <div class="progress">
                          <div class="progress-bar  " role="progressbar" style="padding-right: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                          <span>PHP</span></div>
                        </div>
                      
                      <div class="progress">
                          <div class="progress-bar  " role="progressbar" style="padding-right: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                          <span>MYSQL</span></div>
                        </div>   
                  </div>
              </div>
              <div class="mb-3 py-3 container">
                  <h2>Framework</h2>
                </div>
                      
                <div class="container-fluid mid-block">
                    <div class="col-md-6">                        
                        <div class="progress">
                          <div class="progress-bar  " role="progressbar" style="padding-right: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                          <span>BOOTSTRAP</span></div>
                        </div>

                        
                    </div>
                      
                    <div class="col-md-6">                        
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="padding-right: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                          <span>JQUERY</span></div>
                        </div>
                        
                        <div class="progress">
                          <div class="progress-bar  " role="progressbar" style="padding-right: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                          <span>LARAVEL</span></div>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="container-fluid mid-block mt-5">
                    <div class="col-md-12 block_text">
                             <h1>Vous avez une idée ? Besoin d'un conseil ? <a href="../page/contact.php">Contactez-moi dès maintenant ! </a></h1>
                    </div> 
                </div>
              </div>
                
              <div id="tab-body-2" class="tab-body">
                <div class="py-5 mb-3 container">
                    <h1>Mes compétences logiciels et autres</h1>
                </div>
                <div class="container-fluid mid-block">
                    <div class="col-md-6">
                      <h1>Procédurale</h1>
                        
                        <div class="progress">
                          <div class="progress-bar  " role="progressbar" style="padding-right: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                          <span>C</span></div>
                        </div>
                        
                        
                    </div>
                      
                    <div class="col-md-6">
                        <h1>Orienté objet</h1>
                        
                        <div class="progress">
                          <div class="progress-bar  " role="progressbar" style="padding-right:65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                          <span>JAVA</span></div>
                        </div>
                        <div class="progress">
                          <div class="progress-bar  " role="progressbar" style="padding-right: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                          <span>PYTHON</span></div>
                        </div>
                        
                        
                    </div>
                    
                </div>
                <div class="container-fluid mid-block mt-2">                  
                  <div class="col-md-12">
                        <h1>Autres</h1>
                        
                        <div class="progress">
                          <div class="progress-bar  " role="progressbar" style="padding-right:70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                          <span>MICROSOFT OFFICE</span></div>
                        </div>
                        <div class="progress">
                          <div class="progress-bar  " role="progressbar" style="padding-right: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                          <span>GIMP</span></div>
                        </div>
                        
                     <div class="block_text">
                         <h1>Vous avez une idée ? Besoin d'un conseil ? <a href="../page/contact.php">Contactez-moi dès maintenant ! </a></h1>
                      </div>   
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <?php include("../build/footer.php"); ?>
      
    <?php include("../build/script.php"); ?>
  </body>
</html>