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
        <label for="tab2">Logiciel</label>


        <div class="tab-body-wrapper">
            <div id="tab-body-1" class="tab-body">
                <div class=" mb-3 py-5 container">
                  <h1>Mes compétences web</h1>
                  <h2>Du Front-End au Back-End</h2>
                </div>
      
              <div class="container-fluid mid-block">
                  <div class="col-md-6">
                    <h1>Front-End</h1>
                      
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="../img/html-css.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title"   >Card title</h5>
                              <p class="card-text"     >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="../img/javascript.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title"   >Card title</h5>
                              <p class="card-text"    >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img src="../img/sass.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title"   >Card title</h5>
                              <p class="card-text"     ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                  </div>
                    
                  <div class="col-md-6">
                      <h1>Back-End</h1>
                      
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="../img/php.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title"   >Card title</h5>
                              <p class="card-text"     ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div> 
                        </div>
                      </div>
                      
                      <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="../img/mysql.png" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title"   >Card title</h5>
                              <p class="card-text"     ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                          </div> 
                        </div>
                      </div>   
                  </div>
              </div>
              <div class="mb-3 py-3 container">
                  <h2>Framework</h2>
                </div>
                      
                <div class="container-fluid mid-block">
                    <div class="col-md-6">                        
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="../img/bootstrap.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title"      >Card title</h5>
                                <p class="card-text"       >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                            </div>
                          </div>
                        </div>

                        
                    </div>
                      
                    <div class="col-md-6">                        
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                              <div class="col-md-4">
                              <img src="../img/jquery.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title"      >Card title</h5>
                                <p class="card-text"       >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                            </div> 
                          </div>
                        </div>
                        
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                              <div class="col-md-4">
                              <img src="../img/laravel.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title"      >Card title</h5>
                                <p class="card-text"       >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                            </div> 
                          </div>
                        </div>
                        
                    </div>
                </div>
              </div>
              <div id="tab-body-2" class="tab-body">
                <div class="py-5 mb-3 container">
                    <h1>Mes compétences logicielles</h1>
                </div>
                <div class="container-fluid mid-block">
                    <div class="col-md-6">
                      <h1>Procédurale</h1>
                        
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              <img src="../img/c.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title"      >Card title</h5>
                                <p class="card-text"       >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                    </div>
                      
                    <div class="col-md-6">
                        <h1>Orienté objet</h1>
                        
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                              <div class="col-md-4">
                              <img src="../img/java.jpeg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title"      >Card title</h5>
                                <p class="card-text"       >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                            </div> 
                          </div>
                        </div>
                        <div class="card mb-3" style="max-width: 540px;">
                          <div class="row no-gutters">
                              <div class="col-md-4">
                              <img src="../img/python.png" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title"      >Card title</h5>
                                <p class="card-text"       >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              </div>
                            </div> 
                          </div>
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