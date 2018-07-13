<?php header("content-type:text/html; charset=UTF-8"); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		<link rel="icon" type="image/png" href="Public/images/favicon.png" />
		<title>Gestion du Matériel Numérique</title>
        <script type="text/javascript" src="Public/bootstrap/js/jquery.js"></script>
		<script type="text/javascript" src="Public/bootstrap/js/bootstrap.js"></script>
		<link rel="stylesheet" href="Public/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="Public/css/ancienstyle.css" />
		<link rel="stylesheet" href="Public/css/style.css" />
    </head>
    <body>
        <?php require 'Includes/navbar_admin.php'; ?>

        <div class="AjoutMateriel">
            <form class="form-horizontal" method="post" action="Includes/ajoutmateriel.php">
                <fieldset>
                    <legend>Ajout de Matériel</legend>
                    <div class="form-group">
                        <label for="inputModele" class="col-sm-2 control-label">Modèle</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="inputModele" placeholder="Modele">
                        </div>
                    </div>
  
                    <div class="form-group">
                        <label for="inputRef" class="col-sm-2 control-label">Référence</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="inputRef" placeholder="Référence">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputRefDane" class="col-sm-2 control-label">Ref. Dane</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="inputRefDane" placeholder="Référence Dane">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputCategorie" class="col-sm-2 control-label">Catégorie</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="inputCategorie">
                                <option>Selectionner la catégorie</option>
                                <?php
                                    require_once 'Includes/BDD.php';

                                    $reponse=$pdo->query('SELECT Nom_Categorie FROM categorie ORDER BY Nom_Categorie');

                                    while($donnees = $reponse->fetch())
                                    {
                                        echo '<option value="'. $donnees['Nom_Categorie'] .'">'. $donnees['Nom_Categorie'] .'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Enregistrer</button>
                        </div>
                    </div>
                </fieldset>
            </form>
            <p><u style="color: red;"><b>ATTENTION</b></u>: le modele de chaque materiel doit être différent</p>
        </div>

        <div class="AjoutFormateur">
            <form class="form-horizontal" method="post" action="Includes/ajoutformateur.php">
                <fieldset>
                    <legend>Ajout de Formateur</legend>
                    <div class="form-group">
                        <label for="inputNom" class="col-sm-2 control-label">Nom</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="inputNom" placeholder="Nom_Prénom">
                        </div>
                    </div>
  
                    <div class="form-group">
                        <label for="inputMail" class="col-sm-2 control-label">Mail</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="inputMail" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputMail" class="col-sm-2 control-label">Rang</label>
                        <div class="col-sm-10">
                            <select name="inputRang">
                                <option>admin</option>
                                <option>user</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Enregistrer</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

        <div class="AjoutCategorie">
            <form class="form-horizontal" method="post" action="Includes/ajoutcategorie.php">
                <fieldset>
                    <legend>Ajout de Catégorie</legend>
                    <div class="form-group">
                        <label for="inputNom" class="col-sm-2 control-label">Nom de Catégorie</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="inputCategorie" placeholder="Categorie">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Enregistrer</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>