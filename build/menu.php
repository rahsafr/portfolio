<link rel="stylesheet" type="text/css" href="../css/menu.css">


<nav class="navbar navbar-expand-md navbar">
  <!-- Brand -->
  <a class="navbar-brand" href="../page/index.php">
    GT
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon">
      <i class="fas fa-caret-down"></i>
    </span>
  </button>
    
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">        
      <li class="nav-item ml-auto <?php if ($nav_en_cours == 'index') {echo 'active-border';} ?>">
        <a class="nav-link" href="../page/index.php">accueil</a>
      </li>
      <li class="nav-item <?php if ($nav_en_cours == 'competence') {echo 'active-border';} ?>">
        <a class="nav-link" href="../page/competence.php">compétences</a>
      </li>
      <li class="nav-item <?php if ($nav_en_cours == 'portfolio') {echo 'active-border';} ?>">
        <a class="nav-link" href="#">portfolio</a>
      </li> 
      <li class="nav-item <?php if ($nav_en_cours == 'etudes') {echo 'active-border';} ?>">
        <a class="nav-link" href="#">études</a>
      </li> 
      <li class="nav-item <?php if ($nav_en_cours == 'contact') {echo 'active-border';} ?>">
        <a class="nav-link" href="../page/contact.php">contact</a>
      </li> 
    </ul>
  </div> 
</nav>