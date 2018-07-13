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
        <center>
            <div>
                <table border="1" class="table table-responsive tableIndex">
                    <tr>
                        <th>Modèles</th>
                        <th>Références</th>
                        <th>Ref. Dane</th>
                        <th>Catégorie</th>
                        <th>Actions</th>
                    </tr>
            
                    <?php 
                        require_once "Includes/BDD.php";

                        $reponse = $pdo->query('SELECT * FROM materiel ORDER BY materiel.Modele');

                        while($donnees = $reponse->fetch())
                        {
                            echo '<tr>';
                            echo '<td>' . $donnees['Modele'] . '</td>';
                            echo '<td>' . $donnees['Ref'] . '</td>';
                            echo '<td>' . $donnees['RefDane'] . '</td>';
                            echo '<td>' . $donnees['categorie'] . '</td>';
                            echo '<td style="padding-left: 5%;">
                                    <button
                                        data-toggle="modal"
                                        data-target="#Confirmation_Modification"
                                        onclick="envoi(`'. $donnees['Modele'] .'`);"
                                        class="btn btn-warning">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                    <button 
                                        data-toggle="modal" 
                                        data-target="#Confirmation_Suppression"
                                        onclick="afficher_materiel(`'.$donnees["Modele"].'`, `'.$donnees["RefDane"].'`);" 
                                        class="btn btn-danger">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                    </button>
                                </td>';
                            echo '</tr>';

                        }

                        $pdo = null;
                    ?>
                </table>
            </div>
        </center>

        <form id="form_formation_del" method="post" action="Includes/supprmateriel.php">
            <div class="modal fade" id="Confirmation_Suppression" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Voulez-vous vraiment supprimer?</h4>
                        </div>
                        <div class="modal-body">
                            Ayant pour:<br/>
                            Modèle: <b><div id="model_materiel_2"></div></b>
                            <input id="modele_materiel" name="modele_materiel" value="" hidden/>
                            Référence DANE: <b><div id="refDane_2"></div></b>
                            <input id="refDane" name="refDane" value="" hidden />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <form method="post" action="Includes/modifmateriel.php">
            <div class="modal fade" id="Confirmation_Modification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Que voulez-vous modifier?</h4>
                        </div>
                        <div class="modal-body"><center>
                            <div id="reponse_ajax_liste_reponses">
                        </div></center>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-danger">Modifier</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    <script>
        function afficher_materiel(pModele, pRefDane)
        {
            document.getElementById("modele_materiel").value = pModele;
            document.getElementById("model_materiel_2").innerHTML = pModele;
            document.getElementById("refDane").value = pRefDane;
            document.getElementById("refDane_2").innerHTML = pRefDane;
        }

        function envoi(pNom) 
        {
            $.ajax({
                url: "editmateriels.php",
                type: "POST",
                data: "modele="+pNom,
                dataType : 'html',
                success : function(code_html, statut) {
                    document.getElementById("reponse_ajax_liste_reponses").innerHTML = code_html;
                },
                error : function(resultat, statut, erreur){
                    console.log("Erreur : " + erreur);
                }
            });
        }
    </script>
    </body>
</html>