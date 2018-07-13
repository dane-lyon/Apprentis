<nav class="navbar navbar-default" style="background-color: rgb(0,124,155);">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="materiel.php" style="color: white; font-weight: bold; font-size: 20px">GMN</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="emprunt.php" style="color: white;">Emprunt</a></li>
        <li><a href="retour.php" style="color: white;">Retour</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">Modif. Base Données<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="ajout.php" style="color: black;">Ajout</a></li>
            <li><a href="SupprCategorie.php" style="color: black;">Categories</a></li>
            <li><a href="SupprMateriel.php" style="color: black;">Matériels</a></li>
            <li><a href="SupprFormateur.php" style="color: black;">Formateurs</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="Includes/logout.php" style="color: white;"><span class="glyphicon glyphicon-log-out">Déconnexion</span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>